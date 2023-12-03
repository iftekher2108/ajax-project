<?php

include "./connection.php";


$id = $_POST['uid'];

$delete= "DELETE FROM user WHERE id = '$id' ";

$execute = mysqli_query($con,$delete);

// header("refresh:0; url=./index.html");



?>