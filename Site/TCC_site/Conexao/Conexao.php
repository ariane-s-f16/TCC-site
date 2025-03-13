<?php

abstract class Conexao
{
    private static $conexao;

    public static function GetConexao()
    {
        if(self::$conexao ==null)
        {
            self::$conexao = new PDO('msql: host:localhost; dbname:tcc;', 'root', '');
        }
       
        return self:: $conexao;
    }
}

?>