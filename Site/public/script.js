console.log("script.js carregado!");

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
// Estado atual do tipo de cadastro
let tipoAtual = 'empresa';

// Elementos do DOM
const tipoBtns = document.querySelectorAll('.tipo-btn');
const empresaForm = document.getElementById('empresaForm');
const profissionalForm = document.getElementById('profissionalForm');
const contratanteForm = document.getElementById('contratanteForm');

// Função para mostrar toast
function showToast(message, type = 'success') {
  const toast = document.getElementById('toast');
  const toastMessage = document.getElementById('toastMessage');
  
  toastMessage.textContent = message;
  toast.className = 'toast show ' + type;
  
  setTimeout(() => {
    toast.classList.remove('show');
  }, 3000);
}

// Função para alternar entre tipos de cadastro
function switchTipo(tipo) {
  tipoAtual = tipo;
  
  // Remover classe active de todos os botões
  tipoBtns.forEach(btn => btn.classList.remove('active'));
  
  // Adicionar classe active ao botão clicado
  document.querySelector(`[data-tipo="${tipo}"]`).classList.add('active');
  
  // Esconder todos os formulários
  empresaForm.classList.remove('active');
  profissionalForm.classList.remove('active');
  contratanteForm.classList.remove('active');
  
  // Mostrar o formulário correto
  if (tipo === 'empresa') {
    empresaForm.classList.add('active');
  } else if (tipo === 'profissional') {
    profissionalForm.classList.add('active');
  } else if (tipo === 'contratante') {
    contratanteForm.classList.add('active');
  }
}

// Event listeners para os botões de tipo
tipoBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const tipo = btn.getAttribute('data-tipo');
    switchTipo(tipo);
  });
});

// Função para preview de imagem
function handleImagePreview(inputId, previewId) {
  const input = document.getElementById(inputId);
  const preview = document.getElementById(previewId);
  
  input.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (event) => {
        preview.innerHTML = `<img src="${event.target.result}" alt="Preview">`;
        preview.classList.add('has-image');
      };
      reader.readAsDataURL(file);
    }
  });
}

// Configurar previews de imagem para todos os formulários
// Empresa
handleImagePreview('empresaBanner', 'empresaBannerPreview');
handleImagePreview('empresaPerfil', 'empresaPerfilPreview');

// Profissional
handleImagePreview('profissionalBanner', 'profissionalBannerPreview');
handleImagePreview('profissionalPerfil', 'profissionalPerfilPreview');

// Contratante
handleImagePreview('contratanteBanner', 'contratanteBannerPreview');
handleImagePreview('contratantePerfil', 'contratantePerfilPreview');

// Função auxiliar para loading em botões
function setButtonLoading(button, isLoading) {
  const btnText = button.querySelector('.btn-text');
  const btnLoading = button.querySelector('.btn-loading');
  
  if (isLoading) {
    btnText.style.display = 'none';
    btnLoading.style.display = 'inline-block';
    button.disabled = true;
  } else {
    btnText.style.display = 'inline-block';
    btnLoading.style.display = 'none';
    button.disabled = false;
  }
}

// Máscaras para inputs
function maskCNPJ(value) {
  return value
    .replace(/\D/g, '')
    .replace(/^(\d{2})(\d)/, '$1.$2')
    .replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
    .replace(/\.(\d{3})(\d)/, '.$1/$2')
    .replace(/(\d{4})(\d)/, '$1-$2')
    .substring(0, 18);
}

function maskCPF(value) {
  return value
    .replace(/\D/g, '')
    .replace(/^(\d{3})(\d)/, '$1.$2')
    .replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3')
    .replace(/\.(\d{3})(\d)/, '.$1-$2')
    .substring(0, 14);
}

function maskCEP(value) {
  return value
    .replace(/\D/g, '')
    .replace(/^(\d{5})(\d)/, '$1-$2')
    .substring(0, 9);
}

// Aplicar máscaras
document.getElementById('empresaCnpj').addEventListener('input', (e) => {
  e.target.value = maskCNPJ(e.target.value);
});

document.getElementById('empresaCep').addEventListener('input', (e) => {
  e.target.value = maskCEP(e.target.value);
});

document.getElementById('profissionalCpf').addEventListener('input', (e) => {
  e.target.value = maskCPF(e.target.value);
});

