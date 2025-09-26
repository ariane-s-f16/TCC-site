console.log("script.js carregado!");
// ======== Mostrar/ocultar senha ========

function mostrarsenha() {
    let senha = document.querySelector('#senha');
    senha.setAttribute('type', senha.getAttribute('type') === 'password' ? 'text' : 'password');
}

function mostrarsenhaconf() {
    let csenha = document.querySelector('#confisenha');
    csenha.setAttribute('type', csenha.getAttribute('type') === 'password' ? 'text' : 'password');
}
function clicou(){
    const nome = document.querySelector('#nome').value;
    localStorage.setItem('nome', nome);

    const ramo = document.querySelector('#ramo').value;
    localStorage.setItem('ramo', ramo);
}




// ======== Cadastro Parte 1 ========

function salvarParte1() {
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;
    const confSenha = document.getElementById("confisenha").value;

    const dados = {
        email,
        senha,
        confSenha
    };

    localStorage.setItem("cadastro", JSON.stringify(dados));

    window.location.href = "index.php?url=cadastro/parte2";
}

// ======== Cadastro Parte 2 ========

function salvarParte2(tipoPerfil) {
    // Pega os dados já armazenados no localStorage na chave "cadastro"
    // Se não existir nada, cria um objeto vazio {}
    const dados = JSON.parse(localStorage.getItem("cadastro")) || {};
    
    // Adiciona ou atualiza a propriedade "perfil" com o valor recebido na função
    dados.perfil = tipoPerfil;
    
    // Salva novamente os dados atualizados no localStorage
    localStorage.setItem("cadastro", JSON.stringify(dados));
    
    // Redireciona o usuário para a página da parte 3 do cadastro, passando o perfil na URL
    window.location.href = `index.php?url=cadastro/parte3/${tipoPerfil}`;
}


// Espera o carregamento completo do DOM antes de executar o código
document.addEventListener('DOMContentLoaded', () => {
    // Array com as classes que representam os tipos de perfil que temos no HTML
    ['Empresa', 'trabalhador', 'Contratante'].forEach(classe => {
        // Seleciona todos os elementos que possuem a classe atual no loop
        document.querySelectorAll(`.${classe}`).forEach(botao => {
            // Adiciona um listener para o evento de clique em cada botão
            botao.addEventListener('click', (e) => {
                // Impede o comportamento padrão do link (que é navegar para outro lugar)
                e.preventDefault();

                // Pega o nome do perfil baseado na classe, convertendo para minúsculas
                // Isso porque sua lógica espera os nomes em minúsculas
                let perfil = classe.toLowerCase();

                // Chama a função salvarParte2, passando o perfil selecionado
                salvarParte2(perfil);
            });
        });
    });
});

// ======== Cadastro Parte 3 – Finalização ========

function finalizarCadastro() {
    const dados = JSON.parse(localStorage.getItem("cadastro")) || {};

    const nomeInput = document.getElementById("nome");
    dados.nome = nomeInput ? nomeInput.value : '';
    
    const telefoneInput = document.getElementById("telefone");
    dados.telefone = telefoneInput ? telefoneInput.value : '';

    const cnpjInput = document.getElementById("cnpj");
    dados.cnpj = cnpjInput ? cnpjInput.value : '';


    if (!dados.nome ||  !dados.telefone) {
        alert("Preencha todos os campos obrigatórios.");
        return;
    }
    

    fetch("index.php?url=cadastro", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(dados)
    })
    .then(res => res.json())
    .then(resposta => {
        console.log("Resposta da API:", resposta);
        localStorage.removeItem("cadastro");
        window.location.href = "index.php?url=home";
    })
    .catch(err => {
        console.error("Erro:", err);
        alert("Erro ao finalizar o cadastro.");
    });
}
