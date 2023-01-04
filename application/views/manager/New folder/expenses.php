<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Expenses</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Expenses</li>
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
								<a href="<?php echo base_url('manager/addExpense');?>" class="btn btn-warning m-top-20">Add Expense</a>
								<a href="<?php echo base_url('manager/expenseFileds');?>" class="btn btn-warning m-top-20">Expense Fields</a>
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
								</button>
							</div>
							
						</div>
					</div>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Date From</label>
							    <input type="text" class="form-control" name="" value="" id="startDate">
							 </div>							  
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Date To</label>
							    <input type="text" class="form-control" name="" value="" id="endDate">
							  </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
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
											<input type="text" class="form-control" placeholder="Date & Time" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Transaction ID" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Details" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Amount" disabled id="">
										</th>
										<th>
											<span >View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as  $value) {
										# code...
									?>
									<tr>
										<td><?php echo date('M-d, Y  h:i a',strtotime($value->expenceDate)) ;  ?></td>
										<td><?php echo $value->expenseID;  ?></td>
										<td><?php echo $value->expenseNote;  ?>  </td>
										<td><?php echo $value->expenceAmount ?></td>
										<td>
											<a href="<?php echo base_url("manager/viewExpense/{$value->expenseID}")?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
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