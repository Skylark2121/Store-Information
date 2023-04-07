<?php
session_start();
	require 'connection.php';
	if(isset($_GET['userdelete'])) {
		
		$id = $_GET['id'];
		$del_query= "DELETE FROM `users` WHERE id = '$id'";
		$del_result = mysqli_query($con,$del_query);
	
}
?>

if($del_result){
	<script>
		alert("Success to delete record");
		window.location.href = 'admin/record.php';
	</script>
}	
else{

	<script>
		alert("failed to delete record");
		window.location.href = 'admin/addrecords.php';
	</script>
}
}
?>