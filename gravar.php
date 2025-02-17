<!--passo a passo(lógica)-->
<!--(1) pegar os dados enviados pelo método POST -->
<!--(1.2-) verificar se o nome do aluno foi enviado, caso n for, nd vai acontecer e e a página inicial vai ser exibida-->
<!--(1.5-)definir um caminho absoluto para armazenar os dados no arquivon de texto na variável $nomedoarquivo--->
<!--(2)criar o arquivo 'usuarios.txt' se ele não existir e garantir q ele tem permissão para ser gravado-->
<!--(3)abrir o arquivo 'usuarios.txt' e colocar no modo de leitura-->
<!--(4)verificar se a requisição é para inclução ou para alterar-->
<!--(5)caso seja uma inclusão -->

<?php
define('DS', DIRECTOR_SEPARATOR);
$nome = isset($_POST['nome'])? $_POST['nome'] :NULL;
$email = isset($_POST['email'])? $_POST['email'] :NULL;
$senha = isset($_POST['senha'])? $_POST['senha'] :NULL;


if(! is_null ($nome)){
    $nomedoarquivo= __DIR__.DS."usuarios.txt";
    require 'arquivo.php';
    $handle= fopen($nomedoarquivo, 'r');

    if(empty($email)){
        $ultimoemail = 0;
        while(! feof($handle)){
            $recordar= explode(',', fread($handle,80));
            $ultimoemail=(isset($recordar[0]) && empty($recordar[0])) ? $ultimoemail : $recordar[0];
        }

    }
    fclose($handle);
    $handle= fopen(__DIR__.DS.'usuarios.txt', 'a');
    $email= $ultimoemail + 1;
    fwrite($handle, substr($email.','.$nome.','. str_repeat('', 80), 0, 78) . ",\n",80);
    fclose($handle);

}else {
    $arquivotemporario = __DIR__.DS."usuarios.txt";
    $handletemporario = fopen($arquivotemporario, 'w');
    while(! feof($handle)){
        $row= fread($handle, 80);
        $recordar= explode(',', 80);
        $ultimoemail=(isset($recordar[0]) && empty($recordar[0])) ? $ultimoemail : $recordar[0];
        if(!$ultimoemail = $email){
            fwrite($handletemporario, substr($email. ','. $nome.','.str_repeat('', 80), 0, 78) .",\n",80 );

        }else{
            fwrite($handletemporario, $row);
        }
        fclose($handletemporario);
        fclose($handle);
        unlink($arquivotemporario);
        copy($arquivotemporario, $nomedoarquivo);
        
    }
    fclose($handle);
}
header ('Location: index.php ');



?>