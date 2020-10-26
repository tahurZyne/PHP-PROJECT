<?php
	include('../admin_session.php');
	
	$id=$_GET['id'];
	
	//mysqli_query($conn,"delete from user where userid='$id'");
	mysqli_query($conn,"delete from customer where customerid='$id'");
	
	header('location:customer.php');

?>