document.getElementById('profissionalCep').addEventListener('input', (e) => {
  e.target.value = maskCEP(e.target.value);
});

document.getElementById('contratanteCpf').addEventListener('input', (e) => {
  e.target.value = maskCPF(e.target.value);
});

document.getElementById('contratanteCep').addEventListener('input', (e) => {
  e.target.value = maskCEP(e.target.value);
});

// Handle Empresa Form
empresaForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const submitBtn = empresaForm.querySelector('.btn-primary');
  const formData = {
    tipo: 'empresa',
    nome: document.getElementById('empresaNome').value,
    cnpj: document.getElementById('empresaCnpj').value,
    cep: document.getElementById('empresaCep').value,
    area: document.getElementById('empresaArea').value,
    fotoPerfil: document.getElementById('empresaPerfil').files[0],
    fotoBanner: document.getElementById('empresaBanner').files[0]
  };
  
  setButtonLoading(submitBtn, true);
  
  // Simulação de requisição - substitua com sua API
  setTimeout(() => {
    console.log('Cadastro Empresa:', formData);
    showToast('Empresa cadastrada com sucesso!', 'success');
    setButtonLoading(submitBtn, false);
    
    // Redirecionar ou limpar formulário
    setTimeout(() => {
      window.location.href = 'auth.html';
    }, 1500);
  }, 1500);
});

// Handle Profissional Form
profissionalForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const submitBtn = profissionalForm.querySelector('.btn-primary');
  const formData = {
    tipo: 'profissional',
    nome: document.getElementById('profissionalNome').value,
    cpf: document.getElementById('profissionalCpf').value,
    cep: document.getElementById('profissionalCep').value,
    area: document.getElementById('profissionalArea').value,
    fotoPerfil: document.getElementById('profissionalPerfil').files[0],
    fotoBanner: document.getElementById('profissionalBanner').files[0]
  };
  
  setButtonLoading(submitBtn, true);
  
  // Simulação de requisição - substitua com sua API
  setTimeout(() => {
    console.log('Cadastro Profissional:', formData);
    showToast('Profissional cadastrado com sucesso!', 'success');
    setButtonLoading(submitBtn, false);
    
    // Redirecionar ou limpar formulário
    setTimeout(() => {
      window.location.href = 'auth.html';
    }, 1500);
  }, 1500);
});

// Handle Contratante Form
contratanteForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const submitBtn = contratanteForm.querySelector('.btn-primary');
  const formData = {
    tipo: 'contratante',
    nome: document.getElementById('contratanteNome').value,
    cpf: document.getElementById('contratanteCpf').value,
    cep: document.getElementById('contratanteCep').value,
    fotoPerfil: document.getElementById('contratantePerfil').files[0],
    fotoBanner: document.getElementById('contratanteBanner').files[0]
  };
  
  setButtonLoading(submitBtn, true);
  
  // Simulação de requisição - substitua com sua API
  setTimeout(() => {
    console.log('Cadastro Contratante:', formData);
    showToast('Contratante cadastrado com sucesso!', 'success');
    setButtonLoading(submitBtn, false);
    
    // Redirecionar ou limpar formulário
    setTimeout(() => {
      window.location.href = 'auth.html';
    }, 1500);
  }, 1500);
});

// Inicializar na view de empresa
switchTipo('empresa');

// ELEMENTOS
const inputArea = document.getElementById("profissionalAreaInput");
const hiddenArea = document.getElementById("profissionalArea");
const optionsList = document.getElementById("profissionalAreaOptions");

// Mostrar lista ao focar
inputArea.addEventListener("focus", () => {
    optionsList.classList.remove("hidden");
});

// Filtrar ao digitar
inputArea.addEventListener("input", () => {
    const filter = inputArea.value.toLowerCase();

    Array.from(optionsList.children).forEach(li => {
        const text = li.textContent.toLowerCase();
        li.style.display = text.includes(filter) ? "block" : "none";
    });
});

// Selecionar opção
optionsList.addEventListener("click", (e) => {
    if (e.target.tagName === "LI") {
        const value = e.target.dataset.value;
        const label = e.target.textContent;

        inputArea.value = label;      // Mostra o nome para o usuário
        hiddenArea.value = value;     // Envia o valor para o form

        optionsList.classList.add("hidden");
    }
});

