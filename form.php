<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inclusao de usuarios</title>
</head>
<body>
    <form method="post" action="gravar.php">
        <div class="campos">
            <div class="campo1">Nome <input type="text" name="nome" value="<?php $nome ?>" autofocus="autofocus"/></div>
            <div class="campo2">email<input type="text" name="email" value="<?php $email ?>"/></div>
            <div class="campo3">senha<input type="password" name="senha" value="<?php $senha ?>"/></div>
            <br><br>

            <div class="form-group">
                <label class="col-md-4 control-label" for="areatexto">Descrição</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control"  name="descricao" value="<?php $descricao ?>">Escreva aqui</textarea>
                    </div>
            </div>
        </div>
    
</body>
</html>