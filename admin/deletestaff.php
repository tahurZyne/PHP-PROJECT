<?php
	include('../admin_session.php');

	$id=$_GET['id'];
	
	mysqli_query($conn,"delete from user where userid='$id'");
	mysqli_query($conn,"delete from staff where userid='$id'");
	
	header('location:staff.php');

?>