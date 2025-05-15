<?php
class Portifolio
{
    public static function getById($id_profissional)
    {
        if (!is_int($id)) {
            $id = (int) $id;
        }
        
        $conexao = Connection::getConn();
        $sql = mysqli_prepare ($conexao, "SELECT * FROM PORTIFOLIO WHERE id = ?");
        mysqli_stmt_bind_param($sql, "i", $id);
        mysqli_stmt_execute($sql);
        $result = mysqli_stmt_get_result($sql);

        $portifolio= [];

        while ($row && mysqli_num_rows($result)> 0)
        {
            $portifolio[] = $row;
        }
        return $portifolio;
    }
} 
?>