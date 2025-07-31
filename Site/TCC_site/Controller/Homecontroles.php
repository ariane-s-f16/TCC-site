<?php

namespace Controller;

class HomeControles
{
    public function index()
		{
			// Verifica se a requisição espera JSON (API)
			if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
				return ['mensagem' => 'Página inicial da API'];
			}
	
			// É acesso via navegador → retorna HTML
			header('Content-Type: text/html; charset=UTF-8');
			require_once __DIR__ . '/../View/Home/index.php';
			return null;
			
		}
}
?>