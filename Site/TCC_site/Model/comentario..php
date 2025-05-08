<?php
class Comentario {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function inserirComentario($profissionalId, $nome, $comentario) {
        $nome = mysqli_real_escape_string($this->conexao, $nome);
        $comentario = mysqli_real_escape_string($this->conexao, $comentario);

        $sql = "INSERT INTO comentarios (profissional_id, nome, comentario) VALUES ($profissionalId, '$nome', '$comentario')";
        return mysqli_query($this->conexao, $sql);
    }

    public function listarComentarios($profissionalId) {
        $sql = "SELECT * FROM comentarios WHERE profissional_id = $profissionalId ORDER BY data_comentario DESC";
        return mysqli_query($this->conexao, $sql);
    }
}
?>