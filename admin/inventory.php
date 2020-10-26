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
            <h1 class="page-header">Inventory Report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="invTable">
                <thead>
                    <tr>
						<th class="hidden"></th>
                        <th>Date</th>
						<th>User</th>
                        <th>Action</th>
						<th>Product Name</th>
						<th>Quantity</th>
                        
                    </tr>
                </thead>
                <tbody>
				<?php
					$iq=mysqli_query($conn,"select * from inventory,product,user where product.productid=inventory.productid and inventory.userid=user.userid order by inventory_date desc");
					while($iqrow=mysqli_fetch_array($iq)){
					?>
						<tr>
							<td class="hidden"></td>
							<td><?php echo date('M d, Y h:i A',strtotime($iqrow['inventory_date'])); ?></td>
							<td>
							<?php 
								
								if($iqrow['access']==1){
									echo "Admin";
								}
								else{
                                    $u=mysqli_query($conn,"select * from  staff where userid='".$iqrow['userid']."'");
								$urow=mysqli_fetch_array($u);
									echo $urow['company_name'];
								}
                    
							?>
							</td>
							<td align="right"><?php echo $iqrow['action']; ?></td>
							<td align="right"><?php echo $iqrow['product_name']; ?></td>
							<td align="right"><?php echo $iqrow['quantity']; ?></td>
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