<?php
$conn = new mysqli('localhost', 'root', '', 'northwind');

$query = "";
$search = isset($_POST['search']) ? $_POST['search'] : "";

if (!empty($search)){
    $query =  "SELECT employeeId, firstname, lastname, title, address, city FROM Employee WHERE 
    employeeId LIKE '%$search%' OR  CONCAT(firstname, ' ', lastname) LIKE '%$search%' 
    OR title LIKE '%$search%' OR
    address LIKE '%$search%' OR city LIKE '%$search%'";
} else {
    $query = "SELECT employeeId, firstname, lastname, title, address, city FROM Employee";
}

$result = mysqli_query($conn, $query);

$html = "";
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $html.= "<tr>";
        $html.= "<td>".$row["employeeId"]."</td>";
        $html.= "<td>".$row["firstname"]."</td>";
        $html.= "<td>".$row["lastname"]."</td>";
        $html.= "<td>".$row["title"]."</td>";
        $html.= "<td>".$row["address"]."</td>";
        $html.= "<td>".$row["city"]."</td>";
        $html.= "</tr>";
    }

} else {
    $html.= "<tr><td colspan='4'>No results found</td></tr>";
}

echo json_encode($html);

?>