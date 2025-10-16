console.log("✅ script.js carregado!");

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
}

function limparErro(input) {
    if (!input) return;
    input.classList.remove("input-error");
    const original = input.getAttribute("data-placeholder");
    if (original !== null) input.placeholder = original;
}

// ====================== Limpar erro ao digitar ======================
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', () => limparErro(input));
    });
});

// ====================== Cadastro Parte 1 ======================
async function verificarEmail(email) {
    try {
        const response = await fetch(`index.php?url=check-email&valor=${encodeURIComponent(email)}`);
        const data = await response.json();
        return data;
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

    let temErro = false;

    if (!email) { mostrarErro(emailInput, "Email obrigatório"); temErro = true; }
    if (!senha) { mostrarErro(senhaInput, "Senha obrigatória"); temErro = true; }
    if (!confSenha) { mostrarErro(confSenhaInput, "Confirme a senha"); temErro = true; }

    if (temErro) return;

    if (senha !== confSenha) {
        mostrarErro(confSenhaInput, "Senhas diferentes");
        return;
    }

    const data = await verificarEmail(email);
    if (data.exists) {
        mostrarErro(emailInput, "Este email já está sendo usado");
        return;
    }

    const dados = { email, senha, confSenha };
    localStorage.setItem("cadastro", JSON.stringify(dados));
    window.location.href = "index.php?url=cadastro/parte2";
}

// ====================== Cadastro Parte 2 ======================
function salvarParte2(tipoPerfil) {
    const dados = JSON.parse(localStorage.getItem("cadastro")) || {};
    let tipo = tipoPerfil.toLowerCase();
    if (tipo === "trabalhador") tipo = "prestador";
    dados.perfil = tipo;
    localStorage.setItem("cadastro", JSON.stringify(dados));
    window.location.href = `index.php?url=cadastro/parte3/${tipo}`;
}

// ====================== Cadastro Parte 3 ======================
async function finalizarCadastro() {
    const cadastro = JSON.parse(localStorage.getItem("cadastro")) || {};
    const fotoInput = document.getElementById("foto");
    const arquivoFoto = fotoInput?.files?.[0] || null;

    const formData = new FormData();
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
        cep: document.getElementById("cep")?.value || '',
        rua: document.getElementById("rua")?.value || '',
        numero: document.getElementById("numero")?.value || '',
        infoadd: document.getElementById("infoadd")?.value || '',
        pais: document.getElementById("Pais")?.value || '',
        cidade: document.getElementById("Cidade")?.value || '',
    };

    // Validação obrigatória
    for (const key of ['nome','telefone','localidade','uf','rua','numero']) {
        if (!dados[key]) {
            const input = document.getElementById(key);
            mostrarErro(input, "Campo obrigatório");
            return;
        }
    }

    if (!arquivoFoto) {
        alert("Selecione uma foto antes de continuar.");
        return;
    }

    for (const chave in dados) formData.append(chave, dados[chave]);
    formData.append("foto", arquivoFoto);

    try {
        const response = await fetch("index.php?url=usuario/cadastro", {
            method: "POST",
            body: formData,
        });

        const texto = await response.text();
        const resposta = JSON.parse(texto);

        if (resposta.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({ 
                nome: dados.nome, 
                email: dados.email, 
                access_token: resposta.access_token 
            }));
            localStorage.removeItem("cadastro");
            window.location.href = "index.php?url=home";
        } else {
            alert("Erro ao finalizar cadastro.");
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

    if (!email) mostrarErro(emailInput, "Digite seu e-mail");
    if (!senha) mostrarErro(senhaInput, "Digite sua senha");
    if (!email || !senha) return;

    const dados = { email, password: senha };

    try {
        const res = await fetch("index.php?url=/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(dados)
        });

        const resposta = await res.json();

        if (resposta.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({ 
                nome: resposta.nome || 'Usuário', 
                email, 
                access_token: resposta.access_token 
            }));
            atualizarNomeHeader(resposta.nome || 'Usuário');
            window.location.href = "index.php?url=home";
        } else {
            mostrarErro(emailInput, "Email ou senha incorretos");
            mostrarErro(senhaInput, "Email ou senha incorretos");
        }
    } catch (err) {
        console.error("Erro no login:", err);
        alert("Erro ao tentar entrar.");
    }
}

