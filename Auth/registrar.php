<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/669d35e20f.js" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <link rel="stylesheet" href="registrar.css" />
  <title>Formulário de Registro</title>
</head>

<body>
  <main class="container">
    <h2>Registro</h2>
    <form method="post" action="../PHP/dados.php">
      <div class="input-field">
        <input type="text" name="name" id="name" placeholder="Qual é o seu nome?" />
        <div class="underline"></div>
      </div>
      <div class="input-field">
        <input type="text" name="telefone" id="telefone" placeholder="Qual é o seu telefone?" />
        <div class="underline"></div>
      </div>
      <div class="input-field">
        <input type="text" name="username" id="username" placeholder="Crie o seu usuário" />
        <div class="underline"></div>
      </div>
      <div class="input-field">
        <input type="password" name="password" id="password" placeholder="Crie a sua senha" />
        <div class="underline"></div>
      </div>

      <input type="submit" value="Registrar" />
    </form>

    <div class="footer">
      <span>Registrar-se via redes-sociais</span>
      <div class="social-fields">
        <div class="social-field google">
          <a href="#">
            <span class="iconify" data-icon="flat-color-icons:google"></span>
            Registrar-se com Gmail
          </a>
        </div>
        <div class="social-field facebook">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
            Registrar-se com Facebook
          </a>
        </div>
      </div>
    </div>
    </div>
  </main>
</body>

</html>