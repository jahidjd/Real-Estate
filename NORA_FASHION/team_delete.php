<?php

$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("DELETE FROM team where id=" . $_GET['id']);
header('Location: team.php');
