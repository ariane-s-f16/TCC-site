<?php

require_once  'TCC_site/Core/Core.php';
require_once  'TCC_site/Controller/Homecontroles.php';
require_once  'TCC_site/Controller/Errorcontroles.php';



$arquivo= file_get_contents('TCC_site/estrutura/inicio.html');

ob_start();
    $core = new Core;
    $core-> start ($_GET);
    $saida = ob_get_contents();
ob_end_clean();

$novoarquivodetmp= str_replace('{{area dinamica}}', $saida , $arquivo);
echo $novoarquivodetmp;

?>