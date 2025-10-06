<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style9.css">
    <!-----><link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mudarcadastro">
            <h1>Não possui uma conta?</h1>

            <div class="button1">
                <a href="index.php?url=cadastro/parte1">Cadastrar</a>
            </div>
        </div>
        
        <form action="#" method="get">
            <div class="titulo"><h1>Entrar</h1></div>
            
            <div class="input_box">
                <input class="email" type="email" name="email" id="email" placeholder="Email" autofocus maxlength=30>
                <i class="bx bxs-user"></i>
            </div>
    
            <div class="input_box" id="Final">
                <input type="password" name="senha" id="senha" placeholder="Senha" autofocus maxlength="30">
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="esqueceu_senha">
                <a href=""index.php?url=entrar>Esqueceu a Senha?</a></p>
            </div>

            <div class="button2">
                <a href="#" onclick="fazerLogin()"class=entrar>Entrar</a>
            </div>

            <div class="mudarlogar2">
                <p>Já tem uma conta? <a href="index.php?url=cadastro/parte1">Conecte-se</a>.</p>
            </div>
        </form>
    </div>
    <script src="public/script.js"></script>
</body>
</html>