<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Units</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Units</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 m-bottom-10 m-top-10">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/addUnit'); ?>" type="button" class="btn btn-warning m-top-10">Add Unit</a>
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-10" ><i class="fa fa-filter"></i> Filter
								</button>
							</div>							
						</div>
					</div>
				</div>
				<div class="panel-body">						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped" >
								<thead>

									<tr class="filters">	
										<th>
											<input type="text" class="form-control text-left" placeholder="Zone" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="Building No." disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="Floor No." disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Unit No." disabled>
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="No. of Room" disabled data-toggle="true">
										</th>
										<th>
											<span>View</span>
										</th>
										
									</tr>
								</thead>
								
								<tbody>
									<?php foreach ($infos as $info) {?>
									<tr>
										<td><?php echo $info->zoneTitle ?></td>
										<td><?php echo $info->buildingNumber ?></td>
										<td><?php echo $info->floorNumber ?></td>
										<td><?php echo $info->unitNumber ?></td>
										<td><?php echo $info->unitTotalNumberRoom ?></td>
										<td><a href="<?php echo base_url("manager/viewUnit/{$info->unitId}"); ?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a></td>
									</tr>
									<?php }?> 
								</tbody>
							</table>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>