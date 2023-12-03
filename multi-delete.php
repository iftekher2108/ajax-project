<?php 

require "./connection.php";


$id = $_POST['ids'];

$query = "DELETE FROM user WHERE id in($id)";

$query = mysqli_query($con, $query);




?>


