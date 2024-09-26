<?php
$host = 'localhost';
$db = 'Northwind'; 
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['busqueda'])) {
    $busqueda = $conn->real_escape_string($_POST['busqueda']);
    
    $sql = "SELECT * FROM Territory WHERE territorydescription LIKE '%$busqueda%'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Salida de datos de cada fila
        while($row = $resultado->fetch_assoc()) {
            echo "<div>" . $row['territorydescription'] . "</div>";
        }
    } else {
        echo "No hay naaaa.";
    }
}

$conn->close();
?>
