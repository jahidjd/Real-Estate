<?php
$category_id = $_POST['category_title'];
$details = $_POST['details'];
$photo = $_FILES['photo'];
$status = $_POST['status'];
$title= $_POST['p_title'];
$id= $_POST['id'];
$p_ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$p_name = rand() . '.' . $p_ext;
move_uploaded_file($photo['tmp_name'], 'photo/' . $p_name);
$conn=new mysqli('localhost','root','','nora');

 $conn->query("UPDATE `projects` SET `category_id` = '$category_id', `title` = '$title', `photo` = '$p_name', `details` = '$details', `status` = '$status' WHERE `projects`.`id` = $id");
 header('Location: project_list.php');

?>