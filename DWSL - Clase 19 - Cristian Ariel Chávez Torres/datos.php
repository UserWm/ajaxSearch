<?php
$conexion = new mysqli('localhost', 'root', '123123', 'northwind');

$busqueda = $_POST['busqueda'];

if (!empty($busqueda)) {
    $consulta = "SELECT ProductId, productName FROM product WHERE productName LIKE '%$busqueda%'";
    $resultados = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultados) > 0) {
        echo "<ul>";
        while ($fila = mysqli_fetch_assoc($resultados)) {
            echo "<li>Producto: " . $fila['productName'] . " (ID: " . $fila['ProductId'] . ")</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron productos.";
    }
}
?>
