<?php 
session_start();

include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO stat (title, text, author, compid) VALUES ('{$_POST['title']}', '{$_POST['text']}', '{$_POST['author']}', '{$_SESSION['id']}')");
header('location: statk.php');
?>