<?php
$id = $_GET['id'];
$conn = new mysqli('localhost', 'root', '', 'nora');

$conn->query("DELETE FROM process WHERE id=$id");
header('Location: process.php');
