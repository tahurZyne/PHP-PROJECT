<?php
	include('../admin_session.php');
	
	$id=$_GET['id'];
	
	$customer=$_POST['customer'];
	$product=$_POST['product'];
	$quantity=$_POST['qty'];
	$date=$_POST['date'];

	mysqli_query($conn,"update sales set customerid='$customer', productid='$product', product_total='$quantity',sales_date='$date' where salesid='$id'");
	
	?>
		<script>
			window.alert('Sales updated successfully!');
			window.history.back();
		</script>
	<?php

?>