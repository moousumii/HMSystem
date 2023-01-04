<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Transactions</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Transactions</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6">
							<h4>Search Transactions </h4>
						</div>
						<div class="col-md-6">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/receivePayment')?>" class="btn btn-warning">Receive Payment</a>
								<a href="<?php echo base_url('manager/addExpense')?>" type="" class="btn btn-warning">Add Expense</a>
							</div>
						</div>
					</div>
				</div>
				<?php //print_r($inputs); exit; ?>
				<div class="panel-body card-shadow">
					<?php echo form_open('manager/transactions', 'class="transactions-form"')?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label> Transaction Type</label>
								<select name="transectionType" id="" class="form-control">
									<?php if($inputs['transectionType']==5){ ?>
										<option value="0" >All</option>
										<option value="5" selected >Expense</option>
										<option value="6">Return</option>
										<option value="4">Payment</option>
									<?php } else if($inputs['transectionType']==4){ ?>
										<option value="0" >All</option>
										<option value="5">Expense</option>
										<option value="6">Return</option>
										<option value="4" selected >Payment</option>
										
									<?php } else if($inputs['transectionType']==6){ ?>
										<option value="0">All</option>
										<option value="5">Expense</option>
										<option value="6" selected>Return</option>
										<option value="4">Payment</option>

									<?php } else{  ?>
										<option value="0" selected >All</option>
										<option value="5">Expense</option>
										<option value="6">Return</option>
										<option value="4">Payment</option>
									<?php } ?>
									
								</select>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> From</label>
								<input type="text" id="startDate" class="form-control" name="firstDate" value="<?php if($inputs['firstDate']) echo date('m/d/Y',strtotime($inputs['firstDate'])) ?>" >
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> To</label>
								<input type="text" id="endDate" class="form-control" name="lastDate" value="<?php if($inputs['lastDate']) echo date('m/d/Y',strtotime($inputs['lastDate'])) ?>">
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 ">
							<div class="row">
								<div class="col-md-6">
									<h4>Total Transactions </h4>
								</div>
								<div class="col-md-6">
									<div class="pull-right">
										<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
										</button>
									</div>
								
								</div>
							</div>							
						</div>
					</div>
				</div>
				<?php $totalCashIn=0; $TotalCashOut=0; ?>
				<div class="panel-body">						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped" >
								<thead>

									<tr class="filters">											
										<th>
											<input type="text" class="form-control text-left" placeholder="Date & Time" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Transaction Type" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Details" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Amount" disabled>
										</th>
										<th>
											<span>View</span>
										</th>
										
									</tr>
								</thead>
								<?php if($infos){ ?>
								<tbody>
									<?php foreach ($infos as $info) {?>
									<tr>
										<td><?php echo $info->transactionDate ?></td>
										<td><?php echo $info->transactionTypeTitle ?></td>
										<td><?php echo $info->transactionDetails ?></td>
										<td><?php echo $info->transactionAmount ?></td>
										<td><a href="<?php echo base_url("manager/$info->transactionTypeLink/{$info->transactionRefferenceId}");?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a></td>
									</tr>
									<?php if($info->TransactionTypeId<5) $totalCashIn=$totalCashIn+$info->transactionAmount; else $TotalCashOut=$totalCashIn+$info->transactionAmount;  }?> 
								</tbody>
								<?php } else echo "No Data Found!"; ?>
							</table>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>
	<div class="panel panel-info">
		<div class="panel-body card-shadow">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label> Cash In</label>
						<input type="text" class="form-control" name="" value="<?= $totalCashIn ?>" disabled>
					</div>		
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label> Cash Out</label>
						<input type="text" class="form-control" name="" value="<?= $TotalCashOut ?>" disabled >
					</div>		
				</div>
			</div>								
		</div>
	</div>
				
<?php include('footer.php') ?>