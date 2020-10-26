<?php
	session_start();
	
	if (!isset($_SESSION['adminid'])) {
	header('location:../index.php');
    exit();
	}
	
	include('conn.php');

	$sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['adminid']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['username'];
?>