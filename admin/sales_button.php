<!-- Delete Sales -->
    <div class="modal fade" id="del_<?php echo $saqrow['salesid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete sales</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from sales where salesid='".$saqrow['salesid']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Sales will be deleted</center></h5>
					<form role="form" method="POST" action="deletesales.php<?php echo '?id='.$saqrow['salesid']; ?>">
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

<!-- Edit Sales -->
    <div class="modal fade" id="edit_<?php echo $saqrow['salesid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Sales</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					
					<div style="height:10px;"></div>
                   
                    <form role="form" method="POST" action="edit_sales.php?id=<?php echo $saqrow['salesid']; ?>" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
                            
                            <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">customer:</span>
                            <select style="width:400px;" class="form-control" name="customer">
                                <option value="<?php echo $saqrow['customerid']; ?>"><?php echo $saqrow['customer_name']; ?></option>
								<?php
									$cus=mysqli_query($conn,"select * from customer");
									while($cusrow=mysqli_fetch_array($cus)){
										?>
											<option value="<?php echo $cusrow['customerid']; ?>"><?php echo $cusrow['customer_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
                           <br/><br/> 
 
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Product:</span>
                            <select style="width:400px;" class="form-control" name="product">
								<?php
									$pro=mysqli_query($conn,"select * from product");
									while($prorow=mysqli_fetch_array($pro)){
										?>
											<option value="<?php echo $prorow['productid']; ?>"><?php echo $prorow['product_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<br/><br/>
						
						

						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Quantity:</span>
                            <input type="number" style="width:400px;" class="form-control" name="qty" value="<?php echo $saqrow["sales_total"];?>">
                        </div>
                            <br/><br/>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">date:</span>
                            <input type="date" style="width:400px;" class="form-control" name="date" value="<?php echo date("m/d/Y", strtotime($saqrow["sales_date"]));?>">
                        </div> 
                            <br/><br/>
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