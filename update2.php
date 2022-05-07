<?php
session_start()
?>
<?php
	$image_dir="img/";
	$image_name=$image_dir . basename($_FILES['file']['name']);
	$upload=move_uploaded_file($_FILES['file']['tmp_name'], $image_name);
	include "connect.php";
	if ($upload==false) {
		header('location: update.php');
	}else{
		
        $update=mysqli_query($con, "UPDATE company SET name = '{$_POST['name']}', mail='{$_POST['mail']}', inn='{$_POST['inn']}', text='{$_POST['text']}', link='{$_POST['link']}', adress='{$_POST['adress']}', img='{$image_name}' WHERE id='{$_SESSION['id']}'");
		header('location: lkk.php');
	}
		
 
?>