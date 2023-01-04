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
							<table class="table table-striped">
								<thead>
									<tr class="active filters">
										<th>
											<input type="text" class="form-control" placeholder="Date" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Bill ID" disabled id="">
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
									<?php foreach ($data as $value) {
										# code...
									?>
									<tr>
										<!--///<td><?php  //echo date('M-d, Y  h:i a',strtotime($value->billDate)) ; ?></td>-->
										<td><?php  echo date('M-d, Y  h:i a',strtotime($value->billAddedDate)) ; ?></td>
										<td><?php echo $value->billReferenceNumber; ?></td>
										<td><?php echo $value->billAmount; ?></td>
										<td>
											<a href="<?php echo base_url("manager/viewBill/{$value->billInfoId}")?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
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