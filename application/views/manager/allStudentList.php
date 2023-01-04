<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">All Student List</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">All Student List</li>
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
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
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
											<input type="text" class="form-control text-left" placeholder="Student ID" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Name" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Phone No" disabled>
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
									<?php foreach ($infos as $info) {?>
									<tr>
										<td><?php echo $info->stdIdNo ?></td>
										<td><?php echo $info->studentName ?></td>
										<td><?php echo $info->studentContactNo ?></td>
										<td><?php if($info->studentStatus==1) echo "Active"; else if($info->studentStatus==2) echo "InActive"; else if($info->studentStatus==3) echo "Complete"; else echo "On Hold";  ?></td>
										<td><a href="<?php echo base_url("manager/viewStudentList/{$info->studentId}"); ?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a></td>
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