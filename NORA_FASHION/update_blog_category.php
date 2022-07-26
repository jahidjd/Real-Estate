<?php
$name = $_POST['name'];
$blog_name = $_POST['blog_name'];
$id = $_POST['id'];

    $conn = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("UPDATE blog_category SET blog_category='$name', category_name='$blog_name' WHERE id=$id ");
    header('Location: blog_category.php');
