<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Income-Expense Report</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Income-Expense Report</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>Date From</label>
							    <input type="text" class="form-control" name="" value="" id="startDate">
							 </div>							  
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Date To</label>
							    <input type="text" class="form-control" name="" value="" id="endDate">
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Select By Transaction Type</label>
							    <select name="" id="" class="form-control forselect2">
									<option value="0">Select an Option</option>
									<option value="1">Type 1</option>
									<option value="2">Type 2</option>
									<option value="3">Type 3</option>
									<option value="4">Type 4</option>
								</select>
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
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
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
											<input type="text" class="form-control" placeholder="Date" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Type" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Details" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Amount" disabled id="">
										</th>
										<th><span>View</span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>23-07-2017 3:52PM</td>
										<td>Sale</td>
										<td>Port Block</td>
										<td>20000</td>
										<td>
											<a href="<?php echo base_url('manager/')?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
										</td>
									</tr>
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
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Total Income</label>
							    <input type="text" class="form-control" name="" value="" id="startDate">
							 </div>							  
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Total Expense</label>
							    <input type="text" class="form-control" name="" value="" id="endDate">
							  </div>
						</div>				
					</div>					
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php') ?>