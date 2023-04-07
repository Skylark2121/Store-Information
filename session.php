<?php 
session_start();

if(isset($_POST['success'])){
	$_SESSION['success'] = "Successfully Added!";
	echo "<script>window.location.href='display.php'</script>";
}


if (isset($_POST['fail'])){
	$_SESSION['failed'] = "Failed to Add!";
	echo "<script>window.location.href='display.php'</script>";
}
?>