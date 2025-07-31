function criarcard(){
    const nome = localStorage.getItem('nome');
    const ramo = localStorage.getItem('ramo');

    let div = document.createElement('div');
    div.innerHTML = '<div class="card"></div>';
    let divcard = div.querySelector('.card');
    divcard.innerHTML = '<div class="imagens"></div> <div class="informacoes"></div>';
    let divinfor = divcard.querySelector('.informacoes');
    divinfor.innerHTML = '<div class="foto"></div> <h2 class="name"></h2> <h2 class="profission"></h2> <button class="button">Acessar perfil</button>';

    divinfor.querySelector('.name').innerText = nome;
    divinfor.querySelector('.profission').innerText = ramo;

    document.querySelector('.homecards').appendChild(divcard);
}

window.addEventListener('DOMContentLoaded', criarcard);