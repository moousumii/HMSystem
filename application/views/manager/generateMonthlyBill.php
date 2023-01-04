<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Generate Monthly Bill</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Generate Monthly Bill</li>
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
											<input type="text" class="form-control" placeholder="Student Name" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Previous Due" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Rent" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Other" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Discount" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Total" disabled>
										</th>
										<th>
											<span>View</span>
										</th>
										
									</tr>
								</thead>
								<?php //print_r($infos); ?>
								<tbody>
									<?php 
										foreach($infos as $info) { ?>
									<tr>
										<td><?php echo $info->stdIdNo ?></td>
										<td><?php echo $info->studentName ?></td>
										<td><?php echo $info->billingDetailsStudentPreviousDue ?></td>
										<td><?php echo form_input(['name'=>'billing_details_monthelyRent', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('billing_details_monthelyRent').$info->billing_details_monthelyRent]);?></td>
										<td><?php echo form_input(['name'=>'billingDetailsStudentOtherAmount', 'class'=>'form-control', 'id'=>'billOtherID'.$info->monthlyBillngDetailsId, 'value'=>set_value('billingDetailsStudentOtherAmount').$info->billingDetailsStudentOtherAmount]);?></td>
										<td><?php echo form_input(['name'=>'billingDetailsStudentBillDiscount', 'class'=>'form-control', 'id'=>'billDiscountID'.$info->monthlyBillngDetailsId,'value'=>set_value('billingDetailsStudentBillDiscount').$info->billingDetailsStudentBillDiscount]);?></td>
										<td><?php echo form_input(['id'=>'billTotalID'.$info->monthlyBillngDetailsId, 'class'=>'form-control ', 'disabled'=>'disabled', 'value'=>set_value('').$info->billingDetailsStudentTotalAmount]);?></td>
										<td>
											
											<?php if($status == 1){?>
											<a href="<?php echo base_url("manager/printInvoice/{$info->monthlyBillngDetailsId}"); ?>"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a> 
											<?php } else{ ?>
											<button type="button" class="btn btn-primary" onClick="updateBillInfo('<?php echo $info->monthlyBillngDetailsId ?>')"> Done </button>
											<?php } ?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>	
				<?php if($status==0){ ?>
				<div class="panel-body">						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<a type="button" href="<?php echo base_url("manager/makeBillFinal/{$bill_id}"); ?>" class="btn btn-success" > Mark as Final </a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php include('footer.php') ?>