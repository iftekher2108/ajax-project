<?php 

require './connection.php';

extract($_POST);

$id = $_POST['uid'];

$ids = implode(',',$id);

$query = "DELETE FROM user WHERE id IN ($ids)"; 

$ext= mysqli_query($con ,$query);

// $ids = json_encode($id);
// echo $data[$ids];

?>