<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Cash Transfers</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Cash Transfers</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 m-bottom-10 m-top-10">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/newCashTransfer');?>" class="btn btn-warning m-top-20">New Cash Transfer</a>
								<a href="<?php echo base_url('manager/allCashAccount');?>" class="btn btn-warning m-top-20">All Cash Account</a>
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
								</button>
							</div>
							
						</div>
					</div>
				</div>
				<?php echo form_open('manager/productEntryReport')?>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Date From</label>
							    <input type="text" class="form-control" name="" value="" id="startDate">
							 </div>							  
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Date To</label>
							    <input type="text" class="form-control" name="" value="" id="endDate">
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
							 </div>							  
						</div>			
					</div>					
				</div>
				<?php echo form_close(); ?>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped">
								<thead>
									<tr class="active filters">
										<th>
											<input type="text" class="form-control" placeholder="Transaction ID" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Date & Time" disabled data-toggle="true" id="">
										</th>
										
										<th>
											<input type="text" class="form-control" placeholder="From" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="To" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Amount" disabled id="">
										</th>
										<th>
											<span >View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as  $value) {
									?>
									<tr>
										<td><?php echo $value->cashTransferDetailsId; ?></td>
										<td><?php  echo date('M-d, Y  h:i a',strtotime($value->cashtransferDate)) ; ?></td>
										<td><?php echo $value->fromAccountName; ?></td>
										<td><?php echo $value->toAccountName; ?></td>
										<td><?php echo $value->cashTransferAmount; ?></td>
										<td>
											<a href="<?php echo base_url("manager/viewCashTransfer/{$value->cashTransferDetailsId}")?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
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

	
	
<?php include('footer.php') ?>