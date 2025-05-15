<?php


class Comentario {
    private $conexao;

    public function __construct() {
        $this->conexao = Connection::GetConn();
        if (!$this->conexao) {
            throw new Exception("Erro na conexão com o banco de dados.");
        }
    }

    public function getByProfissional(int $profissional_id): array {
        $sql = "SELECT * FROM COMENTARIOS WHERE profissional_id = ? ORDER BY data_comentario DESC";
        $stmt = mysqli_prepare($this->conexao, $sql);
        if (!$stmt) {
            throw new Exception("Erro na preparação da consulta.");
        }
        mysqli_stmt_bind_param($stmt, "i", $profissional_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $comentarios = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comentarios[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $comentarios;
    }

    public function inserirComentario(int $id_profissional, string $nome, string $comentario): bool {
        $sql = "INSERT INTO comentarios (profissional_id, nome, comentario) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->conexao, $sql);
        if (!$stmt) {
            throw new Exception("Erro na preparação da inserção.");
        }
        mysqli_stmt_bind_param($stmt, "iss", $id_profissional, $nome, $comentario);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $success;
    }
    public function deletarComentario(int $id_profissional, string $nome, string $comentario): bool {
       
    } public function editarComentario(int $id_profissional, string $nome, string $comentario): bool {
       
    }

}
?>