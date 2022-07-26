<?php

$conn=new mysqli('localhost','root','','nora');
$conn->query("DELETE FROM projects  where id= ".$_GET['id']);
header('Location: project_list.php');


?>