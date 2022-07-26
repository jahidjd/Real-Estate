<?php
$project_id = $_POST['project_id'];
$photo = $_FILES['p_photo'];
$ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$photo_name = rand() . '.' . $ext;

move_uploaded_file($photo['tmp_name'], 'photo/' . $photo_name);
if ($project_id != '' && $photo_name != '') {
    $conn = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("INSERT INTO project_photo(project_id,photo)VALUES($project_id,'$photo_name')");
    header('Location: project_photo.php');
} else {
    header('Location: project_photo.php');
}
