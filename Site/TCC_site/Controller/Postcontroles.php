<?php

	class PostController
	{
		public function index($params)
		{
			try {
				$postagem = Postagem::selecionaPorId($params);

				$loader = new \Twig\Loader\FilesystemLoader('TCC_site/View');
				$twig = new \Twig\Environment($loader);
				$template = $twig->load('single.html');

				$parametros = array();
				$parametros['id'] = $postagem->id;
				$parametros['titulo'] = $postagem->titulo;
				$parametros['conteudo'] = $postagem->conteudo;
				$parametros['comentarios'] = $postagem->comentarios;
				

				$conteudo = $template->render($parametros);
				echo $conteudo;
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}
        }
    }