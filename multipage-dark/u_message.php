<?php
$conn = new mysqli('localhost', 'root', '', 'nora');
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);


if ($name != '' && $email != '' && $message != '') {
    $conn->query("INSERT INTO user(name,email,message)VALUES('$name','$email','$message')");
    header('Location: contact.php');
} else {
    header('Location: contact.php');
}
