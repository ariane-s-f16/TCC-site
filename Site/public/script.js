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
async function verificarEmail(email) {
    try {
        const response = await fetch(`index.php?url=check-email&valor=${encodeURIComponent(email)}`);
        const data = await response.json();
        return data;
    } catch (err) {
        console.error("Erro ao verificar e-mail:", err);
        return { success: false, errors: { valor: ["Erro ao verificar e-mail."] } };
    }
}

// ==================== Cadastro Parte 1 ====================
async function salvarParte1() {
    const email = document.getElementById("email")?.value.trim();
    const senha = document.getElementById("senha")?.value.trim();
    const confSenha = document.getElementById("confisenha")?.value.trim();

    if (!email || !senha || !confSenha) {
        alert("Preencha todos os campos obrigatórios.");
        return;
    }

    if (senha !== confSenha) {
        alert("As senhas não conferem.");
        return;
    }

    // === Verifica se e-mail já está cadastrado ===
    const data = await verificarEmail(email);
    if (!data.success) {
        const msg = data.errors?.valor?.[0] || "Este e-mail já está cadastrado.";
        alert(msg);
        return; // Impede o avanço
    }

    // === Se passou na verificação ===
    const dados = { email, senha, confSenha };
    localStorage.setItem("cadastro", JSON.stringify(dados));
    console.log("Parte 1 salva no localStorage:", dados);

    // Redireciona para a parte 2
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
async function finalizarCadastro() {
    const cadastro = JSON.parse(localStorage.getItem("cadastro")) || {};

    const fotoInput = document.getElementById("foto");
    const arquivoFoto = fotoInput?.files?.[0] || null;

    // Montagem dos dados
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
        cidade: document.getElementById("Cidade")?.value || '',
        id_ramo: document.getElementById("id_ramo")?.value || ''
    };

    // Validações básicas
    if (!dados.nome || !dados.telefone || !dados.localidade || !dados.estado || !dados.rua || !dados.numero) {
        alert("Preencha todos os campos obrigatórios.");
        return;
    }

    if (!arquivoFoto) {
        alert("Selecione uma foto antes de continuar.");
        return;
    }

    // Cria FormData para suportar arquivo
    const formData = new FormData();
    for (const chave in dados) {
        formData.append(chave, dados[chave]);
    }
    formData.append("foto", arquivoFoto);

    console.log(" Dados sendo enviados:", Object.fromEntries(formData));

    try {
        const response = await fetch("index.php?url=usuario/cadastro", {
            method: "POST",
            body: formData, //  NÃO usar Content-Type aqui
        });

        const texto = await response.text();
        console.log(" Resposta bruta:", texto);

        const resposta = JSON.parse(texto);
        console.log(" Resposta JSON:", resposta);

        if (resposta.access_token) {
            alert("Cadastro concluído com sucesso!");
            localStorage.removeItem("cadastro");
            window.location.href = "index.php?url=home";
        } else if (resposta.error) {
            alert("Erro: " + (resposta.details ? JSON.stringify(resposta.details) : resposta.error));
        } else {
            alert("Erro ao finalizar cadastro. Verifique o console.");
        }
    } catch (err) {
        console.error(" Erro ao enviar cadastro:", err);
        alert("Erro de comunicação com o servidor.");
    }
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
