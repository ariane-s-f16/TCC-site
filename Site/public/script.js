console.log("script.js carregado!");
//============================Favoritos========================================

//===================================================================

// ====================== Mostrar/Ocultar Senha ======================
function mostrarsenha() {
    const senha = document.querySelector('#senha');
    if (senha) senha.type = senha.type === 'password' ? 'text' : 'password';
}

function mostrarsenhaconf() {
    const csenha = document.querySelector('#confisenha');
    if (csenha) csenha.type = csenha.type === 'password' ? 'text' : 'password';
}

// ====================== Funções de Erro Visual ======================
function mostrarErro(input, mensagem) {
    if (!input) return;
    input.value = "";
    input.placeholder = mensagem;
    input.classList.add("input-error");
    input.style.borderColor = "red";
    input.style.color = "red";
}

function limparErro(input) {
    if (!input) return;
    input.classList.remove("input-error");
    input.style.borderColor = "";
    input.style.color = "";
    const original = input.getAttribute("data-placeholder");
    if (original !== null) input.placeholder = original;
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', () => limparErro(input));
    });
});

// ====================== Parte 1 ======================
async function verificarEmail(email) {
    try {
        const response = await fetch(`index.php?url=check-email&valor=${encodeURIComponent(email)}`);
        return await response.json();
    } catch (err) {
        console.error("Erro ao verificar e-mail:", err);
        return { exists: false };
    }
}


    async function salvarParte1() {
        const emailInput = document.getElementById("email");
        const senhaInput = document.getElementById("senha");
        const confSenhaInput = document.getElementById("confisenha");
    
        const email = emailInput.value.trim();
        const senha = senhaInput.value.trim();
        const confSenha = confSenhaInput.value.trim();
    
        if (!email || !senha || !confSenha) {
            if (!email) mostrarErro(emailInput, "Email obrigatório");
            if (!senha) mostrarErro(senhaInput, "Senha obrigatória");
            if (!confSenha) mostrarErro(confSenhaInput, "Confirme a senha");
            return;
        }
    
        if (senha !== confSenha) {
            mostrarErro(confSenhaInput, "Senhas diferentes");
            return;
        }
    
        const data = await verificarEmail(email);
        if (data.exists) {
            mostrarErro(emailInput, "Este email já está sendo usado");
            return;
        }
    
        // Salvar no localStorage
        const dados = JSON.parse(localStorage.getItem("cadastro") || "{}");
        dados.email = email;
        dados.senha = senha;
        dados.confSenha = confSenha;
        localStorage.setItem("cadastro", JSON.stringify(dados));
    
        window.location.href = "index.php?url=cadastro/parte2";
    }
    


// ====================== Parte 2 ======================
function salvarParte2(tipoPerfil) {
    const dados = JSON.parse(localStorage.getItem("cadastro") || "{}");
    if (!dados.email) {
        alert("Complete a Parte 1 primeiro!");
        window.location.href = "index.php?url=cadastro/parte1";
        return;
    }

    if (!tipoPerfil) {
        alert("Selecione um tipo de perfil antes de continuar.");
        return;
    }

    dados.perfil = tipoPerfil.toLowerCase();
    localStorage.setItem("cadastro", JSON.stringify(dados));

    const destino = `index.php?url=cadastro/parte3/${tipoPerfil.charAt(0).toUpperCase() + tipoPerfil.slice(1)}`;
    window.location.href = destino;
}

// ====================== Atualizar Header ======================
function atualizarNomeHeader() {
    const span = document.querySelector(".perfil-name");
    if (!span) return;

    const usuarioLogado = JSON.parse(localStorage.getItem("usuarioLogado") || "{}");
    let nomeUsuario = "Usuário";

    if (usuarioLogado.user && usuarioLogado.user.nome) {
        nomeUsuario = usuarioLogado.user.nome;
    } else if (usuarioLogado.nome) {
        nomeUsuario = usuarioLogado.nome;
    }

    span.textContent = nomeUsuario;
    console.log("Nome atualizado no header:", span.textContent);
}

