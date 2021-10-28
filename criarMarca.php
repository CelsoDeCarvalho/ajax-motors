<?php
	include("conexao.php");

	$nome = $_POST['nome'];

	$sql = "insert into marca(nome) values($nome)";
	$result = mysqli_query($conn, $sql);

	// Valida se as informações foram enviadas com sucesso
	if($result){
		echo true;
	}else{
		echo 'Erro ao cadastrar';
	}
?>