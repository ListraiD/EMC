<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO company (name, mail, inn, password, text, link) VALUES ('{$_POST['name']}', '{$_POST['mail']}', '{$_POST['inn']}', '{$_POST['password']}', '{$_POST['text']}', '{$_POST['link']}')");
header('location: check-company.php');
?>