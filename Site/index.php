<?php

require_once 'Site/Core/Core.php';
require_once 'Site/Controller/Homecontroles.php';

$arquivo= file_get_contents('TCC-site/estrutura/inicio.php')
$core = new core;
$core-> start ($_GET);

echo $arquivo;
?>