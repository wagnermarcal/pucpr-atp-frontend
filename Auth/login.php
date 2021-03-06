<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/669d35e20f.js" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <link rel="stylesheet" href="login.css" />
  <title>Formulário Login</title>
</head>

<body>
  <div class="all">
    <main class="container">
      <h2>Login</h2>
      <form method="post" action="autenticacao.php">
        <div class="input-field">
          <input type="text" name="username" id="username" placeholder="Digite seu usuário" />
          <div class="underline"></div>
        </div>
        <div class="input-field">
          <input type="password" name="password" id="password" placeholder="Digite sua senha" />
          <div class="underline"></div>
        </div>
        <input type="submit" value="Login" />
      </form>
      <div class="footer">
        <span>Login via redes sociais</span>
        <div class="social-fields">
          <div class="social-field google">
            <a href="#">
              <span class="iconify" data-icon="flat-color-icons:google"></span>
              Fazer login com Gmail
            </a>
          </div>
          <div class="social-field facebook">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
              Fazer login com Facebook
            </a>
          </div>
          <span>Não tem uma conta?</span>
          <div class="social-field register">
            <form>
              <a href="registrar.php">
                <input type="button" value="Criar conta" />
              </a>
            </form>
          </div>
        </div>
      </div>
  </div>
  </main>
</body>

</html>