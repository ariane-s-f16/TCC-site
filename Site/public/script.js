

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
    input.style.borderColor = "red";
    input.style.setProperty("--placeholder-color", "red");
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

    // Salva dados da Parte 1
    const dados = { email, senha, confSenha };
    localStorage.setItem("cadastro", JSON.stringify(dados));
    console.log(" Dados carregados da Parte 1:", dados);

    window.location.href = "index.php?url=cadastro/parte2";
}

// ====================== Parte 2 ======================
function salvarParte2(tipoPerfil) {
    const dados = JSON.parse(localStorage.getItem("cadastro"));
    if (!dados) {
        alert("Complete a Parte 1 primeiro!");
        window.location.href = "index.php?url=cadastro/parte1";
        return;
    }

    if (!tipoPerfil) {
        alert("Selecione um tipo de perfil antes de continuar.");
        return;
    }

    let tipo = tipoPerfil.toLowerCase();
    if (tipo === "trabalhador") tipo = "prestador";

    dados.perfil = tipo;

    localStorage.setItem("cadastro", JSON.stringify(dados));
    console.log(" Dados atualizados na Parte 2:", dados);

    window.location.href = `index.php?url=cadastro/parte3/${tipo}`;
}

// ====================== Parte 3 ======================
async function finalizarCadastro() {
    const cadastro = JSON.parse(localStorage.getItem("cadastro"));
    if (!cadastro) {
        alert("Complete as etapas anteriores do cadastro.");
        window.location.href = "index.php?url=cadastro/parte1";
        return;
    }

    const fotoInput = document.getElementById("foto");
    const arquivoFoto = fotoInput?.files?.[0] || null;

    const formData = new FormData();
    const dados = {
        email: cadastro.email,
        password: cadastro.senha,
        type: cadastro.perfil,
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

    // Validação básica
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

    // Adiciona dados e arquivo ao FormData
    for (const chave in dados) formData.append(chave, dados[chave]);
    formData.append("foto", arquivoFoto);

    try {
        const response = await fetch("index.php?url=usuario/cadastro", {
            method: "POST",
            body: formData
        });

        const texto = await response.text();
        let resposta;
        try {
            resposta = JSON.parse(texto);
        } catch {
            console.error("Resposta do servidor não é JSON:", texto);
            alert("Erro no servidor. Tente novamente.");
            return;
        }

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

    // Validação simples
    let valido = true;
    if (!email) {
        mostrarErro(emailInput, "Digite seu e-mail");
        valido = false;
    }
    if (!senha) {
        mostrarErro(senhaInput, "Digite sua senha");
        valido = false;
    }
    if (!valido) return;

    const dados = { email, password: senha };

    try {
        const res = await fetch("index.php?url=/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(dados)
        });

        // Verifica se retornou HTML (erro de rota)
        const texto = await res.text();
        if (texto.startsWith("<!DOCTYPE")) {
            throw new Error("Resposta inesperada (HTML recebido no lugar de JSON)");
        }

        const resposta = JSON.parse(texto);
        console.log("🔹 Resposta do servidor:", resposta);

        if (resposta.access_token) {
            // tenta pegar nome do backend
            let nomeUsuario = resposta.nome;

            // se o backend não mandou o nome, tenta recuperar dos cadastros salvos
            if (!nomeUsuario || nomeUsuario.toLowerCase() === "usuário") {
                const parte1 = JSON.parse(localStorage.getItem("dadosParte1") || "{}");
                const parte3 = JSON.parse(localStorage.getItem("dadosParte3") || "{}");
                nomeUsuario = parte3.nome || parte1.nome || "Usuário";
            }

            // Salva no localStorage
            const usuarioLogado = {
                nome: nomeUsuario,
                email: email,
                access_token: resposta.access_token
            };
            localStorage.setItem("usuarioLogado", JSON.stringify(usuarioLogado));

            console.log("✅ Usuário salvo:", usuarioLogado);

            // Atualiza nome imediatamente
            const span = document.querySelector(".perfil-name");
            if (span) span.textContent = nomeUsuario;

            // Redireciona
            window.location.href = "index.php?url=home";
        } else {
            mostrarErro(emailInput, "Email ou senha incorretos");
            mostrarErro(senhaInput, "Email ou senha incorretos");
        }
    } catch (err) {
        console.error("❌ Erro no login:", err);
        alert("Erro ao tentar entrar. Verifique sua conexão ou rota do servidor.");
    }
}

// ============================
// FUNÇÃO PARA MOSTRAR ERRO DE INPUT
// ============================
function mostrarErro(input, mensagem) {
    input.classList.add("erro-input");
    input.placeholder = mensagem;
    input.style.borderColor = "red";
    input.style.color = "red";
    input.addEventListener("input", () => {
        input.classList.remove("erro-input");
        input.placeholder = "";
        input.style.borderColor = "";
        input.style.color = "";
    });
}

// ============================
// ATUALIZA NOME NO HEADER
// ============================
function atualizarNomeHeader() {
    const span = document.querySelector(".perfil-name");
    if (!span) return;

    const usuarioLogado = JSON.parse(localStorage.getItem("usuarioLogado") || "{}");
    const nome = usuarioLogado.nome || "Usuário";
    span.textContent = nome;

    console.log("🟢 Nome atualizado no header:", nome);
}

document.addEventListener("DOMContentLoaded", atualizarNomeHeader);
// Chame no DOMContentLoaded da home
document.addEventListener('DOMContentLoaded', atualizarNomeHeader);
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

    // ---------- Busca por trabalhadores e empresas ----------
    const buscador = document.getElementById('buscador');
    if (buscador) {
        let resultadosDiv = document.createElement('div');
        resultadosDiv.id = 'resultados-busca';
        resultadosDiv.style.position = 'absolute';
        resultadosDiv.style.background = '#fff';
        resultadosDiv.style.width = buscador.offsetWidth + 'px';
        resultadosDiv.style.maxHeight = '200px';
        resultadosDiv.style.overflowY = 'auto';
        resultadosDiv.style.border = '1px solid #ccc';
        resultadosDiv.style.zIndex = '1000';
        resultadosDiv.style.display = 'none';
        buscador.parentNode.appendChild(resultadosDiv);

        buscador.addEventListener('input', async () => {
            const termo = buscador.value.trim().toLowerCase();
            resultadosDiv.innerHTML = '';

            if (termo.length === 0) {
                resultadosDiv.style.display = 'none';
                return;
            }

            try {
                const res = await fetch(`index.php?url=usuario/buscar&termo=${encodeURIComponent(termo)}`);
                const usuarios = await res.json();

                if (!usuarios.length) {
                    resultadosDiv.style.display = 'none';
                    return;
                }

                usuarios.forEach(u => {
                    const item = document.createElement('div');
                    item.textContent = `${u.nome} (${u.tipo})`;
                    item.style.padding = '5px 10px';
                    item.style.cursor = 'pointer';
                    item.addEventListener('click', () => {
                        window.location.href = `index.php?url=perfil/${u.id}`;
                    });
                    resultadosDiv.appendChild(item);
                });

                resultadosDiv.style.display = 'block';
            } catch (err) {
                console.error('Erro ao buscar usuários:', err);
                resultadosDiv.style.display = 'none';
            }
        });

        document.addEventListener('click', (e) => {
            if (!buscador.contains(e.target) && !resultadosDiv.contains(e.target)) {
                resultadosDiv.style.display = 'none';
            }
        });
    }
});
