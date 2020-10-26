<?php
	include('../admin_session.php');
    include('../conn.php');
	
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
    $password=$_POST['password'];
	
	$use=mysqli_query($conn,"select * from user where userid='id'");
	$urow=mysqli_fetch_array($use);
	
	if ($password==$urow['password']){
		$pass=$password;
	}
	else{
		$pass=md5($password);
	}

	mysqli_query($conn,"update user set username='$username',password='$password' where userid='$id'");
	mysqli_query($conn,"update staff set company_name='$name', company_address='$address', contact='$contact' where userid='$id'");
	
	?>
		<script>
			window.alert('Staff updated successfully!');
			window.history.back();
		</script>
	<?php

?>