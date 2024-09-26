<?php
$conexion = new mysqli('localhost', 'root', 'witty', 'northwind');

$texto = $_POST['texto'];

if ($texto == "") {
    echo "Ingrese lo que desea buscar";
} else {
    $consulta = "SELECT * FROM Region WHERE regiondescription LIKE '%$texto%'";
    $result = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($fila = mysqli_fetch_array($result)) {
            echo "<li>" . $fila['regiondescription'] . " (ID: " . $fila['regionId'] . ")</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron resultados.";
    }
}
