<?php
$name = $_POST['name'];
$deprt = $_POST['deprt'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$skill = $_POST['skill'];
$email = $_POST['email'];
$exp = $_POST['exp'];
$history = $_POST['history'];
$photo = $_FILES['photo'];
$p_ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$p_name = rand() . '.' . $p_ext;
move_uploaded_file($photo['tmp_name'], 'photo/' . $p_name);
if ($name != '' && $deprt != '') {
    $conn = new mysqli('localhost', 'root', '', 'nora');
 
    $conn->query("INSERT INTO `team`(`id`, `department_id`, `name`, `age`, `contact`, `email`, `skill`, `experience`, `history`, `photo`) VALUES (NULL,'$deprt','$name',$age,'$contact','$email','$skill','$exp','$history','$p_name')");
    header('Location: team.php');
} else {
    header('Location: team.php');
}
