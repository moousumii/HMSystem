<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">All Admin</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">All Admin</li>
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
								<a href="<?php echo base_url('manager/addAdmin'); ?>" type="button" class="btn btn-warning m-top-10">Add Admin</a>
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
											<input type="text" class="form-control text-left" placeholder="User ID" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Name" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Contact No." disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Zone" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Status" disabled>
										</th>
										<th>
											<span>View</span>
										</th>
										
									</tr>
								</thead>
								
								<tbody>
									<?php 
										foreach($infos as $info) {?>
									<tr>
										<td><?php echo $info->adminUserID ?></td>
										<td><?php echo $info->adminName ?></td>
										<td><?php echo $info->adminContact ?></td>
										<td><?php echo $info->zoneTitle ?></td>
										<td><?php if($info->adminStatus == 1){
												echo 'Active';
											}
												else{
													echo 'Inactive';
												}

										  ?></td>
										<td><a href="<?php echo base_url("manager/viewAdmin/{$info->adminID}"); ?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a></td>
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