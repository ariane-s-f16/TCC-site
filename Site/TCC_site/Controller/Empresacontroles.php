<?php
namespace Controller;

require_once 'TCC_site/Model/Empresa.php';
require_once 'TCC_site/Model/Portifolio.php';
require_once 'TCC_site/Model/Comentario.php';


class EmpresaControles {
    public function exibir() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            echo "ID inválido.";
            exit;
        }

        $id = intval($_GET['id']);

        $empresa = Empresa::getById($id);
        if (!$empresa) {
            echo "Empresa não encontrado!";
            exit;
        }

        $portifolio = Portifolio::getById($id);
        $comentarios = new Comentario();
        $comentario = $comentarios->getByUsuario($id);

        
       $empresa= $dados;

        // Carrega a view passando os dados
        require_once 'Views/Empresa/exibir.php';
    }
}

?>