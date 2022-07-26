<?php
$name = $_POST['name'];
$blog_name = $_POST['blog_name'];
if ($name != '') {
    $conn = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("INSERT INTO blog_category(blog_category,category_name)VALUES('$name','$blog_name')");
    header('Location: blog_category.php');
} else {
    header('Location: blog_category.php');
}
