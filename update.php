<?php
 include "./connection.php";

 $id = $_POST['uid'];
 $name = $_POST['uname'];
 $email = $_POST['uemail'];
 $password = $_POST['upassword'];

 print_r($id);
 print_r($name);
 print_r($email);
 print_r($password);

    $update = "UPDATE user SET name='$name',email='$email',password='$password' WHERE id = '$id'";

    $query = mysqli_query($con, $update);


?>