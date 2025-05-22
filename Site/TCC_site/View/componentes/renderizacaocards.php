<?php



function renderizacaoCard($item, $link) {
    $estrelas = intval($item['estrelas'] ?? 0); // Garantir que é int

    $htmlEstrelas = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $estrelas) {
            $htmlEstrelas .= "<span style='color: gold;'>★</span>";
        } else {
            $htmlEstrelas .= "<span style='color: lightgray;'>☆</span>";
        }
    }

    return "
    <div class='secao-div-card'>
        <div class='card'>
            <img src='".htmlspecialchars($item['imagem'])."' alt='Imagem'>
            <strong>".htmlspecialchars($item['nome'])."</strong><br>
             <div class='classificacao'>
             {$htmlEstrelas}
            </div>
            R$ ".number_format($item['preco'], 2, ',', '.')."<br>
            <button class='btn_card'>
                <a href='{$link}?id={$item['id']}'>mais informações</a>
            </button>
        </div>
    </div>";
}
?>