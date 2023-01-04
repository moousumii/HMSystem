<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Petty Cash</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('')?>">Dash Board</a></li>
				<li class="active">Petty Cash</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Current Balance</label>
								<input type="text" class="form-control" name="" value="<?php echo $totalAmount; ?>" disabled />
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row m-bottom-10">
						<div class="col-md-12 col-xs-12">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/newCashTransfer')?>" style="margin-top:20px;margin-right:5px;" type="button" class="btn btn-warning">New Cash Transfer
								</a>
								<button id="filter_button" class="btn btn-warning btn-filter m-top-20"><i class="fa fa-filter"></i> Filter</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped">
								<thead class="dark-header">
									<tr class="filters">
										<th>
											<input type="text" class="form-control text-left" placeholder="Date" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="Details" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="Amount" disabled data-toggle="true">
										</th>	
										<th>
											<input type="text" class="form-control text-left" placeholder="Balance" disabled data-toggle="true">
										</th>									
										<th>
											<span class="text-left">View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php if($data){ ?>
									<?php $totalBalence=$totalAmount; ?>
									<?php foreach($data as $info): 
										$info->transectionDate=date('d/m/Y h:ia', strtotime($info->transectionDate)); 
										
									?>
										<tr>
											<td><?php echo $info->transectionDate ?></td>
											<td><?php echo $info->transectionDetails ?></td>
											<td><?php echo $info->transectionTotalAmount ?></td>
											<td><?php echo $totalBalence ?></td>
											<td>
												<a href="<?php echo base_url("manager/{$info->transectionTypeLink}/{$info->transectionReferenceID}")?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-info"></i></a>
											</td>
										</tr>	
									<?php 
										if($info->transectionType==2 || $info->transectionType==7){
											$totalBalence=$totalBalence+$info->transectionTotalAmount;
										}
										else{
											$totalBalence=$totalBalence-$info->transectionTotalAmount;
										}
										
									?>
									<?php endforeach; } ?>						
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn btn-danger" onclick="window.history.back();"><i class="fa fa-arrow-left"></i> Back</button>			
		</div>
	</div>
<?php include('footer.php') ?>