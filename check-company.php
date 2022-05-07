<?php
session_start();
?>
<?php
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM company WHERE mail='{$_POST['mail']}' AND password ='{$_POST['password']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$stroka['id'];
		header('location: main.php');
	}
	else{
		header('location: go-company.php');
	}
?>