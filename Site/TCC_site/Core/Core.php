<?php

class Core
{
    private string $apiBaseUrl;

    public function __construct()
    {
        // Endereço fixo da API na porta 8003
        $this->apiBaseUrl = 'http://127.0.0.1:8003'; 
    }

    public function start()
    {
        ob_start();
        error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

        $url = $_GET['url'] ?? '';
        $url = trim(strtolower($url), '/');

        $viewBasePath = __DIR__ . '/../View/';
        $staticExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'woff', 'ttf', 'ico', 'html'];

        // === ARQUIVOS ESTÁTICOS ===
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
                header('Content-Type: ' . ($mimeTypes[$ext] ?? 'application/octet-stream'));
                readfile($staticFilePath);
                exit;
            } else {
                http_response_code(404);
                echo "Arquivo estático não encontrado.";
                exit;
            }
        }

        // === ROTAS DE VIEW ===
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
            'favoritos' => 'Favoritos/index.php',
            'perfil_acessar' => 'Perfil/acessando/index.php',
            'perfil_acessarTE' => 'Perfil/ProprioTE/index.php',
            'empresa' => 'empresa/index.php'
        ];

        if (isset($viewRoutes[$url]) && $url !== 'usuarios') {
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

        // === REQUISIÇÕES PARA API ===
        $method = $_SERVER['REQUEST_METHOD'];
        $data = in_array($method, ['POST', 'PUT']) 
                ? json_decode(file_get_contents("php://input"), true) ?? $_POST 
                : $_GET;
        unset($data['url']);

        // === TRATAMENTO ESPECIAL PARA USUÁRIOS ===
        if ($url === 'usuarios') {
            $res = $this->makeRequest('GET', $this->apiBaseUrl . '/api/users');
            $users = json_decode($res, true);

            if (!is_array($users)) {
                $users = [];
                error_log("ERRO: A API /users não retornou array válido. Conteúdo: " . $res);
            }

            $result = [];
            foreach ($users as $user) {
                if (!is_array($user) || !isset($user['id'])) continue;

                $prestador = $empresa = $telefone = null;

                $prestadorData = json_decode($this->makeRequest('GET', $this->apiBaseUrl . '/api/prestadores/user/' . $user['id']), true);
                if (is_array($prestadorData)) $prestador = $prestadorData;

                $empresaData = json_decode($this->makeRequest('GET', $this->apiBaseUrl . '/api/empresas/user/' . $user['id']), true);
                if (is_array($empresaData)) $empresa = $empresaData;

                $telefoneData = json_decode($this->makeRequest('GET', $this->apiBaseUrl . '/api/telefones/user/' . $user['id']), true);
                if (is_array($telefoneData)) $telefone = $telefoneData;

                $result[] = [
                    'user' => $user,
                    'prestador' => $prestador,
                    'empresa' => $empresa,
                    'telefone' => $telefone
                ];
            }

            ob_end_clean();
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
            exit;
        }

        // Roteamento padrão para outras APIs
        $apiUrl = rtrim($this->apiBaseUrl, '/') . '/api/' . $url;
        $response = $this->makeRequest($method, $apiUrl, $data);

        ob_end_clean();
        header('Content-Type: application/json; charset=utf-8');
        echo $response;
    }

    private function makeRequest(string $method, string $url, array $data = []): string
    {
        $ch = curl_init();

        $hasFile = false;
        foreach ($_FILES as $file) {
            if ($file['error'] === UPLOAD_ERR_OK) {
                $hasFile = true;
                break;
            }
        }

        if ($method === 'POST' && $hasFile) {
            $postFields = [];
            foreach ($_POST as $key => $value) $postFields[$key] = $value;
            foreach ($_FILES as $key => $file) $postFields[$key] = new CURLFile($file['tmp_name'], $file['type'], $file['name']);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            $headers = ['Accept: application/json'];
        } else {
            switch ($method) {
                case 'GET': if (!empty($data)) $url .= '?' . http_build_query($data); break;
                case 'POST': curl_setopt($ch, CURLOPT_POST, true); curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); break;
                case 'PUT': curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); break;
                case 'DELETE': curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); break;
            }
            $headers = ['Content-Type: application/json', 'Accept: application/json'];
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) return json_encode(['erro' => 'Erro ao acessar a API: ' . $error]);

        return $result;
    }
}
