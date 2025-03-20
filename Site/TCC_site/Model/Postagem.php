<?php
include 'Lib/Banco/Conexao.php';

class Postagem
{
    public static function Selecionatd()
    {
        $conexao=  Connection::GetConn();

        $sql= "SELECT * FROM postagem ORDER BY ID DESC ";
        $sql= $conexao->prepare($sql);
        $sql->execute();

        $resultado= array();

        while($row = $sql-> fetchObject('Postagem'))
        {
            $resultado[]=$row;
        }
        if (!$resultado)
        {
            throw new Exception("não foi encontrado essa porra");
        }
        return $resultado;
  
    }

    public static function Selecionaporid($idPost)
    {
        $conexao= Connection::GetConn(); 

        $sql= "SELECT * FROM postagem WHERE ID = :id";
        $sql= $conexao->prepare($sql);
        $sql->bindVelue(':id', $idPost, PDO::PARAM_INT);
        $sql->execute();

        $resultado = $sql-> fetchObject('Postagem');
        if(!$resultado)
        {
            throw new Exception("nao foi encontrado");
        }
        return $resultado;
    }
    
}

?>