// ====================== Finalizar Cadastro ======================
async function finalizarCadastro() {
    const cadastro = JSON.parse(localStorage.getItem("cadastro") || "{}");

    // Verifica se as partes 1 e 2 foram preenchidas
    if (!cadastro.email || !cadastro.senha || !cadastro.perfil) {
        alert("Complete as etapas anteriores do cadastro.");
        window.location.href = "index.php?url=cadastro/parte1";
        return;
    }

    // Campos do formulário Parte 3
    const campos = {
        
        nome: document.getElementById("nome")?.value.trim() || '',
        telefone: document.getElementById("telefone")?.value.trim() || '',
        cpf: document.getElementById("cpf")?.value.trim() || '',
        cep: document.getElementById("cep")?.value.trim() || '',
        rua: document.getElementById("rua")?.value.trim() || '',
        numero: document.getElementById("numero")?.value.trim() || '',
        localidade: document.getElementById("localidade")?.value.trim() || '',
        uf: document.getElementById("Estado")?.value.trim() || '',             // envia sigla para o banco
        estado: document.getElementById("Estado")?.options[0].text || '',     // envia nome completo
        cidade: document.getElementById("cidade")?.value.trim() || '',
        infoadd: document.getElementById("infoadd")?.value.trim() || ''
    };

    // Verifica se todos os campos obrigatórios foram preenchidos
    for (const key in campos) {
        if (!campos[key]) {
            alert(`O campo "${key}" é obrigatório!`);
            return;
        }
    }

    const fotoInput = document.getElementById("file");
    if (!fotoInput || !fotoInput.files.length) {
        alert("Selecione uma foto!");
        return;
    }
    const foto = fotoInput.files[0];

    // ✅ Junta todas as partes antes de enviar
    const dadosCompletos = {
        ...cadastro, // Parte 1 + Parte 2
        ...campos // Parte 3
    };

    const formData = new FormData();
    formData.append("foto", foto);
    formData.append("email", dadosCompletos.email);
    formData.append("password", dadosCompletos.senha);
    formData.append("type", dadosCompletos.perfil);

    for (const key in campos) {
        formData.append(key, campos[key]);
    }

    try {
        const response = await fetch("index.php?url=/usuario/cadastro", { method: "POST", body: formData });
        const data = await response.json();

        if (data.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({
                nome: campos.nome,
                email: dadosCompletos.email,
                access_token: data.access_token
            }));
            atualizarNomeHeader();
            localStorage.removeItem("cadastro");
            alert("Cadastro realizado com sucesso!");
            window.location.href = "index.php?url=home";
        } else {
            alert("Erro no cadastro: " + JSON.stringify(data));
        }
    } catch (err) {
        console.error("Erro ao enviar cadastro:", err);
        alert("Erro de comunicação com o servidor.");
    }
}

// ====================== Login ======================
async function fazerLogin() {
    const emailInput = document.getElementById("email");
    const senhaInput = document.getElementById("senha");
    const email = emailInput.value.trim();
    const senha = senhaInput.value.trim();

    if (!email || !senha) {
        if (!email) alert("Digite seu e-mail");
        if (!senha) alert("Digite sua senha");
        return;
    }

    try {
        const res = await fetch("index.php?url=/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ email, password: senha })
        });
        const resposta = await res.json();

        if (resposta.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({
                nome: resposta.user?.nome || null,
                email,
                access_token: resposta.access_token,
                user: resposta.user || null
            }));
            atualizarNomeHeader();
            window.location.href = "index.php?url=home";
        } else if (resposta.error) {
            alert(resposta.error);
        } else {
            alert("Email ou senha incorretos");
        }
    } catch (err) {
        console.error("Erro no login:", err);
        alert("Erro ao tentar entrar. Verifique sua conexão ou rota do servidor.");
    }
}

