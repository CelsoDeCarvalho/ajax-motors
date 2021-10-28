<?php

include("conexao.php");

$carros="";
$sql = "select * from viatura";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $carros.='
      <div class="col-12 col-sm-12 col-md-4 col-lg-3 mb-2">
          <div class="card">
          <img src="./car.jpeg" class="card-img-top" alt="...">
             <div class="card-body">
                  <h5 class="card-title">'.$row['modelo'].'</h5>
                  <span class="card-title">'.$row['marca'].'</span><br/>
                  <span class="card-title">'.$row['matricula'].'</span><br/>

                  <button type="button" class="btn mt-4 btn-outline-warning btn-sm">editar</button>
                  <button type="button" class="btn mt-4 btn-outline-danger btn-sm">apagar</button>
             </div>
          </div>
      </div>
      ';
    }
}

$conn->close();
echo $carros;
