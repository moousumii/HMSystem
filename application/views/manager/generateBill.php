<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Generate Bills</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			 <ol class="breadcrumb">
				<li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
				<li class="active">Generate Bills</li>
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
				<?php echo form_open('manager/createMonthlyBill'); ?>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> Zone</label>
								<select name="zone_info_billZoneId" id="" class="form-control" required >
									<option value="" selected disabled > Select an Option</option>						
									<?php foreach($zones as $zone) {?>
										<option value="<?php echo $zone->zoneID?>"><?php echo $zone->zoneTitle?></option>
									<?php } ?>
								</select>
								<div class="errorClass"><?php echo form_error('zone_info_billZoneId'); ?></div>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Billing Month</label>
							    <input type="text" id="date" class="form-control" name="monthlyBillingMonth" value="" required >
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
							    <label>Electic Bill</label>
							    <input type="text" id="" class="form-control" name="electicBill" value="" required >
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Food Bill</label>
							    <input type="text" id="" class="form-control" name="food" value="" required >
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Wifi</label>
							    <input type="text" id="" class="form-control" name="wifi" value="" required >
							  </div>
						</div><!-- 
						<div class="col-md-3">
							<div class="form-group">
							    <label>Profit</label>
							    <input type="text" id="" class="form-control" name="profit" value="" required >
							  </div>
						</div> -->
					</div>
					<div class="row">
						
						<div class="col-md-12">
							<div class="form-group">
							    <label>Message</label>
							    <textarea class="form-control" name="msg" value="" rows="3"></textarea> 
							  </div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>								
				</div>
				<?php echo form_close(); ?>
				<div class="panel-body">						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped" >
								<thead>

									<tr class="filters">											
										<th>
											<input type="text" class="form-control text-left" placeholder="Year & Month" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Zone" disabled>
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
										<td><?php  
												$date = $info->monthlyBillingMonth ;
												$billingDate = date("d-m-Y", strtotime($date));
												echo $billingDate;
											?></td>
										<td><?php echo $info->zoneTitle ?></td>
										<td><?php if($info->monthlyBillingInfoStatus == 1){
													echo 'Final';
												} 
													else{
														echo 'Pending';
												} 
												?></td>
										<td>
											<a href="<?php echo base_url("manager/generateMonthlyBill/{$info->monthlyBillingInfoId}/{$info->monthlyBillingInfoStatus}"); ?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a>
											<?php //if($info->monthlyBillingInfoStatus == 1){?>
											<!--<a href="<?php //echo base_url("manager/printInvoice/{$info->monthlyBillingInfoId}"); ?>"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>--> <?php //} ?>
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