// ====================== Máscaras e CEP ======================
document.addEventListener('DOMContentLoaded', () => {
    atualizarNomeHeader();

    // Inputs
    const cpfInput = document.getElementById("cpf");
    const telefoneInput = document.getElementById("telefone");
    const cepInput = document.getElementById("cep");
    const rua = document.getElementById("rua");
    const bairro = document.getElementById("localidade");
    const cidade = document.getElementById("cidade");
    const estado = document.getElementById("Estado");

    // Máscara CPF
    if (cpfInput) {
        cpfInput.addEventListener("input", () => {
            let v = cpfInput.value.replace(/\D/g, "").slice(0, 11);
            v = v.replace(/(\d{3})(\d)/, "$1.$2")
                 .replace(/(\d{3})(\d)/, "$1.$2")
                 .replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            cpfInput.value = v;
        });
    }

    // Máscara Telefone
    if (telefoneInput) {
        telefoneInput.addEventListener("input", () => {
            let v = telefoneInput.value.replace(/\D/g, "").slice(0, 11);
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2")
                 .replace(/(\d{5})(\d{4})$/, "$1-$2");
            telefoneInput.value = v;
        });
    }

    // CEP automático
   // Mapeamento UF -> nome completo
const estadosPorSigla = {
    "AC": "Acre", "AL": "Alagoas", "AP": "Amapá", "AM": "Amazonas",
    "BA": "Bahia", "CE": "Ceará", "DF": "Distrito Federal", "ES": "Espírito Santo",
    "GO": "Goiás", "MA": "Maranhão", "MT": "Mato Grosso", "MS": "Mato Grosso do Sul",
    "MG": "Minas Gerais", "PA": "Pará", "PB": "Paraíba", "PR": "Paraná",
    "PE": "Pernambuco", "PI": "Piauí", "RJ": "Rio de Janeiro", "RN": "Rio Grande do Norte",
    "RS": "Rio Grande do Sul", "RO": "Rondônia", "RR": "Roraima", "SC": "Santa Catarina",
    "SP": "São Paulo", "SE": "Sergipe", "TO": "Tocantins"
};

if (cepInput) {
    cepInput.addEventListener("input", async () => {
        let v = cepInput.value.replace(/\D/g, "").slice(0, 8);
        cepInput.value = v.replace(/(\d{5})(\d)/, "$1-$2");

        if (v.length === 8) {
            try {
                const res = await fetch(`https://viacep.com.br/ws/${v}/json/`);
                const data = await res.json();
                if (!data.erro) {
                    rua.value = data.logradouro || '';
                    bairro.value = data.bairro || '';

                    // Preenche select de Estado
                    estado.innerHTML = '';
                    const optionEstado = document.createElement('option');
                    optionEstado.value = data.uf;                  // Sigla correta para o banco
                    optionEstado.text = estadosPorSigla[data.uf]; // Nome por extenso para exibir
                    optionEstado.selected = true;
                    estado.appendChild(optionEstado);
                    estado.disabled = true;

                    // Preenche select de Cidade
                    cidade.innerHTML = '';
                    const optionCidade = document.createElement('option');
                    optionCidade.value = data.localidade;
                    optionCidade.text = data.localidade;
                    optionCidade.selected = true;
                    cidade.appendChild(optionCidade);
                    cidade.disabled = true;
                }
            } catch (err) {
                console.error("Erro ao buscar CEP:", err);
            }
        }
    });
}

});

// ====================== Função esqueci senha ======================
async function esqueci_senha(event) {
    event.preventDefault();
    const email = document.getElementById('email').value.trim();
    if (!email) {
        alert("Digite seu e-mail");
        return;
    }

    try {
        const apiUrl = `index.php?url=forgot-password`;
        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email })
        });

        if (!response.ok) throw new Error(`Erro HTTP ${response.status}`);

        const data = await response.json();

        if (data.success) {
            window.location.href = `index.php?url=esqueci_senha/verificacao&email=${encodeURIComponent(email)}`;
        } else {
            alert("Erro: " + (data.message || "Não foi possível enviar o código"));
        }
    } catch (err) {
        console.error("Erro ao enviar código:", err);
        alert("Erro de comunicação com o servidor: " + err.message);
    }
}



// ====================== Cards Automáticos ======================
let usuariosCache = [];
let usuariosFiltrados = [];

// --------------------- Ativar botões "Ver Perfil" ---------------------
function ativarBotoesVerPerfil() {
    document.querySelectorAll(".ver-perfil").forEach(btn => {
        btn.addEventListener("click", () => {
            const card = btn.closest(".card");
            if (!card) return;

            const nome = card.querySelector(".nome-card")?.textContent || "Usuário";
            const cidadeEstado = card.querySelector(".localizacao span")?.textContent || "Local não informado";
            const [cidade, estado] = cidadeEstado.split(",").map(s => s.trim());
            const email = card.querySelector(".email span")?.textContent || "Não informado";
            const telefone = card.querySelector(".telefone span")?.textContent || "Não informado";
            const foto = card.querySelector(".foto-perfil img")?.src || "public/img/fundo.png";

            const dados = new URLSearchParams({ nome, cidade, estado, email, telefone, foto });
            window.location.href = "index.php?url=perfil_acessar&" + dados.toString();
        });
    });
}

