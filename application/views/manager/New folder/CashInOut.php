<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Cash In-Out</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Cash In-Out</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php');?>
   	<?php echo form_open('manager/storeCashInOut')?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Transaction Type</label>
							    <select name="transectionType" id="" class="form-control" required>
							    	<option value="" selected disabled> Select an Option</option>
							    	<option value="4"> Cash In</option>
							    	<option value="5"> Cash Out</option>
							    </select>
							    <?php echo form_error('transectionType'); ?>
							  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Amount</label>
							    <input type="text" class="form-control" name="transectionTotalAmount" value="" required >
								<?php echo form_error('transectionTotalAmount'); ?>
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control" name="transectionDetails" value="" required rows="3"></textarea>
							  	<?php echo form_error('transectionDetails'); ?>
							  </div>
						</div>			
					</div>	
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
							<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
						</div>			
					</div>				
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
<?php include('footer.php') ?>