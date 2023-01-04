<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Expense</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Expense</li>
         </ol>
      </div>
   	</div>
	<?php include('messages.php');?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<?php echo form_open('manager/storeExpenseInfo')?>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>Amount</label>
							    <input type="text" class="form-control" name="expenceAmount" value=""  required>
							  <?php echo form_error('expenceAmount'); ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Reference</label>
							    <input type="text" class="form-control" name="expenceReference" value="" required >
							  	<?php echo form_error('expenceReference'); ?>
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Expense Name</label>
							    <select name="expenceFieldID" id="" class="form-control forselect2" required>
							    	<option value="0" selected disabled> Select an Option</option>
							    	<?php foreach ($data1  as $value) {
							    		 ?>
							    	<option value="<?php echo $value->expenseFieldID; ?>"> <?php echo $value->expenseFieldName; ?></option>
							    	<?php } ?>
							    </select>
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control" name="expenseNote" value=""  required ></textarea>
							  	<?php echo form_error('expenseNote'); ?>
							  </div>
						</div>			
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
						</div>			
					</div>					
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	
<?php include('footer.php') ?>