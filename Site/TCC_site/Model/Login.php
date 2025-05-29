<?php

function verificacao(string $email, string $senha): ?array {
    $sql = "SELECT * FROM USUARIOS WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($this->conexao, $sql);
    if (!$stmt) {
        throw new Exception("Erro na preparação da consulta.");
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);
    }
       
        //  a senha no banco está criptografada e fazendo a verificação da hash
        if (password_verify($senha, $usuario['senha'])) {
            mysqli_stmt_close($stmt);
            return $usuario;
        }
}

?>