<?php
session_start();
if ($_SESSION['usuario'] == null){
    header("Location: ../index.php");
} else {
    echo "Bem-Vindo".$_SESSION['usuario'];
}

?>
<a href ="../controle/sair.php"> SAIR </a>