// Ocultar ao clicar fora
document.addEventListener("click", (e) => {
    if (!e.target.closest(".searchable-select")) {
        optionsList.classList.add("hidden");
    }
});


// -------------------- CAMPO COM BUSCA - EMPRESAS --------------------

const empresaInput = document.getElementById("empresaAreaInput");
const empresaHidden = document.getElementById("empresaArea");
const empresaOptions = document.getElementById("empresaAreaOptions");

// Mostrar lista ao focar
empresaInput.addEventListener("focus", () => {
    empresaOptions.classList.remove("hidden");
});

// Filtrar ao digitar
empresaInput.addEventListener("input", () => {
    const filter = empresaInput.value.toLowerCase();

    Array.from(empresaOptions.children).forEach(li => {
        const text = li.textContent.toLowerCase();
        li.style.display = text.includes(filter) ? "block" : "none";
    });
});

// Selecionar item
empresaOptions.addEventListener("click", (e) => {
    if (e.target.tagName === "LI") {
        const value = e.target.dataset.value;
        const label = e.target.textContent;

        empresaInput.value = label;   // Mostra texto
        empresaHidden.value = value;  // Envia valor real

        empresaOptions.classList.add("hidden");
    }
});

// Fechar ao clicar fora
document.addEventListener("click", (e) => {
    if (!e.target.closest(".searchable-select")) {
        empresaOptions.classList.add("hidden");
    }
});

document.getElementById("registerTelPro").addEventListener("input", function (e) {
  let value = e.target.value.replace(/\D/g, ""); // Remove tudo que não é número

  // Limita a 11 dígitos (DDD + 9 dígitos)
  value = value.substring(0, 11);

  // Aplica máscara: (XX) XXXXX-XXXX
  if (value.length > 6) {
      value = value.replace(/^(\d{2})(\d{5})(\d{0,4})/, "($1) $2-$3");
  } else if (value.length > 2) {
      value = value.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
  } else {
      value = value.replace(/^(\d{0,2})/, "($1");
  }

  e.target.value = value;
});

document.getElementById("registerTelEm").addEventListener("input", function (e) {
  let value = e.target.value.replace(/\D/g, ""); // Remove tudo que não é número

  // Limita a 11 dígitos (DDD + 9 dígitos)
  value = value.substring(0, 11);

  // Aplica máscara: (XX) XXXXX-XXXX
  if (value.length > 6) {
      value = value.replace(/^(\d{2})(\d{5})(\d{0,4})/, "($1) $2-$3");
  } else if (value.length > 2) {
      value = value.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
  } else {
      value = value.replace(/^(\d{0,2})/, "($1");
  }

  e.target.value = value;
});

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', () => limparErro(input));
    });
});
// Estado atual da view
let currentView = 'login'; // 'login', 'register', 'forgot-password'

// Elementos do DOM
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const forgotPasswordForm = document.getElementById('forgotPasswordForm');
const switchFormBtn = document.getElementById('switchFormBtn');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const cardTitle = document.getElementById('cardTitle');
const cardDescription = document.getElementById('cardDescription');
const mainSubtitle = document.getElementById('mainSubtitle');
const switchText = document.getElementById('switchText');

// Função para mostrar toast
function showToast(message, type = 'success') {
  const toast = document.getElementById('toast');
  const toastMessage = document.getElementById('toastMessage');
  
  toastMessage.textContent = message;
  toast.className = 'toast show ' + type;
  
  setTimeout(() => {
    toast.classList.remove('show');
  }, 3000);
}

// Função para alternar entre as views
function switchView(view) {
  currentView = view;
  
  // Esconder todos os forms
  loginForm.classList.remove('active');
  registerForm.classList.remove('active');
  forgotPasswordForm.classList.remove('active');
  
  // Atualizar textos e mostrar form correto
  if (view === 'login') {
    loginForm.classList.add('active');
    cardTitle.textContent = 'Login';
    cardDescription.textContent = 'Digite seus dados para acessar';
    mainSubtitle.textContent = 'Acesse sua conta para continuar';
    switchText.textContent = 'Não tem uma conta? ';
    switchFormBtn.textContent = 'Cadastre-se';
  } else if (view === 'register') {
    registerForm.classList.add('active');
    cardTitle.textContent = 'Criar Conta';
    cardDescription.textContent = 'Preencha os dados abaixo para se cadastrar';
    mainSubtitle.textContent = 'Crie sua conta e comece agora';
    switchText.textContent = 'Já tem uma conta? ';
    switchFormBtn.textContent = 'Fazer Login';
  } else if (view === 'forgot-password') {
    forgotPasswordForm.classList.add('active');
    cardTitle.textContent = 'Esqueci a Senha';
    cardDescription.textContent = 'Digite seu email para recuperar a senha';
    mainSubtitle.textContent = 'Recupere o acesso à sua conta';
    switchText.textContent = 'Já tem uma conta? ';
    switchFormBtn.textContent = 'Fazer Login';
  }
}

