<?php
 include "./connection.php";

 extract($_POST);

 $name = $_POST['uname'];
 $email = $_POST['uemail'];
 $password = $_POST['upassword'];

    $insert = "INSERT INTO user(name,email,password) VALUES ('$name','$email','$password') ";

    $query = mysqli_query($con, $insert);



?>