<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style> 
        * {margin: 0; padding: 0; box-sizing: border-box;}
        body {font-size: 20px; font-family: Helvetica, sans-serif;} ul {list-style-type: none; margin: 0; padding: 0; overflow: hidden; border: 1px solid #e7e7e7; background-color: #f3f3f3;}
        li {float: left;} li a {display: block; color: #4b4646; text-align: center; padding: 20px 40px; text-decoration: none;} li a:hover:not(.active) {background-color: #ddd;}
        li a.active {color: white; background-color: #04AA6D;}.carousel-container {position: relative; overflow: hidden; width: 100%;} .carousel-track {display: flex; width: max-content; animation: scroll 20s linear infinite;}
        @keyframes scroll { 0% { transform: translateX(0); }100% { transform: translateX(-50%); }}.card {flex: 0 0 auto; width: 200px;margin: 10px;padding: 10px;background: white;border: 1px solid #ccc;
        text-align: center;border-radius: 10px; box-shadow: 2px 2px 8px rgba(0,0,0,0.1);}

        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .card button {
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #04AA6D;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .card button a {
            text-decoration: none;
            color: white;
        }
    </style>
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
        <div class="menu_lateral">
            <div class="col_1">
                <h1>Bem vindo!<br> <br></h1>
                <p>Já possui cadastro? Faça seu Login!</p>
                <button class="btn"><a href="View/Login.html">Login</a></button>
            </div>
            <div class="col_2">
                <img src="..." alt="loading">
            </div>
        </div>
        <!--CARROSSEL AUTOMÁTICO PARA PROFISSIONAIS-->
        <div class="carousel-container">
            <div class="carousel-track">
           
                
                    <?php $sql = "SELECT * FROM EMPRESAS "; $rs= mysqli_query($conexao, $sql) or die("Erro neste caralho" . mysqli_error($conexao)); while($dados = mysqli_fetch_assoc($rs)){
                     ?> 
                     
                     <?php 
                     echo "
                     <div class='secao-div-card'>
                        <div style='border: 1px solid #ccc; margin: 10px; padding: 10px; width: 200px; text-align: center;'>
                            <img src='" . $dados["imagem"] . "' style='width:100%; height:auto;'><br>
                            <strong>" . $dados["nome"] . "</strong><br>
                            R$ " . number_format($dados["preco"], 2, ',', '.') . "
                            <button class='btn_card'><a href='  EMPRESA.php?id=" . $dados["id"] . "' style='text-decoration: none; color: inherit; cursor: pointer;'> mais informações </a></button>
                        </div>
                     </div>";
                      
                     ?>
                            
               

                    <?php
                }
                ?>   
            </div>    
               
           
        </div>

        <br>

        <!--CARROSSEL AUTOMÁTICO PARA EMPRESAS-->
        <div class="carousel-container">
            <div class="carousel-track">
           
                
                    <?php $sql = "SELECT * FROM EMPRESAS "; $rs= mysqli_query($conexao, $sql) or die("Erro neste caralho" . mysqli_error($conexao)); while($dados = mysqli_fetch_assoc($rs)){
                     ?> 
                     
                     <?php 
                     echo "
                     <div class='secao-div-card'>
                        <div style='border: 1px solid #ccc; margin: 10px; padding: 10px; width: 200px; text-align: center;'>
                            <img src='" . $dados["imagem"] . "' style='width:100%; height:auto;border-radius: 10%;'><br>
                            <strong>" . $dados["nome"] . "</strong><br>
                            R$ " . number_format($dados["preco"], 2, ',', '.') . "
                            <button class='btn_card'><a href='  EMPRESA.php?id=" . $dados["id"] . "' style='text-decoration: none; color: inherit; cursor: pointer;'> mais informações </a></button>
                        </div>
                     </div>";
                      
                     ?>
                            
               

                    <?php
                }
                ?>   
            </div>    
               
           
        </div>


    </div>
</body>
</html>