// Event Listeners para troca de formulários
switchFormBtn.addEventListener('click', () => {
  if (currentView === 'login') {
    switchView('register');
  } else {
    switchView('login');
  }
});

forgotPasswordLink.addEventListener('click', () => {
  switchView('forgot-password');
});

// Função auxiliar para loading em botões
function setButtonLoading(button, isLoading) {
  const btnText = button.querySelector('.btn-text');
  const btnLoading = button.querySelector('.btn-loading');
  
  if (isLoading) {
    btnText.style.display = 'none';
    btnLoading.style.display = 'inline-block';
    button.disabled = true;
  } else {
    btnText.style.display = 'inline-block';
    btnLoading.style.display = 'none';
    button.disabled = false;
  }
}

// Handle Login
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const email = document.getElementById('loginEmail').value;
  const password = document.getElementById('loginPassword').value;
  const submitBtn = loginForm.querySelector('.btn-primary');
  
  setButtonLoading(submitBtn, true);
  
  // Simulação de requisição - substitua com sua API
  setTimeout(() => {
    console.log('Login:', { email, password });
    showToast('Login realizado com sucesso!', 'success');
    setButtonLoading(submitBtn, false);
    
    // Redirecionar para home ou dashboard
    // window.location.href = '/';
  }, 1000);
});

// Handle Register
registerForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const name = document.getElementById('registerName').value;
  const email = document.getElementById('registerEmail').value;
  const password = document.getElementById('registerPassword').value;
  const confirmPassword = document.getElementById('confirmPassword').value;
  const submitBtn = registerForm.querySelector('.btn-primary');
  
  // Validar se as senhas coincidem
  if (password !== confirmPassword) {
    showToast('As senhas não coincidem', 'error');
    return;
  }
  
  setButtonLoading(submitBtn, true);
  
  // Simulação de requisição - substitua com sua API
  setTimeout(() => {
    console.log('Registro:', { name, email, password });
    showToast('Cadastro realizado com sucesso! Faça login para continuar.', 'success');
    setButtonLoading(submitBtn, false);
    
    // Limpar formulário e voltar para login
    registerForm.reset();
    switchView('login');
  }, 1000);
});

// Handle Forgot Password
forgotPasswordForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const email = document.getElementById('forgotEmail').value;
  const submitBtn = forgotPasswordForm.querySelector('.btn-primary');
  
  setButtonLoading(submitBtn, true);
  
  // Simulação de requisição - substitua com sua API
  setTimeout(() => {
    console.log('Recuperação de senha:', { email });
    showToast('Um email de recuperação foi enviado para ' + email, 'success');
    setButtonLoading(submitBtn, false);
    
    // Limpar formulário e voltar para login
    forgotPasswordForm.reset();
    switchView('login');
  }, 1000);
});

// Inicializar na view de login
switchView('login');
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

// ====================== Parte 1: Salvar Temporário ======================
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

    const dados = JSON.parse(localStorage.getItem("cadastro") || "{}");
    dados.email = email;
    dados.senha = senha;
    localStorage.setItem("cadastro", JSON.stringify(dados));

    window.location.href = "index.php?url=cadastro/parte2";
}

// ====================== Parte 2: Tipo de Perfil ======================
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

// ====================== Parte 3: Finalizar Cadastro ======================
let enviandoCadastro = false;

