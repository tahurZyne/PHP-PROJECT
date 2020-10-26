<!-- Delete Sales -->
    <div class="modal fade" id="delorder_<?php echo $orqrow['orderid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete sales</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					
                    <h5><center>order will be deleted</center></h5>
					<form role="form" method="POST" action="deleteorder.php<?php echo '?id='.$orqrow['orderid']; ?>">
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

<!-- Edit Order -->
    <div class="modal fade" id="editorder_<?php echo $orqrow['orderid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Sales</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					
					<div style="height:10px;"></div>
                   
                    <form role="form" method="POST" action="edit_order.php<?php echo '?id='.$orqrow['orderid']; ?>" enctype="multipart/form-data">
                        
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Product name:</span>
                            <select style="width:400px;" class="form-control" name="product">
								<?php
									$sup=mysqli_query($conn,"select * from product");
									while($suprow=mysqli_fetch_array($sup)){
										?>
											<option value="<?php echo $orqrow['productid']; ?>"><?php echo $suprow['product_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Supplier:</span>
                            <select style="width:400px;" class="form-control" name="supplier">
								<?php
									$sup=mysqli_query($conn,"select * from staff");
									while($suprow=mysqli_fetch_array($sup)){
										?>
											<option value="<?php echo $orqrow['userid']; ?>"><?php echo $suprow['company_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
                       
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Quantity:</span>
                            <input type="text" style="width:400px;" class="form-control" name="qty" value="<?php echo $orqrow['quantity']; ?>">
                        </div>
						       
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
        </div>
    </div>
<!-- /.modal -->