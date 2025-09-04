<?php
    class Core
    {
        public function start($urlGet)
        {  
            //dividi a URl em partes
            $url = $_GET['url'] ?? '';
            $url = trim($url, '/');
            $urlPartes = explode('/', $url);

            //verificando se o controller existe e define ele 

            if (!empty($urlPartes[0])) {
                $controller = 'Controller\\' . ucfirst($urlPartes[0]) . 'Controller';
            } else {
                $controller = 'Controller\\HomeController';
            };

        // Define o ID, se existir
        $id = $urlPartes[1] ?? null;

       

        // Verifica se a classe do controller existe
        
        if (!class_exists($controller)) {
            http_response_code(404);
            echo json_encode(['erro' => 'Controller não encontrado']);
            exit;
        
        }
        $controllerInstance = new $controller();

        // Define o método de acordo com o HTTP
        $method = $_SERVER['REQUEST_METHOD'];

        // Mapeia o método para função do controller
        switch ($method) {
            case 'GET':
                $action = $id ? 'show' : 'index';
                break;
            case 'POST':
                $action = 'store';
                break;
            case 'PUT':
                $action = 'update';
                parse_str(file_get_contents("php://input"), $_PUT);
                $_REQUEST = $_PUT; 
                break;
            case 'DELETE':
                $action = 'delete';
                break;
            default:
                http_response_code(405);
                echo json_encode(['erro' => 'Método não permitido']);
                exit;
        }

        // Verifica se o método existe no controller
        if (!method_exists($controllerInstance, $action)) {
            http_response_code(404);
            echo json_encode(['erro' => 'Método não encontrado']);
            exit;
        }

        $response = call_user_func_array([$controllerInstance, $action], [$id]);

        // Verifica se é chamada da API ou navegador
        $isJsonRequest = isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false;
        
        // Se for chamada da API (JSON)
        if ($isJsonRequest) {
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($response);
            return;
        }
        
        // Se for acesso pelo navegador (HTML), o controller já incluiu a view com require_once
        // NÃO envie cabeçalho nem use json_encode
        return;
       
          
        }
    }
?>
