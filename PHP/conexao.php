<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "usuarios";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if ($conn->connect_error){
    echo "Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
