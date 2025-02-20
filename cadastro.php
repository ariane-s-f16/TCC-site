<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de usuarios</h1>
    <a href="form.php"> incluir usuarios</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>senha</th>
                
            </tr>
        </thead>
        <tbody>
            <?php require'listar.php' ?> <!--require verifica antes de importar o arquivo-->
        </tbody>
    </table>
</body>
</html>