<?php
session_start();
if($_SESSION['status']){
$connection = new mysqli('localhost','root','','project');
$query = "DELETE FROM `product_category` WHERE id=".$_GET['id'];
$connection->query($query);
header('Location: index.php');

}else{
    header('Location: index.php');
}
?>