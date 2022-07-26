<?php

$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("DELETE FROM slider where id=" . $_GET['id']);
header('Location: slider.php');
