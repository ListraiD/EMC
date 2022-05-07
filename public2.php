<?php 
session_start();
$image_dir="img/";
$image_name=$image_dir . basename($_FILES['file']['name']);
$upload=move_uploaded_file($_FILES['file']['tmp_name'], $image_name);
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO news (title, text, img, data, compid) VALUES ('{$_POST['title']}', '{$_POST['text']}', '{$image_name}', '{$_POST['data']}', '{$_SESSION['id']}')");
header('location: public.php');
?>