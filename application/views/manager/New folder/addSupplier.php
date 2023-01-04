<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add New Supplier</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Supplier</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/storeClient'); ?>
					<?php echo form_hidden('clientType',2); ?>
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>ID</label>
									    <input type="text" class="form-control" name="" value="" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Business Started Since</label>
									    <input type="text" class="form-control" id="date" name="businessStartedSince" value="" required>
									</div>
								</div>			
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Full Name</label>
									    <input type="text" class="form-control" name="clientContactName" value="" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Contact Number</label>
									    <input type="text" class="form-control" name="clientContactNumber" value="" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Reference</label>
									    <input type="text" class="form-control" name="clientReference" value="" >
									</div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Address Title</label>
									    <input type="text" class="form-control" name="addressTitle" value="" required>
									</div>
								</div>		
							</div>	
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Address</label>
									    <textarea type="text" class="form-control" name="address" value="" required></textarea>
									</div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Special Note About Client</label>
									    <textarea type="text" class="form-control" name="clientNote" value="" required></textarea>
									</div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Previous Balance</label>
									    <input type="text" class="form-control" name="clientBalance" value="" required>
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
					<?php echo form_close(); ?>						
				</div>	
			</div>
		</div>
	</div>

<?php include('footer.php') ?>