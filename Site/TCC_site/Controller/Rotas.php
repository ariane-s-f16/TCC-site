<?php

use TCC-SITE\Site\TCC_site\Controller\
{
    CadastroController,
    LoginController, 
    InicialController
};
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        InicialController::index();
    break;
    
    case '/login':
        LoginController::index();
    break;

    case '/logout':
        LoginController::logout();
    break;
    case '/Cadastro':
        CadastroController::index();
    break;
}


?>
