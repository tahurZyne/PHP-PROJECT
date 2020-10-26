<?php
	include('../admin_session.php');
	$name=$_POST['product'];
	$userid=$_POST['supplier'];
	$qty=$_POST['qty'];
    $date=$_POST['date'];


	mysqli_query($conn,"INSERT INTO `order` (`orderid`, `userid`, `productid`, `quantity`, `date`,`order_status`) VALUES (NULL, '$userid', '$name', '$qty', '$date',0)") or die($conn->errno());

	
	
//	mysqli_query($conn,"insert into inventory (userid, action, productid, quantity, inventory_date) values ('".$_SESSION['id']."', 'Add Product', '$pid', '$qty', NOW())");
	
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
