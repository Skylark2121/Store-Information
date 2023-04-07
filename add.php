<?php 

session_start();
if (isset($_POST['useradd'])) {
	// code...

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

$user_query = "INSERT INTO `users`(`idnumber`, `firstname`, `middlename`, `lastname`, `contact`, `email`, `course`, `year`, `section`, `username`, `password`, `role`, `status`) VALUES ('$idnumber','$firstname','$middlename','$lastname','$contact','$email','$course','$year','$section','$username','$password','$role','$status')";

include 'connection.php';

$user_result = mysqli_query($con,$user_query);

if($user_result){
	?>
	<script>
		alert("Success to added");
		window.location.href = 'admin/record.php';
	</script>
	<?php
}	else{
	?>
	<script>
		alert("failed to add");
		window.location.href = 'admin/addrecords.php';
	</script>
<?php
}
}
?>