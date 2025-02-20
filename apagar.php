<?php
define ('DS', DIRECTORY_SEPARATOR);
$email= isset ($_GET['email'])? $_GET['email']:NULL;
if(! is_null($matricula)){
    $nomedoarquivo= __DIR__.DS.'usuarios.txt';
    require'arquivo.php';
    $handle= fopen($nomedoarquivo, 'r');
    $arquivotemporario = __DIR__.DS.'usuarios.tmp';
    $handletemporario= fopen($arquivotemporario, 'w');
    while(! feof($handle)){
        $row= fread($handle, 80);
        $recordar= explode(',', fread($handle, 80));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        if(! empty($recordar[0]) && $recordar[0]==$email){
            $nome=$recordar[1];
            $senha=$recordar[2];
        }
    }fclose($handle)
}
?>