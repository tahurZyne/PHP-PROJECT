<?php
	include('../admin_session.php');
	
	$id=$_GET['id'];
	
	mysqli_query($conn,"delete from suppliers where supplierid='$id'");
	
	header('location:suppliers.php');

?>