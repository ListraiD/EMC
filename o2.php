<?php 
session_start();

include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO o (title, text, compid) VALUES ('{$_POST['title']}', '{$_POST['text']}', '{$_SESSION['id']}')");
header('location: o.php');
?>