// ====================== Atualizar Nome do Header ======================
async function atualizarNomeHeader(nomeUsuario = null) {
    const perfilNameSpan = document.querySelector(".perfil-name");
    const usuarioLogado = JSON.parse(localStorage.getItem("usuarioLogado")) || {};

    if (!perfilNameSpan) return;

    if (nomeUsuario && nomeUsuario !== "Usuário") {
        perfilNameSpan.textContent = nomeUsuario;
    } else if (usuarioLogado.nome && usuarioLogado.nome !== "Usuário") {
        perfilNameSpan.textContent = usuarioLogado.nome;
    } else if (usuarioLogado.access_token) {
        try {
            const res = await fetch("index.php?url=usuario/info", {
                headers: { "Authorization": "Bearer " + usuarioLogado.access_token }
            });
            if (!res.ok) throw new Error("Erro ao buscar usuário");
            const data = await res.json();
            if (data.nome && data.nome !== "Usuário") {
                perfilNameSpan.textContent = data.nome;
                localStorage.setItem("usuarioLogado", JSON.stringify({ ...usuarioLogado, nome: data.nome }));
            }
        } catch (err) {
            console.error("Erro ao buscar nome do usuário:", err);
            perfilNameSpan.textContent = "Usuário";
        }
    } else {
        perfilNameSpan.textContent = "Usuário";
    }

    console.log("Nome atualizado no header:", perfilNameSpan.textContent);
}

// ====================== Máscaras e CEP ======================
document.addEventListener('DOMContentLoaded', () => {
    atualizarNomeHeader();

    const cepInput = document.getElementById("cep");
    const telefoneInput = document.getElementById("telefone");
    const cpfInput = document.getElementById("cpf");
    const rua = document.getElementById("rua");
    const localidade = document.getElementById("localidade");
    const cidade = document.getElementById("Cidade");
    const estado = document.getElementById("Estado");

    // ---------- Máscara CPF ----------
    if (cpfInput) {
        cpfInput.addEventListener("input", () => {
            let v = cpfInput.value.replace(/\D/g, "");
            if (v.length > 11) v = v.slice(0, 11);
            v = v.replace(/(\d{3})(\d)/, "$1.$2");
            v = v.replace(/(\d{3})(\d)/, "$1.$2");
            v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            cpfInput.value = v;
        });
    }

    // ---------- Máscara Telefone ----------
    if (telefoneInput) {
        telefoneInput.addEventListener("input", () => {
            let v = telefoneInput.value.replace(/\D/g, "");
            if (v.length > 11) v = v.slice(0, 11);
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
            v = v.replace(/(\d{5})(\d{4})$/, "$1-$2");
            telefoneInput.value = v;
        });
    }

    // ---------- CEP + Busca Automática ----------
    if (cepInput) {
        cepInput.addEventListener("input", async () => {
            let v = cepInput.value.replace(/\D/g, "");
            if (v.length > 8) v = v.slice(0, 8);
            cepInput.value = v.replace(/(\d{5})(\d)/, "$1-$2");

            if (v.length === 8) {
                try {
                    const res = await fetch(`https://viacep.com.br/ws/${v}/json/`);
                    const data = await res.json();
                    if (!data.erro) {
                        rua.value = data.logradouro || '';
                        localidade.value = data.bairro || '';
                        cidade.value = data.localidade || '';
                        estado.value = data.uf || '';
                    }
                } catch (err) {
                    console.error("Erro ao buscar CEP:", err);
                }
            }
        });
    }
});
