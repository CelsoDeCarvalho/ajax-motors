<?php
	include("conexao.php");

	$marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $matricula = $_POST['matricula'];

	$sql = "insert into viatura(marca,modelo,matricula) values('$marca','$modelo','$matricula')";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo true;
	}else{
		echo 'Erro ao cadastrar';
	}
	$conn->close();
?>