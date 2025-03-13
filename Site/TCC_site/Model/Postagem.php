<?php

public class Postagem
{
    public static function Selecionatd()
    {
        $conexao= new PDO('msql: host:localhost; dbname:tcc;', 'root:','');

        $var_dump= ($conexao);

       $res= Postagem:: Selecionatd2();
       $var_dump=($res);
    }

    public static function Selecionatd2()
    {
        $conexao= new PDO('msql: host:localhost; dbname:tcc;', 'root:','');

        $var_dump= ($conexao);

     
    }
}

?>