<div class="modal fade" id="addCashAccountModal" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title text-center" id="myModalLabel">Add Cash Account</h4>
	      	</div>
	     	<div class="modal-body">
	     		<?php echo form_open('manager/storeCashAccount')?>
	        	<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label>Account Name</label>
						    <input type="text" class="form-control" name="cashAccountName" value="" required>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label>Previous Holding</label>
						    <input type="text" class="form-control" name="cashAccountBalance" value="" required>
						  </div>
					</div>				
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <label>Note</label>
						    <textarea type="text" class="form-control" name="cashAccountNote" required>
						    </textarea>
						  </div>
					</div>			
				</div>	
	      	</div>
	      	<div class="modal-footer">
		        <button type="submit" class="btn btn-warning"> Add </button>
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      	</div>
	    </div>
	    <?php form_close(); ?>
  	</div>

</div>