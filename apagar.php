<?php
include("conexao.php");
	$id = $_POST['id'];
	$sql = "DELETE FROM viatura WHERE codigo=$id";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo true;
	}else{
		echo false;
	}
	$conn->close();
