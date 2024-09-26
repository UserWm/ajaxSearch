<?php 
$conexion = new mysqli('localhost', 'root', '291866Rc', 'northwind');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Clientes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="buscar.js"></script>
</head>
<body>
    <h1>Búsqueda de Clientes</h1>
    <input type="text" id="search" placeholder="Buscar cliente por nombre de empresa..." autocomplete="off">
    <div id="results"></div>
</body>
</html>
