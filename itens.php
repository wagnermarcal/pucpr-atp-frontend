<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="itens.css">
    <title>Principal</title>
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
    <main>
        <div id="particles-js">
            <div class="tabela">
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Tipo</td>
                        <td>Situação</td>
                    </tr>
                    <?php
                    include("PHP/conexao.php");
                    $sql = "SELECT ID, Nome, Tipo, Disponivel FROM itens";

                    $res = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>
                        <td>" . $row['ID'] . "</td>
                        <td>" . $row['Nome'] . "</td>
                        <td>" . $row['Tipo'] . "</td>
                        <td>" . $row['Disponivel'] . "</td>
                        <td><a href='editar-itens.php?ID=" . $row['ID'] . "'>Editar</a></td>
                        <td><a href='deletar-itens.php?ID=" . $row['ID'] . "'>Excluir</a></td>
                 </tr>";
                    }

                    ?>

                </table>
            </div>
        </div>
    </main>
    <script src="mobile-navbar.js"></script>


</body>

</html>