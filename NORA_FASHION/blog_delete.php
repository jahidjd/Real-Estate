<?php

$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("DELETE FROM blog where id=" . $_GET['id']);
header('Location: blog_list.php');
