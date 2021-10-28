<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ajax_motors";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	    die("A conexão falhou: " . mysqli_connect_error());
	}
?>