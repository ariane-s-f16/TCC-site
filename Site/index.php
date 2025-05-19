<?php

require_once  'TCC_site/Core/Core.php';
require_once 'Controller/Profissionalcontroles.php';
require_once 'Controller/Empresacontroles.php';
require_once 'Controller/Portifoliocontroles.php';
require_once  'TCC_site/Controller/Homecontroles.php';
require_once  'TCC_site/Controller/Errorcontroles.php';
require_once  'TCC_site/Lib/Banco/Conexao.php';





$arquivo= file_get_contents('TCC_site/Views/Inicio.html');

header('Content-Type: application/json; charset=utf-8');

    $core = new Core;
    $core-> start ($_GET);
   
?>