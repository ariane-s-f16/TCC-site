console.log("script.js carregado!");

// ======== Mostrar/ocultar senha ========
function mostrarsenha() {
    const senha = document.querySelector('#senha');
    if (senha) senha.type = senha.type === 'password' ? 'text' : 'password';
}

function mostrarsenhaconf() {
    const csenha = document.querySelector('#confisenha');
    if (csenha) csenha.type = csenha.type === 'password' ? 'text' : 'password';
}

// ======== Cadastro Parte 1 ========
function salvarParte1() {
    const email = document.getElementById("email")?.value || '';
    const senha = document.getElementById("senha")?.value || '';
    const confSenha = document.getElementById("confisenha")?.value || '';

    if (!email || !senha || !confSenha) {
        alert("Preencha todos os campos obrigatórios.");
        return;
    }

    const dados = { email, senha, confSenha };
    localStorage.setItem("cadastro", JSON.stringify(dados));
    window.location.href = "index.php?url=cadastro/parte2";
}

// ======== Cadastro Parte 2 ========
function salvarParte2(tipoPerfil) {
    const dados = JSON.parse(localStorage.getItem("cadastro")) || {};
    dados.perfil = tipoPerfil.toLowerCase(); // empresa, contratante ou trabalhador
    localStorage.setItem("cadastro", JSON.stringify(dados));
    window.location.href = `index.php?url=cadastro/parte3/${tipoPerfil.toLowerCase()}`;
}

// ======== Cadastro Parte 3 – Finalização ========
function finalizarCadastro() {
    const cadastro = JSON.parse(localStorage.getItem("cadastro")) || {};

    const dados = {
        email: cadastro.email || '',
        senha: cadastro.senha || '',
        confSenha: cadastro.confSenha || '',
        perfil: cadastro.perfil || '',
        nome: document.getElementById("nome")?.value || '',
        telefone: document.getElementById("telefone")?.value || '',
        cnpj: document.getElementById("cnpj")?.value || '',
        pais: document.getElementById("Pais")?.value || '',
        estado: document.getElementById("Estado")?.value || '',
        cidade: document.getElementById("Cidade")?.value || ''
    };

    if (!dados.nome || !dados.telefone || !dados.pais || !dados.estado || !dados.cidade) {
        alert("Preencha todos os campos obrigatórios.");
        return;
    }

    console.log("Dados enviados:", dados);

    fetch("index.php?url=/usuario/cadastro", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(dados)
    })
    .then(res => res.json())
    .then(resposta => {
        console.log("Resposta da API:", resposta);

        // Só vai para home se a API retornar sucesso
        if (resposta.access_token) {
            localStorage.removeItem("cadastro");
            window.location.href = "index.php?url=home";
        } else {
            alert("Erro ao finalizar o cadastro: " + (resposta.message || "Verifique os dados."));
        }
    })
    .catch(err => {
        console.error("Erro ao enviar dados:", err);
        alert("Erro ao finalizar o cadastro.");
    });
}


// ======== Login ========
function fazerLogin() {
    const email = document.getElementById("email")?.value || '';
    const senha = document.getElementById("senha")?.value || '';

    if (!email || !senha) {
        alert("Preencha email e senha.");
        return;
    }

    const dados = { email, password: senha };

    fetch("index.php?url=/login", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(dados)
    })
    .then(res => res.json())
    .then(resposta => {
        console.log("Resposta da API:", resposta);

        if (resposta.access_token) {
            window.location.href = "index.php?url=home";
        } else {
            alert("Email ou senha incorretos.");
        }
    })
    .catch(err => {
        console.error("Erro no login:", err);
        alert("Erro ao tentar entrar.");
    });
}

// ======== Eventos para selecionar perfil na Parte 2 ========
document.addEventListener('DOMContentLoaded', () => {
    ['Empresa', 'trabalhador', 'Contratante'].forEach(classe => {
        document.querySelectorAll(`.${classe}`).forEach(botao => {
            botao.addEventListener('click', (e) => {
                e.preventDefault();
                salvarParte2(classe);
            });
        });
    });
});
