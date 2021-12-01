<?php

include("conexao.php");

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$phone = $_POST["telefone"];

$sql = "INSERT INTO usuario (senha, name, telefone, login)
VALUES ('$password', '$name', '$phone','$username')";

if (mysqli_query($conn, $sql)) {
    header("location: ../Auth/login.php");
} else {
    echo "Erro!!!" . mysqli_connect_error($conn);
}
mysqli_close($conn);
