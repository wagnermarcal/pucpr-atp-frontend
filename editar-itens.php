<!DOCTYPE html>
<html lang="pt-br">

<?php

include("PHP/conexao.php");

$id = "";
$nome = "";
$tipo = "";

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $sql = "SELECT ID, Nome, Tipo, Disponivel FROM itens WHERE ID = $id";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);

    $nome = $row['Nome'];
    $tipo = $row['Tipo'];
}

?>

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
          'url': 'https://icy.unitedradio.it/VirginRock80.mp3',
          'codec': 'mp3',
          'volume': 100,
          'autoplay': true,
          'jsevents': true,
          'buffering': 0,
          'title': 'Waguin',
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
                <li><a href="emprestimo.php">Empréstimos</>
                </li>
                <li><a href="cadastro-itens.php">Cadastro</a></li>
                <li><a href="Auth/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="all">
            <h2>Edição de Itens</h2>
            <form method="post" action="PHP/itens.php">
                <div class="input-field">
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" />
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="tipo" id="tipo" value="<?php echo $tipo ?>" />
                    <div class="underline"></div>
                </div>
                <input type="submit" value="Editar Item" />
            </form>
        </div>
    </main>
    <script src="mobile-navbar.js"></script>
</body>

</html>