<?php include('../staff_session.php'); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
<div style="height:50px;"></div>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Order Information
				
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
                <thead>
                    <tr>
                        
                        <th>Product Name</th>
						<th>Company Name</th>
						<th>Quantity</th>
						<th>Order date</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = $_SESSION['staffid'];
					$orq=mysqli_query($conn,"SELECT * FROM product JOIN `order` on product.productid=`order`.productid left join staff on staff.userid=`order`.userid WHERE staff.userid=$id");
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
								<button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#confirm_<?php echo $orqrow['orderid'];?>">confirm order </button>
                                <?php
                                }
                                elseif($orqrow['order_status']==1){
                                ?>
                                <button class="btn btn-success btn-sm" >confirmed </button>
                                <?php
                                }
                                ?>
								
								<?php include('order_button.php'); ?>
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
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
</body>
</html>