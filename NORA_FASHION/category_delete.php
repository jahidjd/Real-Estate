<?php

$conn=new mysqli('localhost','root','','nora');
$conn->query("DELETE FROM project_category  where id= ".$_GET['id']);
header('Location: category_list.php');


?>