<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Received-Paid Payment Form</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Received-Paid Payment Form</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Transaction ID</label>
							    <input type="text" class="form-control" name="" value="" disabled>
							 </div>							  
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Date</label>
							    <input type="text" class="form-control" name="" value="" disabled>
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>Client Name</label>
							    <input type="text" class="form-control" name="" value="" disabled>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Client ID</label>
							    <input type="text" class="form-control" name="" value="" disabled>
							  </div>
						</div>	
						<div class="col-md-4">
							<div class="form-group">
							    <label>Client Contact No.</label>
							    <input type="text" class="form-control" name="" value="" disabled>
							  </div>
						</div>	
					</div>					
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Client Address</label>
							    <textarea type="text" class="form-control input-lg" name="" value="" disabled> 
							    </textarea>
							  </div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Paid amount</label>
							    <input type="text" class="form-control" name="" value="" disabled>
							  </div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
							    <label>New Balance</label>
							    <input type="text" class="form-control" name="" value="" disabled>
							  </div>
						</div>	
					</div>	
					<div class="row m-top-15 m-bottom-15">
						<div class="col-md-12">
							<h3>Payment Method: Cheque</h3>
						</div>	
					</div>	
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Payee Name</label>
									    <input type="text" class="form-control" name="" value="">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Bank and Branch</label>
									    <input type="text" class="form-control" name="" value="">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Amount</label>
									    <input type="text" class="form-control" name="" value="">
									  </div>
								</div>
							</div>
						</div>	
					</div>	
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-danger" onclick="window.history.back();"><i class="fa fa-arrow-left"></i> Back</button>
							</div>			
						</div>
				</div>
			</div>
		</div>
	</div>
<?php include('selectCustomerModal.php') ?>
<?php include('footer.php') ?>