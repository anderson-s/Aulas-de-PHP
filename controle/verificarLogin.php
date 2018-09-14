<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

if($usuario == "admin" && $senha == "123456"){
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header("Location: ../aluno/index.php" );  
}else{
    header("Location: ../index.php");
}

?>