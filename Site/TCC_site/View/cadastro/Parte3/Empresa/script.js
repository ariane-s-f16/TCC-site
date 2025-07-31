function clicou(){
    const nome = document.querySelector('#nome').value;
    localStorage.setItem('nome', nome);

    const ramo = document.querySelector('#ramo').value;
    localStorage.setItem('ramo', ramo);
}