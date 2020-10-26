<?php
	include('../admin_session.php');
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	
	mysqli_query($conn,"insert into suppliers (supplier_name, supplier_address, supplier_phone,supplier_status) values ('$name', '$address', '$phone','active')");
	$userid=mysqli_insert_id($conn);
	
	?>
		<script>
			window.alert('Supplier added successfully!');
			window.history.back();
		</script>
	<?php
?>