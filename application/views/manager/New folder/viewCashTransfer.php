<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Cash Transfer</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Cash Transfer</li>
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
							    <input type="text" class="form-control" name="cashTransferDetailsId" value="<?php echo $value->cashTransferDetailsId; ?>" disabled>
							  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Date</label>
							    <input type="text" class="form-control" name="cashtransferDate" value="<?php  echo date('M-d, Y  h:i a',strtotime($value->cashtransferDate)) ; ?>" disabled>
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>From Account</label>
							    <input type="text" class="form-control" name="cashTransferFrom" value="<?php echo $value->fromAccountName; ?>" disabled>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>To Account</label>
							    <input type="text" class="form-control" name="cashTransferTo" value="<?php echo $value->toAccountName; ?>" disabled>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="form-group">
							    <label>Amount </label>
							    <input type="text" class="form-control" name="cashTransferAmount" value="<?php echo $value->cashTransferAmount; ?>" disabled>
							  </div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control" name="cashTransferNote" value="" disabled><?php echo $value->cashTransferNote; ?></textarea>
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