async function finalizarCadastro() {
    const btnCadastrar = document.getElementById("cadastrar");
    if (!btnCadastrar) return;
    if (enviandoCadastro) return;
    enviandoCadastro = true;
    btnCadastrar.disabled = true;

    const cadastro = JSON.parse(localStorage.getItem("cadastro") || "{}");

    if (!cadastro.email || !cadastro.senha || !cadastro.perfil) {
        alert("Complete as etapas anteriores do cadastro.");
        btnCadastrar.disabled = false;
        enviandoCadastro = false;
        window.location.href = "index.php?url=cadastro/parte1";
        return;
    }

    const campos = {
        nome: document.getElementById("nome")?.value.trim() || '',
        telefone: document.getElementById("telefone")?.value.trim() || '',
        cpf: document.getElementById("cpf")?.value.trim() || '',
        cep: document.getElementById("cep")?.value.trim() || '',
        rua: document.getElementById("rua")?.value.trim() || '',
        numero: document.getElementById("numero")?.value.trim() || '',
        localidade: document.getElementById("localidade")?.value.trim() || '',
        uf: document.getElementById("Estado")?.value.trim() || '',
        estado: document.getElementById("Estado")?.options[0]?.text || '',
        cidade: document.getElementById("cidade")?.value.trim() || '',
        infoadd: document.getElementById("infoadd")?.value.trim() || ''
    };

    if (cadastro.perfil === "prestador") {
        const idRamo = document.getElementById("id_ramo")?.value;
        if (!idRamo) {
            alert("Selecione o ramo de atuação!");
            btnCadastrar.disabled = false;
            enviandoCadastro = false;
            return;
        }
        campos.id_ramo = idRamo;
    }

    for (const key in campos) {
        if (!campos[key]) {
            alert(`O campo "${key}" é obrigatório!`);
            btnCadastrar.disabled = false;
            enviandoCadastro = false;
            return;
        }
    }

    const fotoInput = document.getElementById("file");
    if (!fotoInput || !fotoInput.files.length) {
        alert("Selecione uma foto!");
        btnCadastrar.disabled = false;
        enviandoCadastro = false;
        return;
    }
    const foto = fotoInput.files[0];

    const dadosCompletos = { ...cadastro, ...campos };
    const formData = new FormData();
    formData.append("foto", foto);
    formData.append("email", dadosCompletos.email);
    formData.append("password", dadosCompletos.senha);
    formData.append("type", dadosCompletos.perfil);
    for (const key in campos) formData.append(key, campos[key]);

    try {
        const response = await fetch("index.php?url=/usuario/cadastro", { method: "POST", body: formData });
        
        // ✅ CORREÇÃO: Verifica se a resposta é JSON antes de processar
        const contentType = response.headers.get("content-type");
        if (!contentType || !contentType.includes("application/json")) {
            const textoErro = await response.text();
            console.error("❌ Resposta NÃO É JSON (cadastro):", textoErro);
            throw new Error("Servidor retornou HTML/texto em vez de JSON. Verifique o backend.");
        }

        const data = await response.json();
        console.log("✅ JSON válido recebido (cadastro):", data);

        if (data.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify({
                nome: campos.nome,
                email: dadosCompletos.email,
                access_token: data.access_token
            }));
            localStorage.removeItem("cadastro");
            window.location.href = "index.php?url=home";
            setTimeout(() => atualizarNomeHeader(), 100);
        } else if (data.error) {
            alert("Erro no cadastro: " + (data.details || data.error));
        } else {
            alert("Erro inesperado no cadastro.");
        }

    } catch (err) {
        console.error("❌ Erro ao enviar cadastro:", err);
        alert("Erro: " + err.message);
    } finally {
        btnCadastrar.disabled = false;
        enviandoCadastro = false;
    }
}

// ====================== Login ======================
let enviandoLogin = false;

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

    if (enviandoLogin) return;
    enviandoLogin = true;

    try {
        const res = await fetch("index.php?url=/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ email, password: senha })
        });

        // ✅ CORREÇÃO: Verifica se a resposta é JSON antes de processar
        const contentType = res.headers.get("content-type");
        if (!contentType || !contentType.includes("application/json")) {
            const textoErro = await res.text();
            console.error("❌ Resposta NÃO É JSON (login):", textoErro);
            throw new Error("Servidor retornou HTML/texto em vez de JSON. Verifique o backend PHP.");
        }

        const resposta = await res.json();
        console.log("✅ JSON válido recebido (login):", resposta);

        if (resposta.access_token) {
            localStorage.setItem("usuarioLogado", JSON.stringify(resposta));
            atualizarNomeHeader();
            window.location.href = "index.php?url=home";
        } else if (resposta.error) {
            alert(resposta.error);
        } else {
            alert("Email ou senha incorretos");
        }

    } catch (err) {
        console.error("❌ Erro no login:", err);
        alert("Erro: " + err.message);
    } finally {
        enviandoLogin = false;
    }
}