// --------------------- Renderizar cards ---------------------
function renderizarCards(lista) {
    const container = document.getElementById('cards-container');
    if (!container) return;

    container.innerHTML = ''; // Limpa cards anteriores

    lista.forEach(item => {
        const nome = item.contratante?.nome || 'Usuário';
        const area = item.contratante?.profissao || 'Profissão não informada';
        const cidade = item.contratante?.localidade || 'Local não informado';
        const estado = item.contratante?.uf || '';
        const telefone = item.contato?.telefone || 'Não informado';
        const email = item.email || 'Não informado';
        const avaliacao = item.avaliacao || 0;
        const quantAvaliacoes = item.quant_avaliacoes || 0;

        // Aqui usamos o link direto do JSON ou fallback
        const foto = item.contratante?.foto?.trim() 
            ? item.contratante.foto
            : 'public/img/fundo.png';

        const card = document.createElement('div');
        card.classList.add('card');
        card.innerHTML = `
            <div class="top-content-card">
                <div class="foto-perfil">
                    <img src="${foto}" alt="${nome}" onerror="this.onerror=null; this.src='public/img/fundo.png';">
                </div>
                <div class="nome-area">
                    <h3 class="nome-card">${nome}</h3>
                    <p class="area-card">${area}</p>
                </div>
                <button class="remover-favorito">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </button>
            </div>

            <p class="empresa-ou-profissional">${item.type === 'prestador' ? 'Profissional' : 'Empresa'}</p>

            <div class="avaliacao-content">
                <div class="flex items-center gap-1">${renderStars(avaliacao)}</div>
                <span class="quant-avaliacoes">(${quantAvaliacoes} avaliações)</span>
            </div>

            <div class="localizacao">
                <svg ...>...</svg>
                <span>${cidade}, ${estado}</span>
            </div>

            <div class="telefone">
                <svg ...>...</svg>
                <span>${telefone}</span>
            </div>

            <div class="email">
                <svg ...>...</svg>
                <span>${email}</span>
            </div>

            <button class="ver-perfil">Ver Perfil</button>
        `;

        container.appendChild(card);
    });

    ativarBotoesVerPerfil();
    atualizarContadores();
}

// --------------------- Renderizar estrelas ---------------------
function renderStars(avaliacao) {
    let full = Math.floor(avaliacao);
    let half = avaliacao % 1 >= 0.5 ? 1 : 0;
    let empty = 5 - full - half;
    let stars = '';

    for (let i = 0; i < full; i++) stars += `<svg ... class="fill-yellow-400 w-4 h-4">...</svg>`;
    if (half) stars += `<svg ... class="fill-yellow-400 w-4 h-4">...</svg>`;
    for (let i = 0; i < empty; i++) stars += `<svg ... class="text-gray-300 w-4 h-4">...</svg>`;

    return stars;
}

// --------------------- Filtros ---------------------
function aplicarFiltros(tipo = "Todos") {
    usuariosFiltrados = tipo === "Todos" 
        ? [...usuariosCache] 
        : usuariosCache.filter(u => tipo === "Profissionais" ? u.type === "prestador" : u.type === "empresa");
    aplicarOrdenacao();
}

// --------------------- Ordenação ---------------------
function aplicarOrdenacao() {
    const ordem = document.getElementById("ord-select")?.value || "recente";
    usuariosFiltrados.sort((a,b) => {
        switch (ordem) {
            case "nome": return (a.contratante?.nome || "").localeCompare(b.contratante?.nome || "");
            case "antigo": return a.id - b.id;
            case "avaliacao": return (b.avaliacao || 0) - (a.avaliacao || 0);
            default: return b.id - a.id;
        }
    });
    renderizarCards(usuariosFiltrados);
}

// --------------------- Contadores ---------------------
function atualizarContadores() {
    document.getElementById("todos").textContent = usuariosCache.length;
    document.getElementById("Profissionais").textContent = usuariosCache.filter(u => u.type === "prestador").length;
    document.getElementById("empresas").textContent = usuariosCache.filter(u => u.type === "empresa").length;
}

// --------------------- Carregar usuários da API ---------------------
function carregarUsuarios() {
    const container = document.getElementById('cards-container');
    if (!container) return container.innerHTML = '<p>Container não encontrado!</p>';

    container.innerHTML = '<p>Carregando usuários...</p>';

    fetch('index.php?url=usuario&nocache=' + Date.now())
        .then(res => res.ok ? res.json() : Promise.reject(res.status))
        .then(usuarios => {
            if (!Array.isArray(usuarios)) throw new Error("Retorno inválido da API");
            usuariosCache = usuarios;
            aplicarFiltros("Todos");
        })
        .catch(err => container.innerHTML = `<p>Erro ao carregar usuários: ${err}</p>`);
}

window.addEventListener('load', carregarUsuarios);

// --------------------- Funções já existentes ---------------------
window.finalizarCadastro = finalizarCadastro;
window.fazerLogin = fazerLogin;
window.atualizarNomeHeader = atualizarNomeHeader;
window.esqueci_senha = esqueci_senha;
document.addEventListener('DOMContentLoaded', atualizarNomeHeader);

