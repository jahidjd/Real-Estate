<?php
$name = $_POST['p_name'];
$number = $_POST['number'];
$icon = $_POST['icon'];
$arrow = $_FILES['arrow'];
$details = $_POST['details'];

$a_ext = pathinfo(basename('photo/' . $arrow['name']), PATHINFO_EXTENSION);
$arrow_name = rand() . '.' . $a_ext;
move_uploaded_file($arrow['tmp_name'], 'photo/' . $arrow_name);
$conn = new mysqli('localhost', 'root', '', 'nora');

$conn->query("INSERT INTO process VALUES(NULL,'$name','$details',$number,'$icon','$arrow_name')");
header('Location: process.php');
