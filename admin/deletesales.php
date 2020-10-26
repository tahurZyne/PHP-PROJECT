<?php
	include('../admin_session.php');
	
	$id=$_GET['id'];

	mysqli_query($conn,"delete from sales where salesid='$id'");
	
	header('location:sales.php');

?>