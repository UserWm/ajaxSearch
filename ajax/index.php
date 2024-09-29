<?php
$conexion = new mysqli('localhost', 'root', '', 'northwind');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Buscador</title>
</head>

<body>
    <input type="text" id="buscador" placeholder="Escriba algo" onkeyup="buscar()">
    <br><br>
    <div id="resultado">

    </div>
</body>

</html>
<script src="buscador.js"></script>