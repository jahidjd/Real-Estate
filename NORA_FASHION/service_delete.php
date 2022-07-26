<?php

$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("DELETE FROM service where id=" . $_GET['id']);
header('Location: service.php');
