<?php

include("PHP/conexao.php");

$id = $_GET['ID'];

$sql = "DELETE FROM itens WHERE ID = $id";

$res = mysqli_query($conn, $sql);

header("Location: itens.php");

?>