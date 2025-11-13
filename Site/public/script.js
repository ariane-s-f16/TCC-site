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
        const apiUrl = `http://127.0.0.1:8000/api/forgot-password?email=${encodeURIComponent(email)}`;
        const response = await fetch(apiUrl);
        if (!response.ok) throw new Error(`Erro HTTP ${response.status}`);

        const text = await response.text();
        if (!text || text.trim() === '') {
            console.error("Resposta vazia do servidor");
            alert("Servidor retornou resposta vazia. Verifique o backend.");
            return;
        }

        let data;
        try {
            data = JSON.parse(text);
        } catch (parseError) {
            console.error("Erro ao fazer parse do JSON:", parseError);
            alert("Resposta do servidor não é um JSON válido.");
            return;
        }

        if (data.message === 'Código enviado para o e-mail.' || data.success) {
            window.location.href = `index.php?url=esqueci_senha/verificacao&email=${encodeURIComponent(email)}`;
        } else {
            alert("Erro: " + (data.message || data.error || "Não foi possível enviar o código"));
        }
    } catch (err) {
        console.error("Erro ao enviar código:", err);
        alert("Erro de comunicação com o servidor: " + err.message);
    }
}

// ====================== Cards Automáticos ======================
[// Carregar cards de usuários/favoritos
function carregarUsuarios() {
    const container = document.getElementById('cards-container');
    if (!container) return;

    container.innerHTML = '<p>Carregando usuários...</p>';

    fetch('index.php?url=usuarios')
        .then(res => res.json())
        .then(data => {
            const usuarios = Array.isArray(data) ? data : data.usuarios || data.data || [];

            if (!usuarios.length) {
                container.innerHTML = '<p>Nenhum usuário encontrado.</p>';
                return;
            }

            container.innerHTML = ''; // Limpa container

            usuarios.forEach(item => {
                let nome = 'Usuário';
                let cidade = 'Local não informado';
                let estado = '';
                let email = 'Não informado';
                let telefone = 'Não informado';
                let foto = '/public/img/default.png';

                if (item.user) {
                    email = item.user.email || email;

                    if (item.user.tipo === 'prestador' && item.prestador) {
                        nome = item.prestador.nome || nome;
                        cidade = item.prestador.cidade || cidade;
                        estado = item.prestador.estado || estado;
                        telefone = item.prestador.telefone || telefone;
                        foto = item.prestador.foto || foto;
                    } else if (item.user.tipo === 'empresa' && item.empresa) {
                        nome = item.empresa.razao_social || nome;
                        cidade = item.empresa.localidade || cidade;
                        estado = item.empresa.uf || estado;
                        telefone = item.empresa.telefone || telefone;
                        foto = item.empresa.foto || foto;
                    }
                } else {
                    nome = item.nome || nome;
                    cidade = item.cidade || cidade;
                    estado = item.estado || estado;
                    telefone = item.telefone || telefone;
                    email = item.email || email;
                    foto = item.foto || foto;
                }

                const card = document.createElement('div');
                card.classList.add('card');
                card.innerHTML = `
                    <img src="${foto}" alt="${nome}">
                    <div class="info">
                        <h3>${nome}</h3>
                        <p>${cidade} - ${estado}</p>
                        <p>Email: ${email}</p>
                        <p>Telefone: ${telefone}</p>
                    </div>
                `;
                container.appendChild(card);
            });
        })
        .catch(err => {
            console.error('Erro ao carregar usuários:', err);
            container.innerHTML = '<p>Erro ao carregar usuários.</p>';
        });
}

// Evita sobrescrever window.onload
window.addEventListener('load', carregarUsuarios);

// Torna outras funções globais
window.finalizarCadastro = finalizarCadastro;
window.fazerLogin = fazerLogin;
window.atualizarNomeHeader = atualizarNomeHeader;
window.esqueci_senha = esqueci_senha;
document.addEventListener('DOMContentLoaded', atualizarNomeHeader);
]

// Torna a função global
window.onload = carregarUsuarios;



// ====================== Torna funções globais ======================

window.finalizarCadastro = finalizarCadastro;
window.fazerLogin = fazerLogin;
window.atualizarNomeHeader = atualizarNomeHeader;
window.esqueci_senha = esqueci_senha;
document.addEventListener('DOMContentLoaded', atualizarNomeHeader);
