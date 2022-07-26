<?php
$photo = $_FILES['photo'];
$title = $_POST['title'];
$brief = $_POST['brief'];
$status = $_POST['status'];
$action_url = $_POST['a_url'];
$id = $_POST['id'];
$p_ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$p_name = rand() . '.' . $p_ext;
move_uploaded_file($photo['tmp_name'], 'photo/' . $p_name);

    $conn = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("UPDATE `slider` SET `photo`='$p_name',`title`='$title',`brief`='$brief',`status`='$status',`action_url`='$action_url' WHERE id=$id");
    header('Location: slider.php');

