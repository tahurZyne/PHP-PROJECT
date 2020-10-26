<?php
	include('../admin_session.php');
	
	$id=$_GET['id'];

	mysqli_query($conn,"delete from `order` where orderid='$id'");
	
	header('location:order.php');

?>