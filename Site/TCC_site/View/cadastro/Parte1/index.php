<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style1.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="mudarlogar">
            <h1>Já tem uma conta?</h1>

            <div class="button1">
                <a href="index.php?url=entrar">Conectar</a>
            </div>
        </div>

        <form action="?url=/usuario/cadastro" method="post">
            <div class="titulo"><h1>Cadastro</h1></div>

            <div class="input_box">
                <input type="email" name="email" id="email" placeholder="Email" autofocus maxlength=30>
                <i class="bx bxs-user"></i>
                <span class="erro-msg" id="erro-email"></span>
            </div>
            
            <div class="input_box">
                <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="30">
                <i class="bx bxs-lock-alt" onclick="mostrarsenha()"></i>
                <span class="erro-msg" id="erro-senha"></span>
            </div>
            
            <div class="input_boxF">
                <input type="password" id="confisenha" placeholder="Confirmar Senha" maxlength="30">
                <i class="bx bxs-lock-alt" onclick="mostrarsenhaconf()"></i>

            </div>
            
            <div class="input_termos">
                <p>Ao continuar, você concorda com os nossos <a href="#">Termos de Uso</a> e de <a href="#">Privacidade</a>. </p>
            </div>
            
            <div class="button2">
                <button class="cadastrar" type="button" id="next-btn" onclick="salvarParte1()">Continuar</button>
            </div>
            
            <div class="mudarlogar2">
                <p>Já tem uma conta? <a href="index.php?url=entrar">Conecte-se</a>.</p>
            </div>
        </form>
    </div>

    <script src="public/script.js"></script>
</body>
</html>
