<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX MOTORS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100vw;
            background-color: white;
            overflow-x: hidden;
        }

        .wrapper {
            overflow-y: auto !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 10px;
        }
    </style>

</head>

<body>

    <div class="row w-100 m-0 px-0 py-2">
        <div class="col-12 col-sm-12 col-md-4 col-lg-3">
            <div class="mb-2 text-center text-muted"><span>NOVA VIATURA</span></div>

            <form method="post" id="form-viatura" class="mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <select id="marca-id" name="marca" id="id-select-marca" class="form-control form-control">

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Modelo</label>
                    <input type="text" name="modelo" id="id-modelo" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Matricula</label>
                    <input type="text" name="matricula" id="id-matricula" class="form-control" aria-describedby="emailHelp">
                </div>
                <button id="add-viatura" type="submit" class="btn w-100 btn-primary">+</button>
            </form>

            <form method="post" id="form-marca">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nova marca</label>
                    <input type="text" name="nomeMarca" id="valor" class="form-control" aria-describedby="emailHelp">
                </div>
                <button id="add-marca" type="submit" class="btn w-100 btn-primary">+</button>
            </form>
        </div>

        <div class="col-12 col-sm-12 col-md-8 col-lg-9 pr-0 h-100 w-100 wrapper">
            <form method="post" id="form-perquisa">
                <div class="form-group">
                    <input style="width: 300px;" type="search" placeholder="procure por modelo ou marca" class="form-control form-control-sm" aria-describedby="emailHelp">
                </div>
            </form>
            <div class="row h-100 w-100 m-0 p-0" id="car-list">

            </div>
        </div>

    </div>
    <script src="./lerViatura.js"></script>
    <script src="./lerMarca.js"></script>
    <script src="./apagar.js"></script>
    <script src="./criarViatura.js"></script>
    <script src="./criarMarca.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>