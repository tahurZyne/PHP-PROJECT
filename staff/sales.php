<?php 	include('../staff_session.php'); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
<div style="height:50px;"></div>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product Sales Report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
                <thead>
                    <tr>
						<th class="hidden"></th>
                        <th>Purchase Date</th>
                        <th>Customer</th>
						<th>Product Name</th>
						<th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
				<?php
                    $sq=mysqli_query($conn,"select * from product,sales,customer where product.productid=sales.productid and customer.customerid=sales.customerid");
                    
					while($sqrow=mysqli_fetch_array($sq)){
						
					?>
						<tr>
							<td class="hidden"></td>
							<td><?php echo date('M d, Y h:i A',strtotime($sqrow['sales_date'])); ?></td>
							<td><?php echo $sqrow['customer_name']; ?></td>
							<td><?php echo $sqrow['product_name']; ?></td>
							<td><?php echo $sqrow['product_total']; ?></td>
						</tr>
					<?php
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
</body>
</html>