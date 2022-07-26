<?php
$photo = $_FILES['photo'];
$title = $_POST['title'];
$brief = $_POST['brief'];
$status = $_POST['status'];
$action_url = $_POST['a_url'];
$p_ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$p_name = rand() . '.' . $p_ext;
move_uploaded_file($photo['tmp_name'], 'photo/' . $p_name);
if ($photo != '' && $p_name != '' && $title != '' && $status != '' && $brief != '') {
    $conn = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("INSERT INTO slider(photo,title,brief,status,action_url)VALUES('$p_name','$title','$brief','$status','$action_url')");
    header('Location: slider.php');
} else {
    header('Location: slider.php');
}
