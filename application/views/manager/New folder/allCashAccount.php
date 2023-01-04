<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">All Cash Account</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">All Cash Account</li>
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
								<button type="button" class="btn btn-warning m-top-20" data-toggle="modal" data-target="#addCashAccountModal">Add Cash Account</button>
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
											<input type="text" class="form-control" placeholder="Account Name" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Balance" disabled id="">
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
										<td><?php echo $value->cashAccountName; ?></td>
										<td><?php echo $value->cashAccountBalance; ?></td>
										
										<td>
											<a href="<?php echo base_url("manager/viewCashAccount/{$value->cashAccountInfoId}")?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
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

	
	
<?php include('addCashAccountModal.php') ?>
<?php include('footer.php') ?>