function mostrarsenha(){
    let senha = document.querySelector('#senha');

    if(senha.getAttribute('type') === 'password'){
        senha.setAttribute('type', 'text');
    }
    else{
        senha.setAttribute('type', 'password');
    }
}

function mostrarsenhaconf(){
    let csenha = document.querySelector('#confisenha');

    if(csenha.getAttribute('type') === 'password'){
        csenha.setAttribute('type', 'text');
    }
    else{
        csenha.setAttribute('type', 'password');
    }
}