<?php
include("PHP/conexao.php");
if ($_POST) {

    $id_item = $_POST['ID'];
    $id_pessoa = $_POST['UID'];
    $dataEmprestimo = $_POST['dataEmprestimo'];
    $dataDevolucao = $_POST['dataDevolucao'];
    $avaiable = 1;

    $sql = "INSERT INTO emprestimos (ID, UID, dataEmprestimo, dataDevolucao, avaiable)
            VALUES ('$id_pessoa', '$id_item', '$dataEmprestimo', '$dataDevolucao', '$avaiable')";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: principal.php");
    } else {
        echo "<b>Erro</b>";
    }
}
