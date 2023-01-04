<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Sale Report</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Sale Report</li>
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
							    <input type="text" class="form-control" name="fromDate" value="" id="startDate">
							 </div>							  
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Date To</label>
							    <input type="text" class="form-control" name="toDate" value="" id="endDate">
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Product</label>
							    <select name="productId" id="" class="form-control forselect2">
									<option value="0">Select an Option</option>
									<?php foreach ($infos as  $info) {
										?>
									<option value="<?php echo $info->productId; ?>"><?php echo $info->productName; ?></option>
									<?php } ?>
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
											<input type="text" class="form-control" placeholder="Date & Time" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Amount" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Invoice No." disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Sale Type." disabled id="">
										</th>
										<th>
											<span>View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>20-07-2017 2:12PM</td>
										<td>5 ton Rod</td>
										<td>2580</td>
										<td>Type</td>
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
<?php include('footer.php') ?>