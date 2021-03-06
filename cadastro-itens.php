<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="cadastro-itens.css">
</head>

<body>
  <header>
    <nav>
      <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
      <script type="text/javascript">
        MRP.insert({
          'url': 'https://cast.magicstreams.gr:2200/ssl/psyndora?mp=%2Fstream',
          'lang': 'pt',
          'codec': 'mp3',
          'volume': 100,
          'autoplay': true,
          'jsevents': true,
          'buffering': 0,
          'title': 'Waguinho',
          'wmode': 'transparent',
          'skin': 'repvku-100',
          'width': 0,
          'height': 0
        });
      </script>
      <img src="Images/Logo Wagner.png" alt="">
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="principal.php">Início</a></li>
        <li><a href="itens.php">Itens</a></li>
        <li><a href="emprestimo.php">Empréstimos</a></li>
        <li><a href="cadastro-itens.php">Cadastro</a></li>
        <li><a href="Auth/logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <main class="container">
    <div class="all">
      <h2>Cadastro de Itens</h2>
      <form method="post" action="PHP/itens.php">
        <div class="input-field">
          <input type="text" name="nome" id="nome" placeholder="Qual o nome do item?" />
          <div class="underline"></div>
        </div>
        <div class="input-field">
          <input type="text" name="tipo" id="tipo" placeholder="Digite o tipo do item" />
          <div class="underline"></div>
        </div>
        <input type="submit" value="Cadastrar Item" />
      </form>
    </div>
  </main>
  <script src="mobile-navbar.js"></script>
</body>

</html>