<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Student List</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Student List</li>
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
								<a href="<?php echo base_url('manager/transactions');?>" type="button" class="btn btn-warning m-top-20">Transaction</a>
								<a href="<?php echo base_url('manager/studentHistory');?>" type="button" class="btn btn-warning m-top-20">Student History</a>
								<a href="<?php echo base_url('manager/transfer');?>" type="button" class="btn btn-warning m-top-20">Transfer</a>
								<a href="<?php echo base_url('manager/vacant');?>" type="button" class="btn btn-warning m-top-20">Vacant Current Seat</a>
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
											<input type="text" class="form-control" placeholder="Seat No" disabled>
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
										<td><?php echo $info->seatNumber ?></td>
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