<?php
require_once 'Model/Empresa.php';
require_once 'Model/Portfolio.php';
require_once 'Model/Comentario.php';

class Empresacontroles {
    public function exibir() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            echo "ID inválido.";
            exit;
        }

        $id = intval($_GET['id']);

        $empresa = Profissional::getById($id);
        if (!$empresa) {
            echo "Empresa não encontrado!";
            exit;
        }

        $portfolio = Portfolio::getByProfissional($id);
        $comentarios = Comentario::getByProfissional($id);

        // Carrega a view passando os dados
        require_once 'Views/Empresa/exibir.php';
    }
}

?>