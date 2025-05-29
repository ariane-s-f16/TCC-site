<?php

namespace Controller;

require_once 'TCC_site/Model/Profissional.php';
require_once 'TCC_site/Model/Portifolio.php';
require_once 'TCC_site/Model/Comentario.php';

class ProfissionalControles {
    public function exibir() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            echo "ID inválido.";
            exit;
        }

        $id = intval($_GET['id']);

        $profissional = Profissional::getById($id);
        if (!$profissional) {
            echo "Profissional não encontrado!";
            exit;
        }

        $portfolio = Portifolio::getById($id);
        $comentarios = new Comentario();
        $comentario= $comentarios-> getByUsuario($id);

        // Carrega a view passando os dados
        require_once 'views/profissional/exibir.php';
    }
}

?>