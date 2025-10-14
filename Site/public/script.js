console.log("script.js carregado!");

// ====================== Mostrar/Ocultar Senha ======================
/**
 * Alterna a exibição da senha no input de senha principal.
 */
function mostrarsenha() {
    const senha = document.querySelector('#senha');
    if (senha) senha.type = senha.type === 'password' ? 'text' : 'password';
}

/**
 * Alterna a exibição da senha no input de confirmação de senha.
 */
function mostrarsenhaconf() {
    const csenha = document.querySelector('#confisenha');
    if (csenha) csenha.type = csenha.type === 'password' ? 'text' : 'password';
}

// ====================== Funções de Erro Visual ======================
/**
 * Exibe erro em email ou senha com placeholder vermelho.
 * Confirmação de senha apenas mostra mensagem, sem placeholder vermelho.
 * @param {HTMLElement} input - Input que receberá a mensagem de erro
 * @param {string} mensagem - Mensagem de erro a exibir
 */
function mostrarErro(input, mensagem) {
    if (!input) return;

    // Email e senha principal recebem estilo de erro
    if (input.id === 'email' || input.id === 'senha') {
        if (!input.dataset.originalPlaceholder) {
            input.dataset.originalPlaceholder = input.placeholder || '';
        }
        input.value = '';
        input.placeholder = mensagem;
        input.classList.add('input-error');
    } else {
        // Confirme senha ou outros inputs apenas alteram placeholder
        input.value = '';
        input.placeholder = mensagem;
    }

    // Remove erro automaticamente ao digitar
    const limparOnInput = () => {
        limparErro(input);
        input.removeEventListener('input', limparOnInput);
    };
    input.addEventListener('input', limparOnInput);
}

/**
 * Remove erro visual de email ou senha e restaura placeholder original.
 * @param {HTMLElement} input - Input que terá erro removido
 */
function limparErro(input) {
    if (!input) return;
    if (input.id === 'email' || input.id === 'senha') {
        input.classList.remove('input-error');
        if (input.dataset.originalPlaceholder) {
            input.placeholder = input.dataset.originalPlaceholder;
        }
    }
}

// ====================== Cadastro Parte 1 ======================
/**
 * Verifica se o e-mail já está cadastrado via API.
 * @param {string} email - O e-mail a ser verificado
 * @returns {Promise<Object>} - Retorna um objeto com a propriedade "exists"
 */
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

/**
 * Salva os dados da primeira parte do cadastro e valida entradas.
 */
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
        mostrarErro(emailInput, "Email já cadastrado");
        return;
    }

    const dados = { email, senha, confSenha };
    localStorage.setItem("cadastro", JSON.stringify(dados));
    window.location.href = "index.php?url=cadastro/parte2";
}

// ====================== Cadastro Parte 2 ======================
/**
 * Salva o tipo de perfil escolhido na segunda parte do cadastro.
 * Converte "trabalhador" para "prestador" para manter consistência.
 * @param {string} tipoPerfil - Tipo de perfil selecionado
 */
function salvarParte2(tipoPerfil) {
    const dados = JSON.parse(localStorage.getItem("cadastro")) || {};
    let tipo = tipoPerfil.toLowerCase();
    if (tipo === "trabalhador") tipo = "prestador";
    dados.perfil = tipo;
    localStorage.setItem("cadastro", JSON.stringify(dados));
    window.location.href = `index.php?url=cadastro/parte3/${tipo}`;
}

// ====================== Cadastro Parte 3 ======================
/**
 * Finaliza o cadastro do usuário enviando dados via FormData para o backend.
 */
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
        estado: document.getElementById("Estado")?.value || '',
        cep: document.getElementById("cep")?.value || '',
        rua: document.getElementById("rua")?.value || '',
        numero: document.getElementById("numero")?.value || '',
        infoadd: document.getElementById("infoadd")?.value || '',
        pais: document.getElementById("Pais")?.value || '',
        cidade: document.getElementById("Cidade")?.value || '',
    };

    // Validação dos campos obrigatórios
    if (!dados.nome || !dados.telefone || !dados.localidade || !dados.estado || !dados.rua || !dados.numero) {
        alert("Preencha todos os campos obrigatórios.");
        return;
    }

    if (!arquivoFoto) {
        alert("Selecione uma foto antes de continuar.");
        return;
    }

    for (const chave in dados) {
        formData.append(chave, dados[chave]);
    }
    formData.append("foto", arquivoFoto);

    try {
        const response = await fetch("index.php?url=usuario/cadastro", {
            method: "POST",
            body: formData,
        });

        const texto = await response.text();
        const resposta = JSON.parse(texto);

        if (resposta.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({ nome: dados.nome, email: dados.email }));
            localStorage.removeItem("cadastro");
            window.location.href = "index.php?url=home";
        } else if (resposta.error) {
            alert("Erro: " + (resposta.details ? JSON.stringify(resposta.details) : resposta.error));
        } else {
            alert("Erro ao finalizar cadastro.");
        }
    } catch (err) {
        console.error("Erro ao enviar cadastro:", err);
        alert("Erro de comunicação com o servidor.");
    }
}

