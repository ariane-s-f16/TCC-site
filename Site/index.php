<?php
// Arquivo de entrada do sistema TCC_site
// Define cabeçalho, carrega classes e inicia o Core

require_once __DIR__ . '/Core/Core.php';
require_once __DIR__ . '/Controller/Profissionalcontroles.php';
require_once __DIR__ . '/Controller/Empresacontroles.php';
require_once __DIR__ . '/Controller/Portifoliocontroles.php';
require_once __DIR__ . '/Controller/Homecontroles.php';
require_once __DIR__ . '/Controller/Errorcontroles.php';
require_once __DIR__ . '/Lib/Banco/Conexao.php';

header('Content-Type: application/json; charset=utf-8');

spl_autoload_register(function($class) {
    $baseDir = __DIR__ . '/';
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

    $core = new Core;
    $core-> start ($_GET);
   
?>