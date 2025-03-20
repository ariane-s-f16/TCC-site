<?php
    class controle
    {
        public function index()
        {
            try
            {
                $coleciona= Postagem:: Selecionatd();
                $loader = new \Twig\Loader\FilesystemLoader('TCC_site/View');
				$twig = new \Twig\Environment($loader);
				$template = $twig->load('home.html');

				$parametros = array();
				$parametros['postagens'] = $coleciona;
				

				$conteudo = $template->render($parametros);
				echo $conteudo;

				
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}
                
        }
           
    }
    
?>