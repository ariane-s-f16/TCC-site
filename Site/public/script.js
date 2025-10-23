console.log("script.js carregado!");

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

// Limpar erro ao digitar
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

    const dados = { email, senha, confSenha };
    localStorage.setItem("cadastro", JSON.stringify(dados));
    console.log("Dados carregados da Parte 1:", dados);

    window.location.href = "index.php?url=cadastro/parte2";
}

// ====================== Parte 2 ======================
function salvarParte2(tipoPerfil) {
    const dados = JSON.parse(localStorage.getItem("cadastro"));
    if (!dados) {
        alert("Complete a Parte 1 primeiro!");
        window.location.href = "index.php?url=cadastro/Parte1";
        return;
    }

    if (!tipoPerfil) {
        alert("Selecione um tipo de perfil antes de continuar.");
        return;
    }

    dados.perfil = tipoPerfil.toLowerCase();
    localStorage.setItem("cadastro", JSON.stringify(dados));

    const destino = `index.php?url=cadastro/Parte3/${tipoPerfil.charAt(0).toUpperCase() + tipoPerfil.slice(1)}`;
    console.log("Redirecionando para:", destino);
    window.location.href = destino;
}

// ====================== Parte 3 / Header ======================
function atualizarNomeHeader() {
    const span = document.querySelector(".perfil-name");
    if (!span) return;

    const usuarioLogado = JSON.parse(localStorage.getItem("usuarioLogado") || "{}");
    span.textContent = usuarioLogado.nome || "Usuário";

    console.log("Nome atualizado no header:", span.textContent);
}

// ====================== Login ======================
async function fazerLogin() {
    const emailInput = document.getElementById("email");
    const senhaInput = document.getElementById("senha");
    const email = emailInput.value.trim();
    const senha = senhaInput.value.trim();

    if (!email || !senha) {
        if (!email) mostrarErro(emailInput, "Digite seu e-mail");
        if (!senha) mostrarErro(senhaInput, "Digite sua senha");
        return;
    }

    try {
        const res = await fetch("index.php?url=/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ email, password: senha })
        });

        if (!res.ok) throw new Error(`Erro ${res.status}: ${res.statusText}`);
        const resposta = await res.json();

        if (resposta.access_token) {
            const nomeUsuario = resposta.user?.nome || resposta.user?.name || email;
            const usuarioLogado = { nome: nomeUsuario, email, access_token: resposta.access_token };
            localStorage.setItem("usuarioLogado", JSON.stringify(usuarioLogado));
            atualizarNomeHeader();
            window.location.href = "index.php?url=home";
        } else if (resposta.error) {
            mostrarErro(emailInput, resposta.error);
            mostrarErro(senhaInput, resposta.error);
        } else {
            mostrarErro(emailInput, "Email ou senha incorretos");
            mostrarErro(senhaInput, "Email ou senha incorretos");
        }
    } catch (err) {
        console.error("Erro no login:", err);
        alert("Erro ao tentar entrar. Verifique sua conexão ou rota do servidor.");
    }
}

