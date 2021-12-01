<?php
ob_start();
?>
<html>

<head>
    <title>Autenticado com sucesso!</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
        echo "Erro!";
        exit();
    }
    echo "Olá " . $_SESSION["usuario"];
    echo "<br><BR>";
    ?>
    <h1>[Autenticado com sucesso!!!]</h1>
    <hr>
    <p><a href="logout.php">LOGOUT</a></p>
</body>

</html>