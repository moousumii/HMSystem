<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Bill</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Bill</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">

				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 m-bottom-10 m-top-10">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/allBills') ?>" class="btn btn-warning">All Bills</a>
							</div>							
						</div>
					</div>
				</div>
				<?php include('messages.php');?>
				<div class="panel-body">
					<?php echo form_open('manager/storeBillInfo')?>
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Select Supplier Name</label>
									    
									    <select class="form-control forselect2" name="client_info_supplierId" value="" required>
									    <?php foreach ($data1 as $value1) {
									    ?>
										  <!--///<option value="<?php //$value1->clientID ?>"><?php //echo $value1->clientContactName; ?></option>-->
										  <option value="<?php echo $value1->clientID ?>"><?php echo $value1->clientContactName; ?></option>
										  <?php } ?>
										</select>
										<?php echo form_error('client_info_supplierId'); ?>
									  </div>
									  
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Amount</label>
									    <input type="text" class="form-control" name="billAmount" value="" required>
									  	<?php echo form_error('billAmount'); ?>
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Bill Number</label>
									    <input type="text" class="form-control" name="billReferenceNumber" value="" required>
									  	<?php echo form_error('billReferenceNumber'); ?>
									  </div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Details</label>
									    <textarea type="text" class="form-control" name="billDetails" value="" required></textarea> 
										<?php echo form_error('billDetails'); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Note</label>
									   	<textarea type="text" class="form-control" name="billNote" value="" required></textarea> 
									  	<?php echo form_error('billNote'); ?>
									  </div>
								</div>		
							</div>							
							<div class="row m-top-15">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
									<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
								</div>	
							</div>
						</div>
					</div>
					<?php echo form_close() ?>						
				</div>	
			</div>
		</div>
	</div>

<?php include('footer.php') ?>