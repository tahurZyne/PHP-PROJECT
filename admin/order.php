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
            <h1 class="page-header">Orders
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addorder"><i class="fa fa-plus-circle"></i> Make Orders</button>
				</span>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
                <thead>
                    <tr>
                        
                        <th>Product Name</th>
						<th>Staff Name</th>
						<th>Quantity</th>
						<th>Order date</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$orq=mysqli_query($conn,"select * from `order`,product,staff where product.productid=order.productid and staff.userid=order.userid");
                    
					while($orqrow=mysqli_fetch_array($orq)){
					?>
						<tr>
                            <td><?php echo $orqrow['product_name']; ?></td>
							<td><?php echo $orqrow['company_name']; ?></td>
                            <td><?php echo $orqrow['quantity']; ?></td>
                            <td><?php echo $orqrow['date']; ?></td>
                            <td>
                                <?php
                        if($orqrow['order_status']==0){?>
								<button class="btn btn-warning btn-sm"  > not confirmed </button>
                                <?php
                                }
                                elseif($orqrow['order_status']==1){
                                ?>
                                <button class="btn btn-success btn-sm" >confirmed </button>
                                <?php
                                }
                                ?>
								
                            </td>
							<td> 
				
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editorder_<?php echo $orqrow['orderid'] ?>"><i class="fa fa-edit"></i> Edit</button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delorder_<?php echo $orqrow['orderid']; ?>"><i class="fa fa-trash"></i> Delete</button>
								<?php include('order_button.php'); ?>
							</td>
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