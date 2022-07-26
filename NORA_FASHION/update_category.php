<?php
$c_name = $_POST['category'];
$name = $_POST['c_name'];
$short_details = $_POST['short_details'];
$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("UPDATE project_category SET title='$c_name', c_name='$name', short_details='$short_details' where id= " . $_POST['id']);
header('Location: category_list.php');
