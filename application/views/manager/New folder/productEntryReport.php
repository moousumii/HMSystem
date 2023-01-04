<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Product Entry Report</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Product Entry Report</li>
         </ol>
      </div>
   	</div>
   	<?php echo form_open('manager/productEntryReport'); ?>
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
							    <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
							 </div>							  
						</div>			
					</div>					
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>	
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
											<input type="text" class="form-control" placeholder="Product Type" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Product" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Amount" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Entry By" disabled id="">
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as  $value) {
									?>
									<tr>
										<td><?php  echo date('M-d, Y  h:i a',strtotime($value->productUpdateDate)) ; ?></td>
										<td><?php echo $value->productTypeName; ?></td>
										<td><?php echo $value->productName; ?></td>
										<td><?php echo $value->productUpdatedQuantity."".$value->productUnitName; ?></td>
										
										<td><?php echo $value->adminName; ?></td>
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