<?php
$photo = $_FILES['blog_photo'];
$ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$photo_name = rand() . '.' . $ext;

move_uploaded_file($photo['tmp_name'], 'photo/' . $photo_name);
$blog_category = $_POST['b_category_id'];
$blog_details = $_POST['blog_details'];
$date = $_POST['date'];
$id = $_POST['id'];



    $conn  = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("UPDATE `blog` SET `blog_category_id`='$blog_category',`blog_details`='$blog_details',`blog_photo`='$photo_name',`date`='$date' WHERE id=$id ");
    header('Location: blog_list.php');

