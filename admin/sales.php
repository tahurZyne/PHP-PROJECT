<?php include('../admin_session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sales
            <span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addsales"><i class="fa fa-plus-circle"></i> Add Sales</button>
				</span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="salesTable">
                <thead>
                    <tr>
						
                        <th>Sales Date</th>
						<th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Product total</th>
                        <th>Total Price</th>
						<th>Action</th>
                    </tr>
                </thead>
                 <tbody>
				<?php
					$saq=mysqli_query($conn,"select * from sales,product,customer where product.productid=sales.productid and customer.customerid=sales.customerid");
					while($saqrow=mysqli_fetch_array($saq)){
                        $total= $saqrow['product_total']*$saqrow['product_price'];
					?>
						<tr>
							<td><?php echo $saqrow['sales_date']; ?></td>
							<td><?php echo $saqrow['customer_name']; ?></td>
                            <td><?php echo $saqrow['product_name']; ?></td>
                             <td><?php echo $saqrow['product_price']; ?></td>
                             <td><?php echo $saqrow['product_total']; ?></td>
							<td><?php echo $total ?></td>
							<td> 
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_<?php echo $saqrow['salesid']; ?>"><i class="fa fa-edit"></i> Edit</button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del_<?php echo $saqrow['salesid']; ?>"><i class="fa fa-trash"></i> Delete</button>
								<?php include('sales_button.php'); ?>
							</td>
						</tr>
					<?php
					}
				?>
                </tbody>
               
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
</body>
</html>