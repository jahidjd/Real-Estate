<?php
$conn=new mysqli('localhost','root','','nora');
$conn->query("DELETE FROM general WHERE ID=".$_GET['id']);
header('Location: general_table.php');





?>