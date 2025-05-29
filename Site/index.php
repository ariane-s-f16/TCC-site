<?php
// Arquivo de entrada do sistema TCC_site
// Define cabeçalho, carrega classes e inicia o Core


require_once 'TCC_site/Core/Core.php';
require_once 'TCC_site/Controller/ProfissionalControles.php';
require_once 'TCC_site/Controller/HomeControles.php';
require_once 'TCC_site/Controller/EmpresaControles.php';





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