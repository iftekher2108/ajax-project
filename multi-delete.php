<?php 

require './connection.php';
extract($_POST);
$id = $_POST['uid'];

$query = "DELETE FROM user WHERE id IN ($id)";

$ext= mysqli_query($con,$query);


?>