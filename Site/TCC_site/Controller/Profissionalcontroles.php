<?php
require_once 'models/Profissional.php';
require_once 'models/Portfolio.php';
require_once 'models/Comentario.php';

class ProfissionalController {
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

        $portfolio = Portfolio::getByProfissional($id);
        $comentarios = Comentario::getByProfissional($id);

        // Carrega a view passando os dados
        require_once 'views/profissional/exibir.php';
    }
}

?>