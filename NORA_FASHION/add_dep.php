<?php
$name = $_POST['d_name'];
if ($name != '') {
    $conn = new mysqli('localhost', 'root', '', 'nora');
   
    $conn->query("INSERT INTO department(department_name)VALUES('$name')");
    header('Location: department.php');
 } else {
    header('Location: department.php');
 }
