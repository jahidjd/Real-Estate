<?php
$name = $_POST['d_name'];
$id = $_POST['id'];

    $conn = new mysqli('localhost', 'root', '', 'nora');
    
    $conn->query("UPDATE `department` SET `department_name`='$name' WHERE id=$id");
    header('Location: department.php');

    
