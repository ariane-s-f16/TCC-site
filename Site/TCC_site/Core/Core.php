<?php

class Core
{
    private string $apiBaseUrl = 'http://127.0.0.1:8000'; // URL da API Laravel

    public function start()
    {
        // Captura a URL (ex: ?url=entrar)
        $url = $_GET['url'] ?? '';
        $url = trim(strtolower($url), '/');

        // Caminho base da pasta View
        $viewBasePath = __DIR__ . '/../View/';

        // Extensões de arquivos estáticos permitidos
        $staticExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'woff', 'ttf', 'ico', 'html'];

        // Verifica se é um arquivo estático
        $ext = pathinfo($url, PATHINFO_EXTENSION);
        if (in_array($ext, $staticExtensions)) {
            $staticFilePath = $viewBasePath . $url;

            if (file_exists($staticFilePath)) {
                $mimeTypes = [
                    'css'  => 'text/css',
                    'js'   => 'application/javascript',
                    'png'  => 'image/png',
                    'jpg'  => 'image/jpeg',
                    'jpeg' => 'image/jpeg',
                    'gif'  => 'image/gif',
                    'svg'  => 'image/svg+xml',
                    'woff' => 'font/woff',
                    'ttf'  => 'font/ttf',
                    'ico'  => 'image/x-icon',
                    'html' => 'text/html',
                ];

                $contentType = $mimeTypes[$ext] ?? 'application/octet-stream';
                header('Content-Type: ' . $contentType);
                readfile($staticFilePath);
                exit;
            } else {
                http_response_code(404);
                echo "Arquivo estático não encontrado.";
                exit;
            }
        }

        // === ROTEAMENTO DE VIEWS === //
        $viewRoutes = [
            '' => 'cadastro/Parte1/index.php',
            'entrar' => 'Entrar/index.php',
            'home' => 'Home/index.php',
            'cadastro/parte1' => 'cadastro/Parte1/index.php',
            'cadastro/parte2' => 'cadastro/Parte2/index.php',
            'cadastro/parte3/prestador' => 'cadastro/Parte3/Prestador/index.php',
            'cadastro/parte3/empresa' => 'cadastro/Parte3/Empresa/index.php',
            'cadastro/parte3/contratante' => 'cadastro/Parte3/Contratante/index.php',
            'esqueci_senha/codigo' => 'esqueci_senha/codigo/index.php',
            'esqueci_senha/verificacao' => 'esqueci_senha/verificacao/index.php',
            'trabalhadores' => 'Trabalhadores/index.php',
            'favoritos' => 'Favoritos/index.php'
            // adicione mais rotas aqui
        ];

        if (isset($viewRoutes[$url])) {
            $viewFile = $viewBasePath . $viewRoutes[$url];

            if (file_exists($viewFile)) {
                require_once $viewFile;
                exit;
            } else {
                http_response_code(404);
                echo "View não encontrada.";
                exit;
            }
        }

        // === REQUISIÇÃO PARA API === //
        $method = $_SERVER['REQUEST_METHOD'];
        $data = [];

        if (in_array($method, ['POST', 'PUT'])) {
            $rawData = file_get_contents("php://input");
            $data = json_decode($rawData, true) ?? $_POST;
        } elseif ($method === 'GET') {
            $data = $_GET;
            unset($data['url']);
        }

        $apiUrl = rtrim($this->apiBaseUrl, '/') . '/api/' . $url;
        $response = $this->makeRequest($method, $apiUrl, $data);

        header('Content-Type: application/json; charset=utf-8');
        echo $response;
    }

    private function makeRequest(string $method, string $url, array $data = []): string
    {
        $ch = curl_init();
    
        // Detecta se há upload de arquivo (via FormData)
        $hasFile = false;
        foreach ($_FILES as $file) {
            if ($file['error'] === UPLOAD_ERR_OK) {
                $hasFile = true;
                break;
            }
        }
    
        // Se for POST e houver arquivo, usa multipart/form-data
        if ($method === 'POST' && $hasFile) {
            $postFields = [];
    
            // Adiciona campos normais
            foreach ($_POST as $key => $value) {
                $postFields[$key] = $value;
            }
    
            // Adiciona arquivos
            foreach ($_FILES as $key => $file) {
                $postFields[$key] = new CURLFile($file['tmp_name'], $file['type'], $file['name']);
            }
    
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            $headers = ['Accept: application/json'];
    
        } else {
            // JSON padrão (sem arquivo)
            switch ($method) {
                case 'GET':
                    if (!empty($data)) {
                        $url .= '?' . http_build_query($data);
                    }
                    break;
                case 'POST':
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                    break;
                case 'PUT':
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                    break;
                case 'DELETE':
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                    break;
            }
            $headers = [
                'Content-Type: application/json',
                'Accept: application/json',
            ];
        }
    
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
        $result = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);
    
        if ($error) {
            return json_encode(['erro' => 'Erro ao acessar a API: ' . $error]);
        }
    
        return $result;
    }
    
}
