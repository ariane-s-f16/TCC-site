<?php

abstract class Conexao
{
    private static $conexao;

    public static function GetConn()
    {
        if(self::$conexao ==null)
        {
            self::$conexao = new PDO('msql: host:localhost; dbname:OPI;', 'root', '');
        }
       
        return self:: $conexao;
    }
}

?>
