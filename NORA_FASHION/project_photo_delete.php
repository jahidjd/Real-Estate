<?php
$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("DELETE FROM project_photo where id=" . $_GET['id']);
header('Location: project_photo.php');
