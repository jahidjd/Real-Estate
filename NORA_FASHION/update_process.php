<?php
$id = $_POST['id'];
$name = $_POST['p_name'];
$number = $_POST['number'];
$icon = $_POST['icon'];
$arrow = $_FILES['arrow'];
$details = $_POST['details'];

$a_ext = pathinfo(basename('photo/' . $arrow['name']), PATHINFO_EXTENSION);
$arrow_name = rand() . '.' . $a_ext;
move_uploaded_file($arrow['tmp_name'], 'photo/' . $arrow_name);
$conn = new mysqli('localhost', 'root', '', 'nora');

$conn->query("UPDATE process SET p_name='$name', details='$details',number=$number,icon='$icon',arrow='$arrow_name' WHERE id=$id");
header('Location: process.php');
