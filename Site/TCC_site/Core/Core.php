<?php

class Core
{
    private string $apiBaseUrl = 'http://127.0.0.1:8000'; // URL da sua API Laravel

    public function start()
    {
        $url = $_GET['url'] ?? '';
        $url = trim($url, '/');

        // Caminho base da pasta View para arquivos estáticos e formulário
        $viewBasePath = __DIR__ . '/../View/';

        // Se a URL for vazia, carregar o formulário HTML
        if ($url === '') {
            require_once $viewBasePath . 'cadastro/Parte1/index.php';
            exit;
        }

        // Verifica se a requisição é para arquivo estático (css, js, imagens, etc)
        $ext = pathinfo($url, PATHINFO_EXTENSION);
        $staticExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'woff', 'ttf', 'ico', 'html'];


        if (in_array(strtolower($ext), $staticExtensions)) {
            $staticFilePath = $viewBasePath . $url;

            if (file_exists($staticFilePath)) {
                // Define o Content-Type correto para cada tipo de arquivo
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

                $contentType = $mimeTypes[strtolower($ext)] ?? 'application/octet-stream';

                header('Content-Type: ' . $contentType);
                readfile($staticFilePath);
                exit;
            } else {
                http_response_code(404);
                echo "Arquivo estático não encontrado.";
                exit;
            }
        }

        // Caso não seja arquivo estático e nem a URL vazia, é chamada à API
        $method = $_SERVER['REQUEST_METHOD'];
        $data = [];

        if (in_array($method, ['POST', 'PUT'])) {
            $rawData = file_get_contents("php://input");
            $data = json_decode($rawData, true);
            if (!$data) {
                $data = $_POST;
            }
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

            default:
                return json_encode(['erro' => 'Método HTTP não suportado']);
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: application/json',
        ]);

        $result = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            return json_encode(['erro' => 'Erro ao acessar a API: ' . $error]);
        }

        return $result;
    }
}
