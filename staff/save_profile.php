<?php
	include('../staff_session.php');
	$uid=$_GET['id'];

	$name= $_POST['cname'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	
	mysqli_query($conn,"update staff set company_name='$name', company_address='$address', contact='$contact' where userid='$uid'");
	
	?>
		<script>
			window.alert('Profile updated successfully!');
			window.history.back();
		</script>
	<?php
	
?>