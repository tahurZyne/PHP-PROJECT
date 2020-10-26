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
            <h1 class="page-header">Suppliers
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addsuppliers"><i class="fa fa-plus-circle"></i> Add Supplier</button>
				</span>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="supTable">
                <thead>
                    <tr>
                        <th>Supplier Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$sq=mysqli_query($conn,"select * from suppliers ");
					while($sqrow=mysqli_fetch_array($sq)){
					?>
						<tr>
							<td><?php echo $sqrow['supplier_name']; ?></td>
							<td><?php echo $sqrow['supplier_phone']; ?></td>
							<td><?php echo $sqrow['supplier_address']; ?></td>
							
							<td>
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_<?php echo $sqrow['supplierid']; ?>"><i class="fa fa-edit"></i> Edit</button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del_<?php echo $sqrow['supplierid']; ?>"><i class="fa fa-trash"></i> Delete</button>
								<?php include('supplier_button.php'); ?>
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