<?php
$name = $_POST['name'];
$deprt = $_POST['deprt'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$skill = $_POST['skill'];
$email = $_POST['email'];
$exp = $_POST['exp'];
$history = $_POST['history'];
$id = $_POST['id'];
$photo = $_FILES['photo'];
$p_ext = pathinfo(basename('photo/' . $photo['name']), PATHINFO_EXTENSION);
$p_name = rand() . '.' . $p_ext;
move_uploaded_file($photo['tmp_name'], 'photo/' . $p_name);

    $conn = new mysqli('localhost', 'root', '', 'nora');
    
 
    $conn->query("UPDATE `team` SET `name` = '$name', `age` = '$age', `contact` = '$contact', `email` = '$email', `skill` = '$skill', `history` = '$history' ,`photo` = '$p_name' WHERE `team`.`id` = $id");
    header('Location: team.php');
