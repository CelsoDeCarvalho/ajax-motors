<?php

include("conexao.php");

$dados="";
$sql = "select * from marca";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $dados.='<option value='.$row["nome"].'>'.$row["nome"].'</option>';
    }
}

$conn->close();
echo $dados;
?>
