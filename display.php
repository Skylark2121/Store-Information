<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.js">
	<title></title>
</head>
<body>
	
 <?php require 'session.php';?>



 	<?php if (isset($_SESSION['success'])){?>
 		<div class="container alert alert-success" role="alert">
 			<button onclick="window.location.href='display.php'"type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 			<?php echo $_SESSION['success']; session_unset();
 			session_destroy();}?>
 		</div>
 	
<?php if (isset($_SESSION['failed'])){?>
 		<div class="container alert alert-danger" role="alert">
 			<button onclick="window.location.href='display.php'"type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
 	<?php echo $_SESSION['failed']; session_unset();
 	session_destroy();} ?>

		</div>

<form action="session.php" method="POST">
	<input type="submit" name="success" value="Success" class="btn btn-success">
</form>

<br>
<form action="session.php" method="POST">
	<input type="submit" name="fail"
	value="failed" class="btn btn-danger">
</form>


</body>
</html>