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

    if (senha !== confSenha) {
        alert("As senhas não conferem.");
        return;
    }

    // Armazenamos no localStorage com nomes que o frontend entende
    const dados = { email, senha, confSenha };
    localStorage.setItem("cadastro", JSON.stringify(dados));

    window.location.href = "index.php?url=cadastro/parte2";
}

// ======== Cadastro Parte 2 ========
function salvarParte2(tipoPerfil) {
    const dados = JSON.parse(localStorage.getItem("cadastro")) || {};
    
    // Mapeamos o perfil para o que a API espera: empresa, prestador ou contratante
    let tipo = tipoPerfil.toLowerCase();
    if (tipo === "trabalhador") tipo = "prestador";

    dados.perfil = tipo; 
    localStorage.setItem("cadastro", JSON.stringify(dados));

    window.location.href = `index.php?url=cadastro/parte3/${tipo}`;
}


// ======== Cadastro Parte 3 – Finalização ========
function finalizarCadastro() {
    const cadastro = JSON.parse(localStorage.getItem("cadastro")) || {};

    const dados = {
        email: cadastro.email || '',
        password: cadastro.senha || '',
        type: cadastro.perfil || '',
        nome: document.getElementById("nome")?.value || '',
        telefone: document.getElementById("telefone")?.value || '',
        cpf: document.getElementById("cpf")?.value || '',
        cnpj: document.getElementById("cnpj")?.value || '',
        localidade: document.getElementById("localidade")?.value || '',
        uf: document.getElementById("Estado")?.value || '',
        estado: document.getElementById("Estado")?.value || '',
        cep: document.getElementById("cep")?.value || '',
        rua: document.getElementById("rua")?.value || '',
        numero: document.getElementById("numero")?.value || '',
        infoadd: document.getElementById("infoadd")?.value || '',
        pais: document.getElementById("Pais")?.value || '',
        cidade: document.getElementById("Cidade")?.value || ''
    };

    // Validação dos campos obrigatórios
    if (
        !dados.nome ||
        !dados.telefone ||
        !dados.pais ||
        !dados.estado ||
        !dados.cidade ||
        !dados.localidade ||
        !dados.cep ||
        !dados.rua ||
        !dados.numero
    ) {
        alert("Preencha todos os campos obrigatórios.");
        return;
    }

    if (dados.password.length < 6) {
        alert("A senha deve ter no mínimo 6 caracteres.");
        return;
    }

    // Para contratante e prestador, CPF é obrigatório
    if ((dados.type === "contratante" || dados.type === "prestador") && !dados.cpf) {
        alert("O CPF é obrigatório.");
        return;
    }

    // Para empresa, CNPJ é obrigatório
    if (dados.type === "empresa" && !dados.cnpj) {
        alert("O CNPJ é obrigatório para empresas.");
        return;
    }

    console.log("Dados enviados para a API:", dados);

    fetch("index.php?url=usuario/cadastro", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(dados)
    })
    .then(res => res.text())
    .then(text => {
        console.log("Resposta bruta da API:", text);
        try {
            const resposta = JSON.parse(text);
            console.log("Resposta JSON:", resposta);

            if (resposta.access_token) {
                localStorage.removeItem("cadastro");
                window.location.href = "index.php?url=home";
            } else if (resposta.error && resposta.details) {
                let msgs = [];
                for (let campo in resposta.details) {
                    msgs.push(`${campo}: ${resposta.details[campo].join(", ")}`);
                }
                alert("Erro de validação:\n" + msgs.join("\n"));
            } else {
                alert("Erro ao finalizar cadastro: " + (resposta.message || "Verifique os dados."));
            }
        } catch (e) {
            console.error("Erro ao parsear JSON da API:", e);
            alert("Erro na resposta da API. Veja o console para detalhes.");
        }
    })
    .catch(err => {
        console.error("Erro ao enviar dados:", err);
        alert("Erro ao finalizar o cadastro. Verifique o console.");
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
