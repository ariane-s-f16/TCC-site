<?php

require_once  'TCC_site/Core/Core.php/';
require_once 'controllers/ProfissionalController.php';
require_once  'TCC_site/Controller/Homecontroles.php';
require_once  'TCC_site/Controller/Errorcontroles.php';
require_once  'TCC_site/Lib/Banco/Conexao.php';





$arquivo= file_get_contents('TCC_site/Views/Inicio.html');

ob_start();
    $core = new Core;
    $core-> start ($_GET);
    $saida = ob_get_contents();
ob_end_clean();



$controller = new ProfissionalController();
$controller->exibir();
?>