// ====================== Conecta botões ======================
document.addEventListener("DOMContentLoaded", () => {
    const cadastrarBtn = document.getElementById("cadastrar");
    if (cadastrarBtn) cadastrarBtn.addEventListener("click", finalizarCadastro);
});


// ====================== Atualiza nome no header ======================
function atualizarNomeHeader() {
    const usuario = JSON.parse(localStorage.getItem("usuarioLogado"));
    const nomeHeader = document.getElementById("nomeHeader");

    if (nomeHeader && usuario && usuario.usuario) {
        nomeHeader.innerHTML = usuario.usuario.nome || usuario.usuario.email || "Usuário";
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
                        if (rua) rua.value = data.logradouro || '';
                        if (bairro) bairro.value = data.bairro || '';

                        // Preenche select de Estado
                        if (estado) {
                            estado.innerHTML = '';
                            const optionEstado = document.createElement('option');
                            optionEstado.value = data.uf;
                            optionEstado.text = estadosPorSigla[data.uf];
                            optionEstado.selected = true;
                            estado.appendChild(optionEstado);
                            estado.disabled = true;
                        }

                        // Preenche select de Cidade
                        if (cidade) {
                            cidade.innerHTML = '';
                            const optionCidade = document.createElement('option');
                            optionCidade.value = data.localidade;
                            optionCidade.text = data.localidade;
                            optionCidade.selected = true;
                            cidade.appendChild(optionCidade);
                            cidade.disabled = true;
                        }
                    }
                } catch (err) {
                    console.error("Erro ao buscar CEP:", err);
                }
            }
        });
    }
});


let enviandoCodigo = false;

async function esqueci_senha(event) {
    event.preventDefault();

    if (enviandoCodigo) return;
    enviandoCodigo = true;

    const email = document.getElementById('email')?.value.trim();
    if (!email) {
        alert("Digite seu e-mail");
        enviandoCodigo = false;
        return;
    }

    try {
        const apiUrl = `index.php?url=forgot-password`;
        const response = await fetch(apiUrl + `?email=${encodeURIComponent(email)}`);
        if (!response.ok) throw new Error(`Erro HTTP ${response.status}`);

        const data = await response.json();
        if (data.message === "Código enviado para o e-mail.") {
            window.location.href = `index.php?url=esqueci_senha/verificacao&email=${encodeURIComponent(email)}`;
        }
    } catch (err) {
        console.error("Erro ao enviar código:", err);
        alert("Erro de comunicação com o servidor: " + err.message);
    } finally {
        enviandoCodigo = false;
    }
}



// ====================== Cards Automáticos ======================
let usuariosCache = [];
let usuariosFiltrados = [];

// ====================== Renderizar cards usando template ======================
function renderizarCards(lista) {
    const container = document.getElementById('cards-container');
    if (!container) return;

    container.innerHTML = '';

    lista.forEach(item => {
        const template = document.querySelector('#card-template')?.content.cloneNode(true);
        if (!template) return;

        const nome = item.prestador?.nome || 'Usuário';
        const area = item.prestador?.profissao || 'Profissão não informada';
        const cidade = item.prestador?.localidade || 'Local não informado';
        const estado = item.prestador?.uf || '';
        const telefone = item.contato?.telefone || 'Não informado';
        const email = item.user?.email || 'Não informado';
        const foto = item.prestador?.foto?.trim() ? item.prestador.foto : '/public/img/fundo.png';
        const avaliacao = item.prestador?.avaliacao || 0;
        const quantAvaliacoes = item.prestador?.quant_avaliacoes || 0;

        template.querySelector('.foto-perfil img').src = foto;
        template.querySelector('.foto-perfil img').alt = nome;
        template.querySelector('.nome-card').textContent = nome;
        template.querySelector('.area-card').textContent = area;
        template.querySelector('.empresa-ou-profissional').textContent = 'Profissional';
        template.querySelector('.telefone').textContent = telefone;
        template.querySelector('.email').textContent = email;
        template.querySelector('.localizacao span').textContent = `${cidade}, ${estado}`;
        template.querySelector('.avaliacao-content').innerHTML = `
            <div class="flex items-center gap-1">${renderStars(avaliacao)}</div>
            <span class="quant-avaliacoes">(${quantAvaliacoes} avaliações)</span>
        `;

        template.querySelector('.ver-perfil').addEventListener('click', () => {
            const dados = new URLSearchParams({ nome, cidade, estado, email, telefone, foto });
            window.location.href = "index.php?url=perfil_acessar&" + dados.toString();
        });

        container.appendChild(template);
    });

    atualizarContadores();
}

