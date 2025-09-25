<?php

require_once 'TCC_site/Core/Core.php';

// Aqui não define header JSON, porque pode precisar mandar HTML
// header('Content-Type: application/json; charset=utf-8');

spl_autoload_register(function($class) {
    $baseDir = __DIR__ . '/';
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$core = new Core();
$core->start();
