<?php


class Comentario {
    private $conexao;

    public function __construct() {
        $this->conexao = Connection::GetConn();
        if (!$this->conexao) {
            throw new Exception("Erro na conexão com o banco de dados.");
        }
    }

    public function getByProfissional(int $usuario_id): array {
        $sql = "SELECT * FROM COMENTARIOS WHERE usuario_id = ? ORDER BY data_comentario DESC";
        $stmt = mysqli_prepare($this->conexao, $sql);
        if (!$stmt) {
            throw new Exception("Erro na preparação da consulta.");
        }
        mysqli_stmt_bind_param($stmt, "i", $usuario_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $comentarios = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comentarios[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $comentarios;
    }

    public function inserirComentario(int $usuario_id, string $nome, string $comentario): bool {
        $sql = "INSERT INTO COMENTARIOS (usuario_id, nome, comentario) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->conexao, $sql);
        if (!$stmt) {
            throw new Exception("Erro na preparação da inserção.");
        }
        mysqli_stmt_bind_param($stmt, "iss", $usuario_id, $nome, $comentario);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $success;
    }
    public function deletarComentario($comentario_id): bool 
    {
        $sql ="DELETE FROM COMENTARIOS WHERE id=? ";
        $stmt = mysqli_prepare($this->conexao, $sql);
        if (!$stmt) {
            throw new Exception("Erro na preparação da exclusão.");
        }

        mysqli_stmt_bind_param($stmt, "i", $comentario_id);
        $success = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $success;
       
    } public function editarComentario( int $comentario_id, string $novocomentario): bool {
          $sql = " UPDATE  COMENTARIOS SET comentario=? WHERE id=? ";
          $stmt = mysqli_prepare($this->conexao, $sql);
          if (!$stmt) {
              throw new Exception("Erro na preparação da inserção.");
          }
          mysqli_stmt_bind_param($stmt, "iss", $novocomentario, $comentario_id);
          $success = mysqli_stmt_execute($stmt);
          mysqli_stmt_close($stmt);
          return $success;
      
    }

}
?>