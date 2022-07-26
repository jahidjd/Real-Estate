<?php
$photo = $_FILES['blog_photo'];
$ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$photo_name = rand() . '.' . $ext;

move_uploaded_file($photo['tmp_name'], 'photo/' . $photo_name);
$blog_category = $_POST['b_category_id'];
$blog_details = $_POST['blog_details'];
$date = $_POST['date'];


if ($photo != '' && $blog_details != '' && $blog_category != '' && $date != '') {
    $conn  = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("INSERT INTO blog(blog_category_id,blog_details,blog_photo,date)VALUES($blog_category,'$blog_details','$photo_name','$date')");
    header('Location: blog_list.php');
} else {
    header('Location: blog_list.php');
}
