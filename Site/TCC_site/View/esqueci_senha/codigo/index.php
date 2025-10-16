<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esqueci Minha Senha</title>
  <link rel="stylesheet" href="public/style10.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="icon-wrapper">
        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
        </svg>
      </div>
      
      <h1 class="title">Esqueci Minha Senha</h1>
      <p class="description">
        Digite seu endereço de e-mail e enviaremos um código de verificação para redefinir sua senha.
      </p>

      <form class="form" onsubmit="handleForgotPassword(event)">
        <div class="form-group">
          <label for="email" class="label">Endereço de E-mail</label>
          <input 
            type="email" 
            id="email" 
            name="email" 
            class="input" 
            placeholder="seu@email.com"
            required
          />
        </div>

        <button type="submit" class="button button-primary">
          Enviar Código de Verificação
        </button>

        <a href="index.php?url=entrar" class="link">Voltar para o login</a>
      </form>
    </div>
  </div>

  <script>
    function handleForgotPassword(event) {
      event.preventDefault();
      const email = document.getElementById('email').value;
      // Simular envio de email
      console.log('Enviando código para:', email);
      // Redirecionar para página de verificação
      window.location.href = 'index.php?url=esqueci_senha/codigo?email=' + encodeURIComponent(email);
    }
  </script>
</body>
</html>
