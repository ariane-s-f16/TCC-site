<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <div class="input_foto">
            <label for="foto"></label>
            <input type="file" name="foto" id="foto">
        </div>

        <div class="input_box">
            <input type="text" name="nome" id="nome" maxlength="30" placeholder="Nome">
        </div>

        <div class="input_box">
            <input type="tel" name="telefone" id="telefone" maxlength="9" placeholder="Telefone">
        </div>

        <div class="input_box">
            <input type="text" inputmode="numeric" name="cnpj" id="cnpj" maxlength="14" placeholder="CNPJ">
        </div>  

        <div class="select">
            <select name="ramo" id="ramo">
                <option value="Null">Ramo de Atuação</option>
            </select>
        </div>

        <div class="selectsLocal">
            <div class="selects">
                <select name="Pais" id="Pais">
                    <option value="Null">País</option>
                </select>
            </div>

            <div class="selects">
                <select name="Estado" id="Estado">
                    <option value="Null">Estado</option>
                </select>
            </div>

            <div class="selects">
                <select name="Cidade" id="Cidade">
                    <option value="Null">Cidade</option>
                </select>
            </div>
        </div>

        <div class="button">
            <a href="/Home/index.html" onclick="clicou()" class="cadastrar">Cadastrar</a>
        </div>

        <div class="input_termos">
            <p>Ao continuar, você concorda com os nossos <a href="#">Termos de Uso</a> e de <a href="#">Privacidade</a>. </p>
        </div>
    </form>

    <script src="script.js"></script>
</body>
</html>