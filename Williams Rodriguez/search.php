<?php
$host = 'localhost';
$db = 'northwind';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

$search = isset($_POST['value']) ? $_POST['value'] : '';

$sql = "SELECT * FROM product WHERE productName LIKE '%" . strtoupper($search) . "%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['productId']}</td>
                <td>{$row['productName']}</td>
                <td>\${$row['unitPrice']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
}
?>
