<?php

$Servidor = "localhost";
$Usuario = "root";
$Senha = "";
$Banco = "doido";

$conexao = mysqli_connect($Servidor, $Usuario, $Senha, $Banco);

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO pessoas(pes_nome, pes_cpf) VALUES ('$nome', '$cpf')";

$executar = mysqli_query ($conexao, $sql);

header("location:confirmacao.php")

?>