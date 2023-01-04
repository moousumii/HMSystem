<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Bill</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Bill</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<?php echo form_open('manager/updateBillInfo')?>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Bill ID</label>
									    <input type="text" class="form-control" name="billInfoId" value="<?php echo $data->billInfoId?>" disabled>
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Date</label>
									    <input type="text" class="form-control" name="billDate" value="<?php echo $data->billDate; ?>" disabled>
									  </div>
								</div>			
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Select Supplier Name</label>
									    <select class="form-control forselect2" name="client_info_supplierId" value="" disabled>
										<?php foreach ($data1 as $value1) {
									    ?>
										  <option value="<?php $value1->clientID ?>"><?php echo $value1->clientContactName; ?></option>
										  <?php } ?>
										</select>
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Amount</label>
									    <input type="text" class="form-control" name="billAmount" value="<?php echo $data->billAmount?>" disabled>
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Bill Number</label>
									    <input type="text" class="form-control" name="billReferenceNumber" value="<?php echo $data->billReferenceNumber?>" disabled>
									  </div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Details</label>
									    <textarea type="text" class="form-control" name="billDetails" value="" disabled><?php echo $data->billDetails ?></textarea> 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Note</label>
									   	<textarea type="text" class="form-control" name="billNote" value="" disabled><?php echo $data->billNote?></textarea> 
									  </div>
								</div>		
							</div>	
							<input type="hidden" class="form-control" name="billInfoId" value="<?php echo $data->billInfoId?>" >						
							<div class="row m-top-15">
								<div class="col-md-12">
									<a onclick="window.history.back();" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
								</div>	
							</div>
						</div>
					</div>						
				</div>	
				<?php echo form_close() ?>	
			</div>
		</div>
	</div>

<?php include('footer.php') ?>