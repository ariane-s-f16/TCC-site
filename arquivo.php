<!--este arquivo está sendo importado pelo conmando require na pagina 'gravar.php'-->
<!--este arquivo confere se o arquivo usuarios.txt existe e se ele tem permissão de escrita que vai ser utilizado na pag'gravar.php'-->

<?php

if(! file_exists($nomedoarquivo)){

    if(! is_writeable(__DIR__)){
        echo'não dá para criar o arquivo usuarios.txt';
        goto EOF;
    }
    $handle= fopen($nomedoarquivo, 'a'),
    fclose($handle);
    chmod($nomedoarquivo, 0777);

 } EOF:
    
?>