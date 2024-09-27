<?php
$conexion= new mysqli('localhost', 'root', '1234', 'db_elecciones');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Inicio</title>
</head>
<body> 
    <h1>Buscador Dinámico</h1>
    <input type="text" id="search" placeholder="Buscar..." />
    <div id="results"></div>
   
     <div id="dato">
      
    </div>
    <script src="evaluacion.js"></script>
</body>
</html>
