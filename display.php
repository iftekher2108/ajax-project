<?php 

require './connection.php';

$query = "SELECT * FROM user";

$result = mysqli_query($con, $query);

$data = []; // Initialize an array to store the results

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row; // Append each row to the $data array
}

// Convert the $data array to JSON format
echo json_encode($data);

// mysqli_close($con); // Close the database connection

?>