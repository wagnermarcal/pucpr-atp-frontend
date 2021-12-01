<?php
include("PHP/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="emprestimo.css">
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
                <li><a href="emprestimo.php">Empréstimos</a></li>
                <li><a href="cadastro-itens.php">Cadastro</a></li>
                <li><a href="Auth/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="all">
            <h2>Empréstimo de Itens</h2>
            <form method="post" action="itens.php">
                <label class="input-field">Pessoa</label>
                <select class="input-field" name="pessoa">
                    <option>Selecione</option>
                    <?php

                    $sql = "SELECT UID, name FROM usuario";
                    $res = mysqli_query($conn, $sql);
                    if ($res) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<option value='" . $row['UID'] . "'>" . $row['name'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <label class="input-field">Item</label>
                <select class="input-field" name="Nome">
                    <option>Selecione</option>
                    <?php

                    $sql = "SELECT ID, Nome FROM itens";
                    $res = mysqli_query($conn, $sql);
                    if ($res) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<option value='" . $row['ID'] . "'>" . $row['Nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <label>Data do empréstimo</label> <br>
                <input type="date" name="dataEmprestimo"> <br>
                <label>Data de devolução</label> <br>
                <input type="date" name="dataDevolucao"> <br>
                <br>
                <input class="input-field" type="submit" value="Emprestar" />
            </form>
        </div>
    </main>
    <script src="mobile-navbar.js"></script>
</body>

</html>