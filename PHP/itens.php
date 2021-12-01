<?php

include("conexao.php");

$name = $_POST["nome"];
$type = $_POST["tipo"];

$sql = "INSERT INTO itens (nome, tipo)
VALUES ('$name', '$type')";

if (mysqli_query($conn, $sql)) {
    header("location: ../cadastro-itens.php");
} else {
    echo "Erro!!!" . mysqli_connect_error($conn);
}
mysqli_close($conn);
