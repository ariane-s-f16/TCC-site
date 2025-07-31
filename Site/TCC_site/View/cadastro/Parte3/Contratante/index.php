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
            <input type="text" name="nome" id="nome" placeholder="Nome" maxlength="50">
        </div>
        
        <div class="input_box">
            <input type="tel" id="telefone" placeholder="Telefone">
        </div>
        
        <div class="selects">
            <select name="pais" id="Pais" required>
                <option value="Null">País</option>
                <option value="brasil">Brasil</option>
            </select>

            <select name="estado" id="Estado" required>
                <option value="Null">Estado</option>
                <option value="SP">SP</option>
            </select>
        
            <select name="cidade" id="Cidade" required>
                <option value="Null">Cidade</option>
                <option value="Jau">Jaú</option>
            </select>
        </div>

        <div class="button">
            <a href="#" class="cadastrar">Cadastrar</a>
        </div>
        
        <div class="input_termos">
            <p>Ao continuar, você concorda com os nossos <a href="#">Termos de Uso</a> e de <a href="#">Privacidade</a>. </p>
        </div>
    </form>
</body>
</html>