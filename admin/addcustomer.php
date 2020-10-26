<?php
	include('../admin_session.php');
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	

	
	mysqli_query($conn,"insert into customer (customerid, customer_name, address, contact) values ('', '$name', '$address', '$contact')");
	
	?>
		<script>
			window.alert('Customer added successfully!');
			window.history.back();
		</script>
	<?php
?>