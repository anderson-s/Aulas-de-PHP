<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="GET" action="salvar.php">
	Nome: <input type="text" name="nome" required="required"><br>
	<input type="submit" value="Salvar">
</form>

<?php 
$sql = "SELECT * from doido order by pes_nome";
$resultado = mysqli_query($conexao , $sql);
	while ($linha = $resultado->fetch_assoc()) {
		echo $linha['pes_id']."-".$linha;
	
	}
 ?>

</body>
</html>