// ====================== Login ======================
/**
 * Realiza o login do usuário via API.
 */
function fazerLogin() {
    const emailInput = document.getElementById("email");
    const senhaInput = document.getElementById("senha");
    const email = emailInput.value || '';
    const senha = senhaInput.value || '';

    if (!email || !senha) {
        if (!email) mostrarErro(emailInput, "Digite seu e-mail");
        if (!senha) mostrarErro(senhaInput, "Digite sua senha");
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
        if (resposta.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({ nome: resposta.nome || 'Usuário', email }));
            window.location.href = "index.php?url=home";
        } else {
            mostrarErro(emailInput, "Email ou senha incorretos");
            mostrarErro(senhaInput, "Email ou senha incorretos");
        }
    })
    .catch(err => {
        console.error("Erro no login:", err);
        alert("Erro ao tentar entrar.");
    });
}

// ====================== Seleção de Perfil (Parte 2) ======================
document.addEventListener('DOMContentLoaded', () => {
    ['Empresa', 'prestador', 'Contratante'].forEach(classe => {
        document.querySelectorAll(`.${classe}`).forEach(botao => {
            botao.addEventListener('click', (e) => {
                e.preventDefault();
                salvarParte2(classe);
            });
        });
    });

    // Atualiza o nome do usuário logado no header
    const perfilNameSpan = document.querySelector('.perfil-name');
    const usuarioLogado = JSON.parse(localStorage.getItem("usuarioLogado")) || {};
    if (perfilNameSpan) {
        perfilNameSpan.textContent = usuarioLogado.nome || "Usuário";
    }
});

// ====================== Máscaras e CEP automático ======================
document.addEventListener('DOMContentLoaded', () => {
    const cepInput = document.getElementById("cep");
    const telefoneInput = document.getElementById("telefone");
    const rua = document.getElementById("rua");
    const localidade = document.getElementById("localidade");
    const cidade = document.getElementById("Cidade");
    const estado = document.getElementById("Estado");

    [rua, localidade, cidade, estado].forEach(c => {
        if (c) { c.readOnly = true; c.style.backgroundColor = "#f9f9f9"; }
    });

    if (cepInput) {
        cepInput.setAttribute("data-placeholder", cepInput.placeholder || "");
        cepInput.addEventListener("input", () => {
            let valor = cepInput.value.replace(/\D/g, "");
            if (valor.length > 8) valor = valor.slice(0, 8);
            cepInput.value = valor.length > 5 ? valor.slice(0, 5) + "-" + valor.slice(5) : valor;
        });

        cepInput.addEventListener("blur", async function() {
            const cep = this.value.replace(/\D/g, '');
            if (cep.length !== 8) { mostrarErro(cepInput, "CEP inválido"); return; }

            try {
                const response = await fetch(`index.php?url=cep/${cep}`);
                if (!response.ok) throw new Error("Erro ao buscar o CEP.");
                const data = await response.json();

                if (!data || Object.keys(data).length === 0) { mostrarErro(cepInput, "CEP não encontrado"); return; }

                if (rua) rua.value = data.logradouro || "";
                if (localidade) localidade.value = data.localidade || "";
                if (cidade) cidade.value = data.localidade || "";
                if (estado) estado.value = data.uf || "";

                [rua, localidade, cidade, estado].forEach(c => {
                    if (c) { c.readOnly = false; c.style.backgroundColor = "#fff"; }
                });

                limparErro(cepInput);
            } catch (err) {
                console.error("Erro ao buscar CEP:", err);
                mostrarErro(cepInput, "Erro ao buscar CEP");
            }
        });
    }

    // Máscara de telefone
    if (telefoneInput) {
        telefoneInput.setAttribute("data-placeholder", telefoneInput.placeholder || "");
        telefoneInput.addEventListener("input", () => {
            let valor = telefoneInput.value.replace(/\D/g, "");
            if (valor.length > 11) valor = valor.slice(0, 11);

            if (valor.length > 10) {
                telefoneInput.value = `(${valor.slice(0,2)}) ${valor.slice(2,7)}-${valor.slice(7,11)}`;
            } else if (valor.length > 6) {
                telefoneInput.value = `(${valor.slice(0,2)}) ${valor.slice(2,6)}-${valor.slice(6)}`;
            } else if (valor.length > 2) {
                telefoneInput.value = `(${valor.slice(0,2)}) ${valor.slice(2)}`;
            } else if (valor.length > 0) {
                telefoneInput.value = `(${valor}`;
            }
        });
    }
});
