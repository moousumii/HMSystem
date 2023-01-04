<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Expense Field</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Expense Field</li>
         </ol>
      </div>
   	</div>
   		<?php echo form_open('manager/storeExpenseFields')?>
   		 	<?php include('messages.php');?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Expense Field Name</label>
							    <input type="text" class="form-control" name="expenseFieldName" value="">
							 	 <?php echo form_error('expenseFieldName'); ?>
							 </div>							  
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Details</label>
							    <textarea type="text" class="form-control" name="expenseFieldDetails" value="" ></textarea> 
							  	 <?php echo form_error('expenseFieldDetails'); ?>
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>				  
						</div>				
					</div>					
				</div>
			</div>
		</div>
	</div>
		<?php echo form_close(); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>Available Expense Fields</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr class="active">
										<th>ID</th>
										<th>Field Name</th>
										<th>Details</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as  $value) {
									?>
									<tr>
										<td><?php echo $value->expenseFieldID; ?></td>
										<td><?php echo $value->expenseFieldName; ?></td>
										<td><?php echo $value->expenseFieldDetails; ?></td>
										<td>
										<a href="<?php echo base_url("manager/editExpenseField/{$value->expenseFieldID}")?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
										</td>
									</tr>	
									<?php } ?>
								</tbody>
							</table>
						</div>	
					</div>							
				</div>	
			</div>
		</div>
	</div>
	
<?php include('selectCustomerModal.php') ?>
<?php include('footer.php') ?>