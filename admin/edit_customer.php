<?php
	include('../admin_session.php');
	
	$id=$_GET['id'];
	echo $id;
//	$username=$_POST['username'];
//	$password=$_POST['password'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
echo $name;
	
//	$use=mysqli_query($conn,"select * from user where userid='id'");
//	$urow=mysqli_fetch_array($use);
//	
//	if ($password==$urow['password']){
//		$pass=$password;
//	}
//	else{
//		$pass=md5($password);
//	}
//
//	mysqli_query($conn,"update user set username='$username', password='$pass' where userid='$id'");
	mysqli_query($conn,"update customer set customer_name='$name', address='$address' where customerid='$id'");
	
	?>
		<script>
			window.alert('Customer updated successfully!');
			window.history.back();
		</script>
	<?php

?>