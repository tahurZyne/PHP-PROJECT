<?php
	session_start();
	
	if (!isset($_SESSION['staffid'])) {
	header('location:../index.php');
    exit();
	}
	
	include('conn.php');

	$sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['staffid']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['username'];
?>