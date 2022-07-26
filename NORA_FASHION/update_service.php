<?php
$s_title = $_POST['s_title'];
$s_photo = $_FILES['s_photo'];
$s_icon = $_FILES['icon'];
$s_details = $_POST['s_details'];
$status = $_POST['status'];
$id = $_POST['id'];
$number = $_POST['number'];
$p_ext = pathinfo(basename('photo/' . $s_photo['name']), PATHINFO_EXTENSION);
$p_name = rand() . '.' . $p_ext;
move_uploaded_file($s_photo['tmp_name'], 'photo/' . $p_name);
$i_ext = pathinfo(basename('photo/' . $s_icon['name']), PATHINFO_EXTENSION);
$icon = rand() . '.' . $i_ext;
move_uploaded_file($s_icon['tmp_name'], 'photo/' . $icon);

    $conn = new mysqli('localhost', 'root', '', 'nora');
    $conn->query("UPDATE `service` SET `number`=$number,`title`='$s_title',`photo`='$p_name',`details`='$s_details',`status`='$status',service_icon='$icon' WHERE id=$id ");
    header('Location: service.php');
