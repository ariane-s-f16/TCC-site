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
    console.log(" Redirecionando para:", destino);
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
        const texto = await res.text();
        if (!texto) throw new Error("Servidor não retornou dados.");

        const resposta = JSON.parse(texto);

        if (resposta.access_token) {
            const nomeUsuario = resposta.user?.nome || resposta.user?.name || email;

            const usuarioLogado = { 
                nome: nomeUsuario,
                email: email,
                access_token: resposta.access_token
            };

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
    console.log("🚀 Função finalizarCadastro() foi chamada!");

    const cadastro = JSON.parse(localStorage.getItem("cadastro"));
    console.log("📦 Dados atuais no localStorage:", cadastro);

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

    console.log("🧩 Dados do formulário coletados:", dados);

    // Validação básica
    for (const key of ['nome','telefone','localidade','uf','rua','numero']) {
        if (!dados[key]) {
            const input = document.getElementById(key);
            mostrarErro(input, "Campo obrigatório");
            console.warn(`⚠️ Campo obrigatório faltando: ${key}`);
            return;
        }
    }

    if (!arquivoFoto) {
        alert("Selecione uma foto antes de continuar.");
        console.warn("⚠️ Nenhum arquivo de foto selecionado!");
        return;
    }

    // Adiciona dados e arquivo ao FormData
    for (const chave in dados) formData.append(chave, dados[chave]);
    formData.append("foto", arquivoFoto);

    console.log("📨 Enviando dados ao servidor...");

    try {
        const response = await fetch("index.php?url=usuario/cadastro", {
            method: "POST",
            body: formData
        });

        const texto = await response.text();
        console.log("🧾 Resposta bruta do servidor:", texto);

        let resposta;
        try {
            resposta = JSON.parse(texto);
        } catch {
            console.error(" Resposta do servidor não é JSON:", texto);
            alert("Erro no servidor. Tente novamente.");
            return;
        }

        console.log(" Resposta parseada:", resposta);

        if (resposta.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({ 
                nome: dados.nome, 
                email: dados.email, 
                access_token: resposta.access_token 
            }));
            localStorage.removeItem("cadastro");
            console.log("🎉 Cadastro finalizado com sucesso!");
            window.location.href = "index.php?url=home";
        } else {
            console.warn(" Erro no cadastro. Resposta sem token.");
            alert("Erro ao finalizar cadastro.");
        }
    } catch (err) {
        console.error(" Erro ao enviar cadastro:", err);
        alert("Erro de comunicação com o servidor.");
    }
}

// 🔹 Torna a função global para o onclick funcionar
window.finalizarCadastro = finalizarCadastro;

// ====================== Máscaras e CEP ======================
document.addEventListener('DOMContentLoaded', () => {
    atualizarNomeHeader();

    const cpfInput = document.getElementById("cpf");
    const telefoneInput = document.getElementById("telefone");
    const cepInput = document.getElementById("cep");
    const rua = document.getElementById("rua");
    const bairro = document.getElementById("localidade");
    const cidade = document.getElementById("Cidade");
    const estado = document.getElementById("Estado");

    // Máscara CPF
    if (cpfInput) cpfInput.addEventListener("input", () => {
        let v = cpfInput.value.replace(/\D/g, "").slice(0, 11);
        v = v.replace(/(\d{3})(\d)/, "$1.$2").replace(/(\d{3})(\d)/, "$1.$2").replace(/(\d{3})(\d{1,2})$/, "$1-$2");
        cpfInput.value = v;
    });

    // Máscara Telefone
    if (telefoneInput) telefoneInput.addEventListener("input", () => {
        let v = telefoneInput.value.replace(/\D/g, "").slice(0, 11);
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2").replace(/(\d{5})(\d{4})$/, "$1-$2");
        telefoneInput.value = v;
    });

    // Preenchimento CEP automático
    if (cepInput) cepInput.addEventListener("input", async () => {
        let v = cepInput.value.replace(/\D/g, "").slice(0, 8);
        cepInput.value = v.replace(/(\d{5})(\d)/, "$1-$2");
        if (v.length === 8) {
            try {
                const res = await fetch(`https://viacep.com.br/ws/${v}/json/`);
                const data = await res.json();
                if (!data.erro) {
                    // Campos readonly
                    rua.value = data.logradouro || '';
                    bairro.value = data.bairro || '';

                    // Preencher selects e bloquear edição
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

    // ====================== Buscador ======================
    const buscador = document.getElementById('buscador');
    if (!buscador) return;

    let resultadosDiv = document.createElement('div');
    resultadosDiv.id = 'resultados-busca';
    resultadosDiv.style.position = 'absolute';
    resultadosDiv.style.background = '#fff';
    resultadosDiv.style.width = buscador.offsetWidth + 'px';
    resultadosDiv.style.maxHeight = '400px';
    resultadosDiv.style.overflowY = 'auto';
    resultadosDiv.style.border = '1px solid #ccc';
    resultadosDiv.style.boxShadow = '0 2px 8px rgba(0,0,0,0.2)';
    resultadosDiv.style.borderRadius = '8px';
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
                const card = document.createElement('div');
                card.classList.add('card-busca');
                card.style.display = 'flex';
                card.style.alignItems = 'center';
                card.style.padding = '10px';
                card.style.margin = '5px';
                card.style.cursor = 'pointer';
                card.style.borderBottom = '1px solid #eee';
                card.style.transition = 'background 0.2s';

                card.addEventListener('mouseenter', () => card.style.background = '#f5f5f5');
                card.addEventListener('mouseleave', () => card.style.background = '#fff');

                card.addEventListener('click', () => {
                    window.location.href = `index.php?url=perfil/${u.id}`;
                });

                const img = document.createElement('img');
                img.src = u.foto || 'public/img/avatar.png';
                img.alt = u.nome;
                img.style.width = '50px';
                img.style.height = '50px';
                img.style.borderRadius = '50%';
                img.style.objectFit = 'cover';
                img.style.marginRight = '10px';

                const info = document.createElement('div');
                const nome = document.createElement('div');
                nome.textContent = u.nome;
                nome.style.fontWeight = 'bold';
                const cargo = document.createElement('div');
                cargo.textContent = u.cargo || u.tipo;
                cargo.style.fontSize = '0.9em';
                cargo.style.color = '#555';
                const local = document.createElement('div');
                local.textContent = `${u.cidade || ''}${u.cidade && u.estado ? ', ' : ''}${u.estado || ''}`;
                local.style.fontSize = '0.8em';
                local.style.color = '#888';

                info.appendChild(nome);
                info.appendChild(cargo);
                info.appendChild(local);

                card.appendChild(img);
                card.appendChild(info);
                resultadosDiv.appendChild(card);
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
});

function esqueci_senha(event) {
  event.preventDefault();
  const email = document.getElementById('email').value;
  // Simular envio de email
  console.log('Enviando código para:', email);
  // Redirecionar para página de verificação
  window.location.href = 'index.php?url=esqueci_senha/verificacao? email=' + encodeURIComponent(email);
}





