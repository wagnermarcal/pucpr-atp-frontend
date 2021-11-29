<?php
ob_start();
?>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <?php
    include("../PHP/conexao.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT login FROM usuario WHERE login='$username' AND senha='$password'";
    $resultado = $conn->query($sql);
    $linhas = mysqli_affected_rows($conn);

    if ($linhas > 0) {
        session_start();
        $_SESSION["login"] = $username;
        header("location: ../principal.html");
    } else {
        header("location: wronglogin.html");
    }
    ?>
</body>

</html>