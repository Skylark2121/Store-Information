<?php
session_start();
include 'connection.php';

if(isset($_POST['useredit'])){
$id = $_POST['id'];
$idnumber = $_POST['idnumber'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$course = $_POST['course'];
$year = $_POST['year'];
$section = $_POST['section'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$status = $_POST['status'];

$query = "UPDATE `users` SET 
	`idnumber`='$idnumber',
	`firstname`='$firstname',
	`middlename`='$middlename',
	`lastname`='$lastname',
	`contact`='$contact',
	`email`='$email',
	`course`='$course',
	`year`='$year',
	`section`='$section',
	`username`='$username',
	`password`='$password',
	`role`='$role',
	`status`='$status' 
	WHERE `id`='$id' "; 
	$result = mysqli_query($con,$query);

  if($result){
	?>
	<script>
		alert("Success to update");
		window.location.href = 'admin/record.php';
	</script>
	<?php
}	else{
	?>
	<script>
		alert("failed to update");
		window.location.href = 'admin/record.php';
	</script>
<?php
}
}
?>