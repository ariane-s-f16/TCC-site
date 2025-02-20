<!--podemos alterar as informacções nesse arquivo-->
<?php
define('DS', DIRECTORY_SEPARATOR);
$email= isset($_GET['email'])? $_GET['email']: NULL;
$nome='';
$senha='';
if(! is_null($email)){
    $nomedoarquivo= __DIR__.DS.'usuarios.txt';
    $handle= fopen($nomedoarquivo, 'r');
    while(! feof($handle)){
        $recordar= explode(',', fread($handle, 80));
        if(! empty($recordar[0]) && $recordar[0]== $email){
            $nome= $recordar[1];
            $senha= $recordar[2];
            

        }
    }fclose($handle);
}

?>