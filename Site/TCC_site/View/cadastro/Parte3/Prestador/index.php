<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style4.css">
    <title>Document</title>
</head>
<body>
    <form action="/usuario/cadastro">
        <div class="input_foto">
            <label for="foto"></label>
            <input type="file" name="foto" id="foto">
        </div>

        <div class="input_box">
            <input type="text" name="nome" id="nome" placeholder="Nome" maxlength="50">
        </div>
        
        <div class="input_box">
            <input type="text"  name="telefone" id="telefone" placeholder="Telefone">
        </div>
        <div class="input_box">
            <input type="text"  name="cpf" id="cpf" placeholder="CPF">
        </div>
       
        <div class="input_box">
            <input type="text"  name="localidade" id="localidade" placeholder="Localidade" readonly  >
        </div>
        <div class="input_box">
            <input type="text"  name="cep" id="cep" placeholder="CEP">
        </div>
        <div class="input_box">
            <input type="text"  name="rua" id="rua" placeholder="Rua" readonly >
        </div>
        <div class="input_box">
            <input type="text"  name="numero" id="numero" placeholder="Numero" >
        </div>
        <div class="input_box">
            <input type="text"  name="infoadd" id="infoadd" placeholder="Informações Adicionais">
        </div>
        
        
        
        
        <div class="selects">
           
            <select name="estado" id="Estado" required disabled >
                <option value="">Estado</option>
               
            </select>
        
            <select name="cidade" id="Cidade" required disabled>
                <option value="">Cidade</option>
                
            </select>
        </div>

        <div class="button">
        <button type="button" class="cadastrar" onclick="finalizarCadastro()">Finalizar</button>
        </div>
        
        <div class="input_termos">
            <p>Ao continuar, você concorda com os nossos <a href="#">Termos de Uso</a> e de <a href="#">Privacidade</a>. </p>
        </div>
    </form>
    <script src="public/script.js"></script>

</body>
</html>