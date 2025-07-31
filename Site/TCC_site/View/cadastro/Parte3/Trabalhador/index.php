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
            <input type="text" name="nome" id="nome" placeholder="Nome" maxlength="30">
        </div>

        <div class="input_box">
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone" maxlength="13">
        </div>

        <div class="select">
            <select name="ramo" id="ramo">
                <option value="null">Profissâo</option>
            </select>
        </div>

        <div class="selectsLocal">
            <div class="selects">
                <select name="pais" id="Pais">
                    <option value="null">País</option>
                </select>
            </div>
    
            <div class="selects">
                <select name="estado" id="Estado">
                    <option value="null">Estado</option>
                </select>
            </div>
    
            <div class="selects">
                <select name="cidade" id="Cidade">
                    <option value="null">Cidade</option>
                </select>
            </div>
        </div>

        <div class="button">
            <a href="/Home/index.html" class="cadastrar" onclick="clicou()">Cadastrar</a>
        </div>

        <div class="input_termos">
            <p>Ao continuar, você concorda com os nossos <a href="#">Termos de Uso</a> e de <a href="#">Privacidade</a>. </p>
        </div>
    </form>

    <script src="script.js"></script>
</body>
</html>