<?php

require './connection.php';

// $id =$_POST['uid'];

$query = "SELECT * FROM user WHERE id = '183' ";

$ext = mysqli_query($con,$query);

$data = []; // Initialize an array to store the results

while ($row = mysqli_fetch_assoc($ext)) {
    $data[] = $row; // Append each row to the $data array
}

print_r(json_encode($data));

?>