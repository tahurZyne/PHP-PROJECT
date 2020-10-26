<!-- confirm order -->
    <div class="modal fade" id="confirm_<?php echo $orqrow['orderid'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Confirm Order</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				
                    <h5><center>Are you sure you want to confirm? <strong></strong></center></h5>
					<form role="form" method="POST" action="confirmorder.php<?php echo '?id='.$orqrow['orderid']; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-trash"></i> Confirm</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->