<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">All User</h3>
		</div>
	</div>
	<?php include('messages.php'); ?>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">All User</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/addUser')?>" class="btn btn-warning m-top-20">Add User</a>
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
											<input type="text" class="form-control" placeholder="User ID" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Username" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Name" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Role" disabled id="">
										</th>
										<th>
											<span>View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($infos as $info): ?>
										<tr>
											<td><?php echo $info->adminID ?></td>
											<td><?php echo $info->adminUserID ?></td>
											<td><?php echo $info->adminName ?></td>
											<td><?php echo $info->roleName; ?></td>			
											<td>
												<a href="<?php echo base_url("manager/viewUser/{$info->adminID}")?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
											</td>
										</tr>
									<?php endforeach ; ?>									
								</tbody>
							</table>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>