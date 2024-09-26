<?php 
$conexion = new mysqli('localhost', 'root', '291866Rc', 'northwind');

if (isset($_POST['query'])) {
    $search = $conexion->real_escape_string($_POST['query']);
    $sql = "SELECT * FROM customer WHERE companyName LIKE '%$search%'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo '<table border="1">
                <tr>
                    <th>Company Name</th>
                    <th>Contact Name</th>
                </tr>';
        
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['companyName'] . '</td>
                    <td>' . $row['contactName'] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo '<p>No se encontraron resultados</p>';
    }
}

