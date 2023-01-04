<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">All Bills</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">All Bills</li>
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
				<!--<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>From</label>
							    <input type="text" id="startDate" class="form-control" name="firstDate" value="<?php if($inputs['firstDate']) echo date('m/d/Y',strtotime($inputs['firstDate'])) ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>To</label>
							    <input type="text" id="endDate" class="form-control" name="lastDate" value="<?php if($inputs['lastDate']) echo date('m/d/Y',strtotime($inputs['lastDate'])) ?>">
							</div>
						</div>	
						<div class="col-md-4">
							<div class="form-group">
							    <label>Status</label>
							    <select name="" id="" class="form-control">
									<option value="0" selected disabled > Select an Option</option>
									<option value="1">Pending</option>
									<option value="2">Final</option>
								</select>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>								
				</div>-->
				<div class="panel-body">						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped" >
								<thead>

									<tr class="filters">										<th>
											<input type="text" class="form-control text-left" placeholder="Date" disabled data-toggle="true">
										</th>	
										<th>
											<input type="text" class="form-control text-left" placeholder="Student ID" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Student Name" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Contact No." disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Seat" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Total Amount" disabled>
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
										foreach($infos as $info) { ?>
									<tr>
										<td><?php echo date("F, Y", strtotime($info->monthlyBillingMonth)); ?></td>
										<td><?php echo $info->stdIdNo ?></td>
										<td><?php echo $info->studentName ?></td>
										<td><?php echo $info->studentContactNo ?></td>
										<td><?php echo $info->seatNumber ?></td>
										<td><?php echo $info->billingDetailsStudentTotalAmount ?></td>
										<td><?php if($info->billingDetailsStatus == 0){
													echo 'Pending';
												} 
												elseif ($info->billingDetailsStatus == 1) {
													echo 'Paid';
												}
												else{
													echo 'Half Paid';
												} 
												?></td>
										<td>
											<a href="<?php echo base_url("manager/printInvoice/{$info->monthlyBillngDetailsId}");?>" class="btn btn-primary"><i class="fa fa-print fa" aria-hidden="true"></i></a>
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