
<!--imagem do prestador de serviço/empresa-->
<div class='container_um'>
 <img src='<?= htmlspecialchars($profissional ['imagem'])?> ' style='width:100%; height:auto; border-radius:10%;'>
 <div class='descricao'>  <?= nl2br(htmlspecialchars($profissional ['descricao'])) ?></div> 
</div> 
<!--fim do prestador/empresa-->

<!--PORTIFOLIO-->
 
<?php foreach ($portfolio as $item): ?>
    <div class='secao-div-card'>
        <img src='<?= htmlspecialchars($item['imagem']) ?>'>
        <strong><?= htmlspecialchars($item['descricao']) ?></strong>
    </div>
<?php endforeach; ?>

<!--FIM DO PORTIFOLIO-->

<!-- COMENTÁRIOS -->
<?php foreach ($comentarios as $coment): ?>
    <div style='border:1px solid #ccc; padding:10px; margin:10px 0;'>
        <strong><?= htmlspecialchars($coment["nome"]) ?></strong> disse:<br>
        <p><?= nl2br(htmlspecialchars($coment["comentario"])) ?></p>
        <small>Em <?= date('d/m/Y H:i', strtotime($coment["data_comentario"])) ?></small>
    </div>
<?php endforeach; ?>
<!--FIM DOS COMENTARIOS-->