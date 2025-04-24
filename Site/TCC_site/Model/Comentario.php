<?php

class comentarios
{
    public static function selecionartdsoscomentarios($idPost)
    {
        $conexao = connection::GetConn();

        $sql = "SELECT * FROM comentario WHERE  id_postagem = :id";
        $sql= $conexao->prepare($sql);
        $sql->bindVelue(':id', $idPost, PDO::PARAM_INT);
        $sql->execute();
        $row = $sql-> fetchObject('comentario');
        if(!$resultado)
        {
            throw new Exception("nao foi encontrado");
        }
        return $resultado;
        
    }
}
?>