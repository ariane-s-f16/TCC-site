<?php
define('DS', DIRECTORY_SEPARATOR);
 $nomedoarquivo= __DIR__.DS.'usuarios.txt';
 require 'arquivo.php';
 $handle fopen($nomedoarquivo, 'r');
 while(! feof($handle)){
    $recordar = explode(',', fread($handle, 80));
    if(! empty($recordar[0])){
        echo"<tr>";
        echo"<td><a href=\"form.php?email={$recodar[0]}\">{$recordar[0]}</a></td>";
        echo "<td>{$recordar[1]}</td>";
        echo "<td><a href=\"apagar.php?email={$recordar[0]}\"> EXCLUIR</a></td>";
        echo"</tr>";
    }
 }
 fclose($handle);

?>
