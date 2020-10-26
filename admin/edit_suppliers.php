<?php
	include('../admin_session.php');
    include('../conn.php');
	$id=$_GET['id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];

	mysqli_query($conn,"update suppliers set supplier_name='$name', supplier_address='$address', supplier_phone='$phone' where supplierid='$id'");
	$userid=mysqli_insert_id($conn);
	
	?>
		<script>
			window.alert('Supplier changed successfully!');
			window.history.back();
		</script>
	<?php
?>