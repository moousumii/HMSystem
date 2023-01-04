<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">All Payments</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">All Payments</li>
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
								<a href="<?php echo base_url('manager/receivedPaidPaymentForm')?>" class="btn btn-warning m-top-20">Add Received-Paid Payment Entry</a>
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
								</button>
							</div>
							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped table-condensed">
								<thead>
									<tr class="active filters">
										<th>
											<input type="text" class="form-control" placeholder="Date & Time" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Payment Type" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Client / Supplier" disabled id="">
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
									<tr>
										<td>10-01-2016, 04:50pm</td>
										<td>Received/Paid</td>
										<td>Keshob</td>
										<td>15000</td>
										<td>
											<a href="<?php echo base_url('manager/viewReceivedPaidPaymentForm')?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
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