<?php
include('../admin_session.php');

$customer=$_POST["customer"];
echo $customer."<br>";
$product=$_POST["product"];
echo $product."<br>";
$qty=$_POST["qty"];
echo $qty."<br>";
$date=$_POST["date"];
echo $date."<br>";

mysqli_query($conn,"insert into sales (salesid, customerid,productid,product_total, sales_date) values ('', '$customer',$product, '$qty', '$date')");
	
?>
<script>
			window.alert('sales added successfully!');
			window.history.back();
		</script>
     <?php

?>