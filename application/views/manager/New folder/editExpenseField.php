<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Edit Expense Field</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Edit Expense Field</li>
         </ol>
      </div>
   	</div>
   	<?php echo form_open('manager/updateExpenseFields')?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Expense Field Name</label>
							    <input type="text" class="form-control" name="expenseFieldName" value="<?php echo $value->expenseFieldName; ?>">
							 </div>							  
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Details</label>
							    <textarea type="text" class="form-control" name="expenseFieldDetails" value=""><?php echo $value->expenseFieldDetails; ?></textarea> 
							  </div>
						</div>				
					</div>
					<input type="hidden" class="form-control" name="expenseFieldID" value="<?php echo $value->expenseFieldID; ?>">
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Save</button>				  
						</div>				
					</div>					
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
<?php include('footer.php') ?>