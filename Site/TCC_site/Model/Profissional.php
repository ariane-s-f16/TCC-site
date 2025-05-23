<?php
     class Profissional {
    public static function getById($id) 
    {

        if (!is_int($id)) {
            $id = (int) $id;
        }

        $conexao=  Conexao::GetConn();
        $stmt= mysqli_prepare ($conexao, "SELECT * FROM PROFISSIONAIS WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if($result && mysqli_num_rows($result)>0)
        {
            return mysqli_fetch_assoc($result);
        }
        return null;
    }
}
?>