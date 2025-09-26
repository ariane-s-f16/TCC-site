
function criarcard() {
    const nome = localStorage.getItem('nome');
    const ramo = localStorage.getItem('ramo');

    let div = document.createElement('div');

    const div_card = document.createElement('div');
    div_card.classList.add('card');
    div.appendChild(div_card);

    const div_imagem = document.createElement('div');
    div_imagem.classList.add('imagem');
    div_card.appendChild(div_imagem);

    const div_infor = document.createElement('div');
    div_infor.classList.add('informacoes');
    div_card.appendChild(div_infor);

    const div_foto = document.createElement('div');
    div_foto.classList.add('foto');
    div_infor.appendChild(div_foto);

    const div_name = document.createElement('div');
    div_name.classList.add('name');
    div_infor.appendChild(div_name);

    const div_profissao = document.createElement('div');
    div_profissao.classList.add('profissao');
    div_infor.appendChild(div_profissao);

    const button = document.createElement('button');
    button.classList.add('button');
    button.innerText = 'Acessar Perfil';
    div_infor.appendChild(button);

    div_name.innerText = nome;
    div_profissao.innerText = ramo;

    document.querySelector('.homecards').appendChild(div);
}

window.addEventListener('DOMContentLoaded', criarcard);

// ======== Limpa buscadores ========

const buscador = document.getElementById('buscador');
if (buscador) {
    buscador.addEventListener('blur', () => buscador.value = '');
}

const bsl = document.getElementById('bsl');
if (bsl) {
    bsl.addEventListener('blur', () => bsl.value = '');
}