<?php
	include("conexao.php");

	$nome = $_POST['nomeMarca'];

	$sql = "insert into marca(nome) values('$nome')";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo true;
	}else{
		echo 'Erro ao cadastrar';
	}
	$conn->close();
?>