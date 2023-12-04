<?php
 include "./connection.php";

 extract($_POST);

 $id = $_POST['uid'];
 $name = $_POST['uname'];
 $email = $_POST['uemail'];
 $password = $_POST['upassword'];

    $update = "UPDATE INTO user(name,email,password) VALUES ('$name','$email','$password') WHERE id = '$id'";

    $query = mysqli_query($con, $update);


?>