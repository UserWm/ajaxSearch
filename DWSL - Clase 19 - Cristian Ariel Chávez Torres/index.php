<?php
$conexion = new mysqli('localhost', 'root', '123123', 'northwind');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Buscar Productos</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Buscar Producto</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <input type="text" id="busqueda" class="form-control mb-3" placeholder="Escriba nombre del producto">

                <div id="resultados" class="list-group"></div>
            </div>
        </div>
    </div>

    <script src="evaluacion.js"></script>
</body>
</html>
