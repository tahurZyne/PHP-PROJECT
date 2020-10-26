<?php
	include('../admin_session.php');
    $id=$_GET['id'];
	$name=$_POST['product'];
	$supplier=$_POST['supplier'];
	$qty=$_POST['qty'];
   


	mysqli_query($conn,"UPDATE `order` SET userid = $supplier, productid =$name, quantity =$qty WHERE orderid=$id") or die(mysqli_errno($conn));

	
	
//	mysqli_query($conn,"insert into inventory (userid, action, productid, quantity, inventory_date) values ('".$_SESSION['id']."', 'Add Product', '$pid', '$qty', NOW())");

	
	?>
<script>
			window.alert('Order changed successfully!');
			window.history.back();
		</script>
		