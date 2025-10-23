<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style4.css">
    <title>Cadastro - Parte 3</title>
</head>
<body>
    <form id="formCadastro" enctype="multipart/form-data">
        <div class="input_foto">
            <label for="file"></label>
            <input type="file" name="file" id="file" accept="image/*" required>
        </div>

        <div class="input_box">
            <input type="text" name="nome" id="nome" placeholder="Nome" maxlength="50" required>
        </div>
        
        <div class="input_box">
            <input type="text" name="telefone" id="telefone" placeholder="Telefone" required>
        </div>
        <div class="input_box">
            <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
        </div>
       
        <div class="input_box">
            <input type="text" name="localidade" id="localidade" placeholder="Localidade" readonly>
        </div>
        <div class="input_box">
            <input type="text" name="cep" id="cep" placeholder="CEP" required>
        </div>
        <div class="input_box">
            <input type="text" name="rua" id="rua" placeholder="Rua" readonly>
        </div>
        <div class="input_box">
            <input type="text" name="numero" id="numero" placeholder="Número" required>
        </div>
        <div class="input_box">
            <input type="text" name="infoadd" id="infoadd" placeholder="Informações Adicionais">
        </div>
        
        <div class="selects">
            <select name="estado" id="Estado" required>
                <option value="">Estado</option>
            </select>
        
            <select name="cidade" id="cidade" required>
                <option value="">Cidade</option>
            </select>
        </div>

        <div class="button">
            <button type="button" class="cadastrar" onclick="finalizarCadastro()">Finalizar</button>
        </div>
        
        <div class="input_termos">
            <p>Ao continuar, você concorda com os nossos <a href="#">Termos de Uso</a> e de <a href="#">Privacidade</a>.</p>
        </div>
    </form>

    <script src="public/script.js"></script>

   
</body>
</html>
