<?php
session_start();
if($_SESSION['status']){
$connection = new mysqli('localhost', 'root', '', 'project');
$p_name = $_POST['p_name'];
$price = $_POST['price'];
$p_id = $_POST['id'];
$c_id = $_POST['c_id'];
$q = "UPDATE `products` SET `category_id` = $c_id, `name` = '$p_name', `price` = $price WHERE `products`.`id` = $p_id";
$connection->query($q);
header('Location: product_list.php');
}else{
    header('Location: index.php');
}