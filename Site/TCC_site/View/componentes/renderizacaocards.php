<?php
function renderizacaoCard($item, $link) {
    return "
    <div class='secao-div-card'>
        <div class='card'>
            <img src='".htmlspecialchars($item['imagem'])."' alt='Imagem'>
            <strong>".htmlspecialchars($item['nome'])."</strong><br>
            R$ ".number_format($item['preco'], 2, ',', '.')."<br>
            <button class='btn_card'>
                <a href='{$link}?id={$item['id']}'>mais informações</a>
            </button>
        </div>
    </div>";
}
?>