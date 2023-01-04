<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Received-Paid Payment Form</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
				<li class="active">Received-Paid Payment Form</li>
			</ol>
		</div>
   	</div>
	<?php 
		$attributes = array('id' => 'storeReceivedPaidPaymentForm');
		echo form_open('manager/storeReceivedPaidPayment',$attributes); 
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Payment Type</label>
							    <select name="" id="paymentTypeID" class="form-control forselect2" required >
							    	<option value="" selected disabled>Select an Option</option>
							    	<option value="1">Received Payment</option>
							    	<option value="2">Paid Payment</option>
							    </select>
							 </div>							  
						</div>		
					</div>
					<div class="row">
						<div class="col-md-6">
							<div id="clientInfoID" class="">
								<div class="form-group" >
								    <label>Client Name</label>
								    <select name="client_info_transectionClientId" id="" class="form-control forselect2 transectionClientClass" required >
								    	<option value="" selected disabled>Select an Option</option>
										<?php foreach ($client as $x):  ?>
											<option value="<?php echo $x->clientType ?>"><?php echo $x->clientContactName; ?></option>
										<?php endforeach; ?>
								    </select>
								</div>
							</div>
						</div>
						<!--<div class="col-md-4">
							<div class="form-group">
							    <label>Client Type</label>
							    <select name="" id="" class="form-control forselect2">
							    	<option value="0">Select an Option</option>
							    	<option value="1">Customer</option>
							    	<option value="2">Supplier</option>
							    </select>
							</div>
						</div>	-->
						<div class="col-md-6">
							<div class="form-group">
							    <label>Client Contact No.</label>
							    <input type="text" class="form-control" id="clientContactNumberID" name="" value="" disabled>
							  </div>
						</div>	
					</div>					
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Client Address</label>
							    <textarea type="text" class="form-control input-lg" id="clientAddressID" name="" value="" disabled > 
							    </textarea>
							  </div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>Previous Balance</label>
							    <input type="text" class="form-control" id="clientBalanceID" name="" value="" disabled >
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Paid Amount</label>
							    <input type="text" class="form-control" name="transectionTotalAmount" id="transectionPaidAmountID" value="0">
							  </div>
						</div>	
						<div class="col-md-4">
							<div class="form-group">
							    <label>New Balance</label>
							    <input type="text" class="form-control" name="" value="" disabled >
							  </div>
						</div>	
					</div>				
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control input-lg" name="" value=""> 
							    </textarea>
							  </div>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>

	<div class="row receivedPaidPaymentForm">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Payment Method</h4>
						</div>
						<div class="panel-body">
							<div class="row m-bottom-15">
								<div class="col-md-12">
									<label class="radio-inline">
									  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Cash
									</label>
									<label class="radio-inline">
									  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Cheque
									</label>
								</div>	
							</div>
							<div class="row paymentDetails hidden">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
											    <label>Payee Name</label>
											    <input type="text" class="form-control" name="" value="">
											  </div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											    <label>Cheque No.</label>
											    <input type="text" class="form-control" name="" value="">
											  </div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											    <label>Bank and Branch</label>
											    <input type="text" class="form-control" name="" value="">
											  </div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											    <label>Amount</label>
											    <input type="text" class="form-control" name="" value="">
											  </div>
										</div>
									</div>
								</div>	
							</div>		
							<div class="row m-bottom-15">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
								</div>	
							</div>				
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
<?php include('footer.php') ?>