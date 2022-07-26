<?php

$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("DELETE FROM blog_category where id=" . $_GET['id']);
header('Location: slider.php');
