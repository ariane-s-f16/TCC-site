<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificar Código</title>
  <link rel="stylesheet" href="public/style10.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="icon-wrapper">
        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
      </div>
      
      <h1 class="title">Verificar Código</h1>
      <p class="description">
        Enviamos um código de 6 dígitos para <strong id="user-email"></strong>. Digite o código abaixo para continuar.
      </p>

      <form class="form" onsubmit="handleVerifyCode(event)">
        <div class="code-inputs">
          <input type="text" maxlength="1" class="code-input" id="code-1" required />
          <input type="text" maxlength="1" class="code-input" id="code-2" required />
          <input type="text" maxlength="1" class="code-input" id="code-3" required />
          <input type="text" maxlength="1" class="code-input" id="code-4" required />
          <input type="text" maxlength="1" class="code-input" id="code-5" required />
          <input type="text" maxlength="1" class="code-input" id="code-6" required />
        </div>

        <button type="submit" class="button button-primary">
          Verificar Código
        </button>

        <div class="resend-section">
          <p class="resend-text">Não recebeu o código?</p>
          <button type="button" class="link-button" onclick="resendCode()">
            Reenviar código
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Pegar email da URL
    const urlParams = new URLSearchParams(window.location.search);
    const email = urlParams.get('email') || 'seu@email.com';
    document.getElementById('user-email').textContent = email;

    // Funcionalidade dos inputs de código
    const codeInputs = document.querySelectorAll('.code-input');
    
    codeInputs.forEach((input, index) => {
      input.addEventListener('input', (e) => {
        const value = e.target.value;
        
        // Apenas números
        if (!/^\d*$/.test(value)) {
          e.target.value = '';
          return;
        }
        
        // Mover para próximo input
        if (value && index < codeInputs.length - 1) {
          codeInputs[index + 1].focus();
        }
      });
      
      input.addEventListener('keydown', (e) => {
        // Backspace - voltar para input anterior
        if (e.key === 'Backspace' && !e.target.value && index > 0) {
          codeInputs[index - 1].focus();
        }
        
        // Setas para navegar
        if (e.key === 'ArrowLeft' && index > 0) {
          codeInputs[index - 1].focus();
        }
        if (e.key === 'ArrowRight' && index < codeInputs.length - 1) {
          codeInputs[index + 1].focus();
        }
      });
      
      // Colar código completo
      input.addEventListener('paste', (e) => {
        e.preventDefault();
        const pastedData = e.clipboardData.getData('text').slice(0, 6);
        
        if (/^\d+$/.test(pastedData)) {
          pastedData.split('').forEach((char, i) => {
            if (codeInputs[i]) {
              codeInputs[i].value = char;
            }
          });
          
          const lastFilledIndex = Math.min(pastedData.length - 1, 5);
          codeInputs[lastFilledIndex].focus();
        }
      });
    });

    function handleVerifyCode(event) {
      event.preventDefault();
      const code = Array.from(codeInputs).map(input => input.value).join('');
      console.log('Código verificado:', code);
      alert('Código verificado com sucesso! Redirecionando para redefinir senha...');
    }

    function resendCode() {
      console.log('Reenviando código para:', email);
      alert('Código reenviado para ' + email);
    }
  </script>
</body>
</html>
