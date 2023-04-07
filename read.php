<?php

	require 'connection.php';

	if (isset($_POST['usersearch'])) {
		$uservaluesearch = $_POST['uservaluesearch'];

	$user_query = "SELECT * FROM `users` where CONCAT(`firstname`,`lastname`) like '%".$uservaluesearch."%'";
	$user_result = mysqli_query($con,$user_query);

	}else{

	$user_query = "SELECT * FROM `users`";
	$user_result = mysqli_query($con,$user_query);
//mysqli_query() - 

	//print_r($user_result);
}
?>