<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style> 
        *{margin: 0; padding: 0;} body{font-size: 28px;} ul{list-style-type: none; margin: 0; padding: 0; overflow: hidden; border: 1px solid #e7e7e7; background-color: #f3f3f3;}
        li {float: left;} li a {display: block; color: #4b4646; text-align: center; padding: 20px 40px; text-decoration: none;} li a:hover:not(.active) {background-color: #ddd;} 
        li a.active {color: white; background-color: #04AA6D;}.secao {margin: 0; font-family: Helvetica, sans-serif;}.secao-div { display: flex; flex-wrap: wrap; justify-content: center; padding: 10px; text-align: center;}
        .secao-div-card {display: flex; flex-direction: column; align-items: center; width: calc(100% / 3 - 60px); margin: 10px; padding: 20px; box-shadow: 2px 2px 16px 0px rgba(0, 0, 0, 0.1); border-radius: 15px; background-color: white; transition: all 0.5s ease;}
        .secao-div-card:hover {transform: scale(1.1); z-index: 1;}.secao4-div-card img { width: 35%; height: auto;}.secao4-div-card h3 { margin-bottom: 0px;}
    </style>
    <title>Document</title>
</head>
<body>
     
    <div class="corpo">
        <div class="topo">
            <div class="navegaçao">
                <header>
                    <nav>
                        <ul>
                            <li><a href="View/Home.html">HOME</a></li>
                            <li><a href="View/Servicos.html">SERVIÇOS </a></li>
                            <li><a href="View/Sobre.html">SOBRE</a></li>
                            <li><a href="View/Login.html">LOGIN</a></li>
                            <li><a href="View/Cadastro.html">CADASTRO</a></li>
                        </ul>
                    </nav>
                </header>
                
            </div>
        </div>
        <div class="conteudo_linha">
            <div class="col_1">
                <h1>Bem vindo!<br> Venha conhecer nosso time<br></h1>
                <p>Já possui cadastro? Faça seu Login!</p>
                <button class="btn"><a href="View/Login.html">Login</a>
            </div>
            <div class="col_2">
                <img src="..." alt="loading">
            </div>
        </div>
        <div class="profissionais">
            <div class="corpo_profisionais">
                <div class="secao-div-card">
                    <?php $sql = "SELECT * FROM PROFISSIONAIS "; $rs= mysqli_query($conexao, $sql) or die("Erro neste caralho" . mysqli_error($conexao)); while($dados = mysqli_fetch_assoc($rs)){
                     ?>
                    <img data-lazyloaded="1" data-placeholder-resp="256x256" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4=" width="256" height="256" decoding="async" data-src="/pagina-html-css/missao.png" alt="imagem do card 1 html e css"><noscript><img width="256" height="256" decoding="async" src="/pagina-html-css/missao.png" alt="imagem do card 1 html e css"></noscript>
                    <h3><?=$dados = ['nome']?></h3>

                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>

                    <p><?=$dados = ['descricao']?></p>
                
                </div>

            <?php
                }
                ?>   
               
            </div>
        </div>


    </div>
</body>
</html>