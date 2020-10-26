<!-- Delete Supplier -->
    <div class="modal fade" id="del_<?php echo $sqrow['supplierid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Supplier</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from suppliers where supplierid='".$sqrow['supplierid']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Company Name: <strong><?php echo ucwords($b['supplier_name']); ?></strong></center></h5>
					<form role="form" method="POST" action="deletesuppliers.php<?php echo '?id='.$sqrow['supplierid']; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Supplier -->
    <div class="modal fade" id="edit_<?php echo $sqrow['supplierid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Supplier</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_suppliers.php<?php echo '?id='.$sqrow['supplierid']; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">supplier:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['supplier_name']); ?>" class="form-control" name="name">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Address:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['supplier_address']); ?>" class="form-control" name="address">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Phone:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['supplier_phone'] ?>" class="form-control" name="phone">
                        </div>
						
						
						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
<!-- /.modal -->