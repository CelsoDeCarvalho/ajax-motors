<?php
	include("conexao.php");

	// Cria as variáveis com os posts enviados
	$id=$_GET['codigo'];

	$sql = "delete from viaturas where id = $id";
	$result = mysqli_query($conn, $sql);

	// Valida o sql foi executado com sucesso
	if($result){
		echo true;
	}else{
		echo false;
	}
?>