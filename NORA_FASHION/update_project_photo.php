<?php
$project_id = $_POST['project_id'];
$photo = $_FILES['p_photo'];
$id = $_POST['id'];
$ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$photo_name = rand() . '.' . $ext;

move_uploaded_file($photo['tmp_name'], 'photo/' . $photo_name);

    $conn = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("UPDATE `project_photo` SET `project_id`='$project_id',`photo`='$photo_name' WHERE id=$id");
    header('Location: project_photo.php');
