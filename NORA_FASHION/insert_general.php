<?php
$id = $_POST['id'];
$logo = $_FILES['logo'];
$p_ext = pathinfo(basename('photo/' . $logo['name']), PATHINFO_EXTENSION);
$logo_name = rand() . '.' . $p_ext;
move_uploaded_file($logo['tmp_name'], 'photo/' . $logo_name);
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$footer_text = $_POST['footer_text'];
$about_text = $_POST['about_text'];
$about_photo = $_FILES['about_photo'];
$p_ext = pathinfo(basename('photo/' . $about_photo['name']), PATHINFO_EXTENSION);
$about_photo_name = rand() . '.' . $p_ext;
move_uploaded_file($about_photo['tmp_name'], 'photo/' . $about_photo_name);
$service_photo = $_FILES['service_photo'];
$p_ext = pathinfo(basename('photo/' . $service_photo['name']), PATHINFO_EXTENSION);
$service_photo_name = rand() . '.' . $p_ext;
move_uploaded_file($service_photo['tmp_name'], 'photo/' . $service_photo_name);
$map = $_POST['map'];
$logo_text = $_POST['logo_text'];
$conn = new mysqli('localhost', 'root', '', 'nora');
$query = "INSERT INTO `general` (`id`, `logo`,`logo_text`, `phone`, `email`, `footer_text`, `address`, `map`, `about_text`, `about_photo`, `service_photo`) VALUES ($id, '$logo_name','$logo_text', '$phone', '$email', '$footer_text', '$address', '$map', '$about_text', '$about_photo_name', '$service_photo_name')";
$conn->query($query);
header('Location: general_table.php');
