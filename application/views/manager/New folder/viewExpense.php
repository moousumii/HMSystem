<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Expense</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Expense</li>
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
							    <input type="text" class="form-control" name="expenseID" value="<?php echo $data->expenseID; ?>" disabled>
							  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Date</label>
							    <input type="text" class="form-control" name="expenceDate" value="<?php echo $data->expenceDate; ?>" disabled>
							  </div>
						</div>				
					</div>
					<!--<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Details</label>
							    <textarea type="text" class="form-control" name="expenseFieldDetails" value="" disabled><?php //echo $data->expenseFieldDetails; ?></textarea>
							  </div>
						</div>				
					</div>-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Amount</label>
							    <input type="text" class="form-control" name="expenceAmount" value="<?php echo $data->expenceAmount; ?>" disabled>
							  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Reference</label>
							    <input type="text" class="form-control" name="expenceReference" value="<?php echo $data->expenceReference; ?>" disabled>
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control" name="expenseNote" value="" disabled><?php echo $data->expenseNote; ?></textarea>
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
<?php include('footer.php') ?>