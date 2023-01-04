<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">New Cash Transfer</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">New Cash Transfer</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php');?>
   	<?php echo form_open('manager/storeNewCashTransfer')?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>From Account</label>
							    <select name="cashTransferFrom" id="" class="form-control">
							    	<option value="" selected disabled> Select an Option</option>
									<!--<option value="-1" > Cash</option>
									<option value="0" > Petty Cash</option>-->
							    	<?php foreach ($data as  $value) {
							    	?>
									<option value="<?php echo $value->cashAccountInfoId?>"> <?php echo $value->cashAccountName; ?></option>
							    	<?php } ?>
							    </select>
							    <?php echo form_error('cashTransferFrom'); ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>To Account</label>
							    <select name="cashTransferTo" id="" class="form-control">
							    	<option value="" selected disabled> Select an Option</option>
									<!--<option value="-1" > Cash</option>
									<option value="0" > Petty Cash</option>-->
							    	<?php foreach ($data as  $value) {
							    	?>
							    	<option value="<?php echo $value->cashAccountInfoId?>"> <?php echo $value->cashAccountName; ?></option>
							    	<?php } ?>
							    </select>
							    	<?php echo form_error('cashTransferTo'); ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Amount</label>
							    <input type="text" class="form-control" name="cashTransferAmount" value="" >
							  	<?php echo form_error('cashTransferAmount'); ?>
							</div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control" name="cashTransferNote" value="" ></textarea>
							  	<?php echo form_error('cashTransferNote'); ?>
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