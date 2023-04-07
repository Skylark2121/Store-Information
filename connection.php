<?php 

	$host="localhost";
	$username="root";
	$password="";
	$database="kenbaduel";
	//create connection
	$con = mysqli_connect($host,$username,$password,$database);
	//mysqli_connect - open new connection to mysql server

	//check connection
	//mysqli_connect_errono() = return the connection error

	if(mysqli_connect_errno()){
		echo "failed to connect to database".
			mysqli_connect_errono();
	}
	

 ?>