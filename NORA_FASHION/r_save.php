<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

$conn= new mysqli('localhost','root','','nora');
$conn->query("INSERT INTO admin_user VALUES(NULL,'$name','$email',$phone,'$address',$password )");
header('Location: index.php');

?>