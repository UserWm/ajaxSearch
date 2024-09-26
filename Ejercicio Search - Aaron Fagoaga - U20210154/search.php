<?php
$conn = new mysqli('localhost', 'root', '1234', 'northwind');

if (isset($_POST['query'])) {
    $searchTerm = $_POST['query'];

    $sql = "SELECT categoryId, categoryName, description FROM Category WHERE categoryName LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%" . $searchTerm . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['categoryId'] . "</td>";
            echo "<td>" . $row['categoryName'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "Sin datos";
    }

    $stmt->close();
}

$conn->close();
?>
