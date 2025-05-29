<?php
     class Empresa {
        private $conexao;
        
    public static function getById($id) 
    {

        if (!is_int($id)) {
            $id = (int) $id;
        }

        $conexao =  Conexao::GetConn();
        $stmt= mysqli_prepare ($conexao, "SELECT * FROM EMPRESAS WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if($result && mysqli_num_rows($result)>0)
        {
            return mysqli_fetch_assoc($result);
        }
        return null;
    }
    public function denunciar(int $id): bool{
        $conexao=  Conexao::GetConn();
        $sql = "UPDATE EMPRESAS SET denunciado = 1 WHERE id = ?";
        $stmt = mysqli_prepare($conexao, $sql);
        if (!$stmt) {
            throw new Exception("Erro na preparação da denúncia.");
        }
        mysqli_stmt_bind_param($stmt, "i", $id);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $success;
    }
}
?>