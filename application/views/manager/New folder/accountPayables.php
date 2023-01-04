
<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Account Payables</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Account Payables</li>
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
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
								</button>
							</div>							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped">
								<thead>
									<tr class="active filters">
										<th>
											<input type="text" class="form-control" placeholder="Name" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Contact Number" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Balance/Due" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Last Transaction" disabled data-toggle="true" id="">
										</th>
										<th>
											<span >View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $value) {
										# code...
									?>
									<tr>
										<td><?php echo $value->clientContactName; ?></td>
										<td><?php echo $value->clientContactNumber; ?></td>
										<td><?php echo $value->clientBalance; ?></td>
										<td><?php //$value->clientContactName; ?></td>
										<td>
											<?php if($value->clientType ==1){ ?>
											<a href="<?php echo base_url("manager/clientProfile/{$value->clientID}"); ?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>										    
										<?php  } else{ ?>
											<a href="<?php echo base_url("manager/supplierProfile/{$value->clientID}"); ?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>	
										    <?php } ?>
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