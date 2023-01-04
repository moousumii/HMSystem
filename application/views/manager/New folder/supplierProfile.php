<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Supplier Profile</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Supplier Profile</li>
         </ol>
      </div>
   	</div>
	<div class="row supplier-profile">
		<div class="col-md-12">
			<div class="panel panel-info">
				<?php echo form_open('manager/updateSupplier', 'class="supplierDetailsFrom"') ?>
				<?php echo form_hidden('id',$data->clientID)?>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
									    <label>Name</label>
									    <?php echo form_input(['name'=>'clientContactName', 'class'=>'form-control removeDisabled ', 'disabled'=>'disabled', 'value'=>set_value('clientContactName',$data->clientContactName)]);?>
						   				<div class="errorClass"><?php echo form_error('clientContactName'); ?></div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Contact Number</label>
									    <?php echo form_input(['name'=>'clientContactNumber', 'class'=>'form-control removeDisabled ', 'disabled'=>'disabled', 'value'=>set_value('clientContactNumber',$data->clientContactNumber)]);?>
						   				<div class="errorClass"><?php echo form_error('clientContactNumber'); ?></div>
									  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Reference</label>
									    <?php echo form_input(['name'=>'clientReference', 'class'=>'form-control removeDisabled ', 'disabled'=>'disabled', 'value'=>set_value('clientReference',$data->clientReference)]);?>
						   				<div class="errorClass"><?php echo form_error('clientReference'); ?></div>
									  </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Balance/Due</label>
									    <?php echo form_input(['name'=>'clientBalance', 'class'=>'form-control ', 'disabled'=>'disabled', 'value'=>set_value('clientBalance',$data->clientBalance)]);?>
						   				<div class="errorClass"><?php echo form_error('clientBalance'); ?></div>
									  </div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Special Note About Client</label>
									    <?php echo form_textarea(['name'=>'clientNote', 'class'=>'form-control removeDisabled ', 'disabled'=>'disabled', 'rows'=>'5', 'value'=>set_value('clientNote',$data->clientNote)]);?>
						   				<div class="errorClass"><?php echo form_error('clientNote'); ?></div>
									  </div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Supplier Status</label>
									    <select name="clientStatus" id="" class="form-control removeDisabled" disabled>
											<option value="<?php echo $data->clientStatus?>" selected disabled><?php 
											if($data->clientStatus == 0){echo 'Inactive';}else{echo 'Active';} ?></option>
											<option value="1">Active</option>
											<option value="0">InActive</option>
										</select>
									  </div>
								</div>		
							</div>
						</div>
					</div>						
				</div>	
				<div class="panel-footer">
					<div class="row m-bottom-25">
						<div class="col-md-12">
							<h3 class="text-center">Supplier Address</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading">
											<div class="panel-title">
												
												<div class="row">
													<div class="col-md-6">
														<h4 class="text-center">Home Address</h4>
													</div>
													<div class="col-md-6">
														<div class="pull-right">
															<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editAddressModal">
															<i class="fa fa-pencil"></i> Edit
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="panel-body card-shadow bg-success">
											<p>
												<b>Owner: </b> Mahfuz Ahamed <br>
												<b>Address: </b> Elegant Shopping Mall (6th Floor), Zindabazar, Sylhet <br>
												<b>Contact No.: </b> 01671614060 <br>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row m-bottom-25">
						<div class="col-md-12">
							<button type="button" class="btn btn-primary" id="removeDisabledButton"><i class="fa fa-pencil"></i> Edit</button>
							<button type="submit" class="btn btn-success addDisabled hidden"><i class="fa fa-thumbs-up"></i> Save</button>
							<button type="button" class="btn btn-warning addDisabled hidden" id="addDisabledButton"><i class="fa fa-times"></i> Cancel</button>
							<button type="reset" class="btn btn-danger" onclick="window.history.back();"><i class="fa fa-arrow-left"></i> Back</button>
						</div>	
					</div>
				</div>
		<?php echo form_close() ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6">
							<h4>Transaction Details</h4>
						</div>
						<div class="col-md-6">
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
											<input type="text" class="form-control" placeholder="Payment" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Bill" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Balance/Due" disabled id="">
										</th>
										<th>
											<span >View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>10-01-2016</td>
										<td>5 ton Rod</td>
										<td>2580</td>
										<td>5 ton</td>
										<td>12400</td>
										<td>
											<a href="<?php echo base_url('manager/')?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
										</td>
									</tr>	
								</tbody>
								<tfoot>
								    <tr>
								      	<th colspan="2" class="text-right">Total Payment: </th>
								      	<th>147570</th>
								      	<th class="text-right">Total Due: </th>
								      	<th>100000</th>
								      	<th></th>
								    </tr>
								</tfoot>
							</table>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>

<?php include('editAddressModal.php');?>	
<?php include('footer.php') ?>