// ====================== Finalizar Cadastro ======================
async function finalizarCadastro() {
    console.log("🚀 Função finalizarCadastro() chamada!");

    // Pega dados do localStorage
    const cadastro = JSON.parse(localStorage.getItem("cadastro"));
    if (!cadastro) {
        alert("Complete as etapas anteriores do cadastro.");
        window.location.href = "index.php?url=cadastro/parte1";
        return;
    }

    // Campos do formulário
    const campos = {
        nome: document.getElementById("nome").value.trim(),
        telefone: document.getElementById("telefone").value.trim(),
        cpf: document.getElementById("cpf").value.trim(),
        cep: document.getElementById("cep").value.trim(),
        rua: document.getElementById("rua").value.trim(),
        numero: document.getElementById("numero").value.trim(),
        localidade: document.getElementById("localidade").value.trim(),
        estado: document.getElementById("Estado").value.trim(),
        cidade: document.getElementById("cidade").value.trim(),
        infoadd: document.getElementById("infoadd").value.trim()
    };

    // Validação simples
    for (const key in campos) {
        if (!campos[key]) {
            alert(`O campo "${key}" é obrigatório!`);
            return;
        }
    }

    // Foto
    const fotoInput = document.getElementById("file");
    if (!fotoInput || !fotoInput.files.length) {
        alert("Selecione uma foto!");
        return;
    }
    const foto = fotoInput.files[0];
    console.log("Arquivo selecionado:", foto);

    // Monta FormData
    const formData = new FormData();
    formData.append("file", foto);
    formData.append("email", cadastro.email);
    formData.append("password", cadastro.senha);
    formData.append("type", cadastro.perfil);

    for (const key in campos) {
        formData.append(key, campos[key]);
    }

    try {
        const response = await fetch("index.php?url=/usuario/cadastro", {
            method: "POST",
            body: formData
        });

        const data = await response.json();
        console.log("✅ Resposta do servidor:", data);

        if (data.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({
                nome: campos.nome,
                email: cadastro.email,
                access_token: data.access_token
            }));
            localStorage.removeItem("cadastro");
            alert("Cadastro realizado com sucesso!");
            window.location.href = "index.php?url=home";
        } else if (data.error) {
            alert("Erro no cadastro: " + (data.details ? JSON.stringify(data.details) : data.error));
        } else {
            alert("Erro desconhecido no cadastro.");
        }
    } catch (err) {
        console.error("Erro ao enviar cadastro:", err);
        alert("Erro de comunicação com o servidor.");
    }
}

// Torna global para o botão onclick
window.finalizarCadastro = finalizarCadastro;



// ====================== Máscaras e CEP ======================
document.addEventListener('DOMContentLoaded', () => {
    atualizarNomeHeader();

    const cpfInput = document.getElementById("cpf");
    const telefoneInput = document.getElementById("telefone");
    const cepInput = document.getElementById("cep");
    const rua = document.getElementById("rua");
    const bairro = document.getElementById("localidade");
    const cidade = document.getElementById("cidade");
    const estado = document.getElementById("Estado");

    if (cpfInput) cpfInput.addEventListener("input", () => {
        let v = cpfInput.value.replace(/\D/g, "").slice(0, 11);
        v = v.replace(/(\d{3})(\d)/, "$1.$2").replace(/(\d{3})(\d)/, "$1.$2").replace(/(\d{3})(\d{1,2})$/, "$1-$2");
        cpfInput.value = v;
    });

    if (telefoneInput) telefoneInput.addEventListener("input", () => {
        let v = telefoneInput.value.replace(/\D/g, "").slice(0, 11);
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2").replace(/(\d{5})(\d{4})$/, "$1-$2");
        telefoneInput.value = v;
    });

    if (cepInput) cepInput.addEventListener("input", async () => {
        let v = cepInput.value.replace(/\D/g, "").slice(0, 8);
        cepInput.value = v.replace(/(\d{5})(\d)/, "$1-$2");
        if (v.length === 8) {
            try {
                const res = await fetch(`https://viacep.com.br/ws/${v}/json/`);
                const data = await res.json();
                if (!data.erro) {
                    rua.value = data.logradouro || '';
                    bairro.value = data.bairro || '';
                    estado.innerHTML = `<option value="${data.uf}">${data.uf}</option>`;
                    cidade.innerHTML = `<option value="${data.localidade}">${data.localidade}</option>`;
                    estado.disabled = true;
                    cidade.disabled = true;
                }
            } catch (err) {
                console.error("Erro ao buscar CEP:", err);
            }
        }
    });
});

// ====================== Função esqueci senha ======================
function esqueci_senha(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    console.log('Enviando código para:', email);
    window.location.href = 'index.php?url=esqueci_senha/verificacao?email=' + encodeURIComponent(email);
}
