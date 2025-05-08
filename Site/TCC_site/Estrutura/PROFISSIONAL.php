<?php 
  $conexao=  Connection::GetConn();
    $id = intval($_GET['id']);

        $sql = "SELECT * FROM PROFISSIONAIS WHERE id = $id";
        $result = mysqli_query($conexao, $sql);

// Verifica se o prestador de servico foi encontrado
        if ($result && mysqli_num_rows($result) > 0) {
            $dados = mysqli_fetch_assoc($result);
        } else {
            echo "Profissional não encontrado!";
            exit;
        }
   
 echo " <div class='container_um'>
 <img src='" . $dados["imagem"] . "' style='width:100%; height:auto; border-radius:10%;'>
 <div class='descricao'> ". $dados["descricao"] . "  </div> </div>"; ?> 
 
 <!--PORTIFÓLIO-->
 <?php
 
 $sql= "SELECT * FROM PORTFOLIO WHERE profissional_id = $id";
$result= mysqli_query($conexao, $sql);

while ($dados = mysqli_fetch_assoc($result)) {
    echo "<div class='secao-div-card'>
            <img src='" . $dados["imagem"] . "'>
            <strong>" . $dados["descricao"] . "</strong>
          </div>";
}



$sql = "SELECT * FROM COMENTARIOS WHERE profissional_id = $id ORDER BY data_comentario DESC";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($coment = mysqli_fetch_assoc($result))
     {
        echo "<div style='border:1px solid #ccc; padding:10px; margin:10px 0;'>
                <strong>" . htmlspecialchars($coment["nome"]) . "</strong> disse:<br>
                <p>" . nl2br(htmlspecialchars($coment["comentario"])) . "</p>
                <small>Em " . date('d/m/Y H:i', strtotime($coment["data_comentario"])) . "</small>
              </div>";
    }
}
?>
    
       