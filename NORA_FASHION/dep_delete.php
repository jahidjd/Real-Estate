<?php

$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("DELETE FROM department where id=" . $_GET['id']);
header('Location: department.php');
