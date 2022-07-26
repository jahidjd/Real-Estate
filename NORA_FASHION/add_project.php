<?php
$category_id = $_POST['category_title'];
$details = $_POST['details'];
$photo = $_FILES['photo'];
$status = $_POST['status'];
$title= $_POST['p_title'];
$p_ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$p_name = rand() . '.' . $p_ext;
move_uploaded_file($photo['tmp_name'], 'photo/' . $p_name);
$conn=new mysqli('localhost','root','','nora');

 $conn->query("INSERT INTO `projects` (`id`, `category_id`, `title`, `photo`, `details`, `status`) VALUES (NULL, '$category_id', '$title', '$p_name', '$details', '$status')");
 header('Location: project_list.php');

?>