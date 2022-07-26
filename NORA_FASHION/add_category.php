<?php
$c_name = $_POST['category'];
$name = $_POST['c_name'];
$short_details = $_POST['short_details'];
$conn = new mysqli('localhost', 'root', '', 'nora');
$conn->query("INSERT INTO project_category values(null,'$c_name','$name','$short_details')");
header('Location: category_list.php');