// ====================== Renderizar estrelas ======================
function renderStars(avaliacao) {
    let full = Math.floor(avaliacao);
    let half = avaliacao % 1 >= 0.5 ? 1 : 0;
    let empty = 5 - full - half;
    let stars = '';

    for (let i = 0; i < full; i++) stars += `<svg class="fill-yellow-400 w-4 h-4">...</svg>`;
    if (half) stars += `<svg class="fill-yellow-400 w-4 h-4">...</svg>`;
    for (let i = 0; i < empty; i++) stars += `<svg class="text-gray-300 w-4 h-4">...</svg>`;

    return stars;
}

// ====================== Filtros ======================
function aplicarFiltros(tipo = "Todos") {
    usuariosFiltrados = tipo === "Todos"
        ? [...usuariosCache]
        : usuariosCache.filter(u => tipo === "Profissionais" ? u.user?.tipo_usuario === "prestador" : u.user?.tipo_usuario === "empresa");
    aplicarOrdenacao();
}

// ====================== Ordenação ======================
function aplicarOrdenacao() {
    const ordSelect = document.getElementById("ord-select");
    if (!ordSelect) return;
    
    const ordem = ordSelect.value || "recente";
    usuariosFiltrados.sort((a, b) => {
        switch (ordem) {
            case "nome": return (a.prestador?.nome || "").localeCompare(b.prestador?.nome || "");
            case "antigo": return (a.user?.id || 0) - (b.user?.id || 0);
            case "avaliacao": return (b.prestador?.avaliacao || 0) - (a.prestador?.avaliacao || 0);
            default: return (b.user?.id || 0) - (a.user?.id || 0);
        }
    });
    renderizarCards(usuariosFiltrados);
}

// ====================== Contadores ======================
function atualizarContadores() {
    const todosEl = document.getElementById("todos");
    const profEl = document.getElementById("Profissionais");
    const empEl = document.getElementById("empresas");

    if (todosEl) todosEl.textContent = usuariosCache.length;
    if (profEl) profEl.textContent = usuariosCache.filter(u => u.user?.tipo_usuario === "prestador").length;
    if (empEl) empEl.textContent = usuariosCache.filter(u => u.user?.tipo_usuario === "empresa").length;
}

// ✅ CORREÇÃO PRINCIPAL: Só carrega se o container existir
function carregarUsuarios() {
    const container = document.getElementById('cards-container');
    
    // ✅ Se não existe o container, NÃO executa (evita erro)
    if (!container) {
        console.log("⚠️ cards-container não encontrado. Pulando carregamento.");
        return;
    }

    container.innerHTML = '<p>Carregando prestadores...</p>';

    fetch('index.php?url=prestadores&nocache=' + Date.now())
        .then(res => res.ok ? res.json() : Promise.reject(res.status))
        .then(usuarios => {
            console.log("✅ Dados recebidos da API:", usuarios);
            if (!Array.isArray(usuarios)) throw new Error("Retorno inválido da API");
            usuariosCache = usuarios;
            aplicarFiltros("Todos");
        })
        .catch(err => {
            console.error("❌ Erro ao carregar usuários:", err);
            if (container) container.innerHTML = `<p>Erro ao carregar usuários: ${err}</p>`;
        });
}

// ✅ Só executa se estiver na página de prestadores
window.addEventListener('load', carregarUsuarios);

// ====================== Funções já existentes ======================
window.finalizarCadastro = finalizarCadastro;
window.fazerLogin = fazerLogin;
window.atualizarNomeHeader = atualizarNomeHeader;
window.esqueci_senha = esqueci_senha;
document.addEventListener('DOMContentLoaded', atualizarNomeHeader);