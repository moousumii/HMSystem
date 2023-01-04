<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Cash Account</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Cash Account</li>
         </ol>
      </div>
   	</div>
   	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateCashAccount')?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>Account Name</label>
							    <input type="text" class="form-control removeDisabled" name="cashAccountName" value="<?php echo $data->cashAccountName; ?>" disabled>
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Balance</label>
							    <input type="text" class="form-control" name="cashAccountBalance" value="<?php echo $data->cashAccountBalance; ?>" disabled>
							  </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Account Status</label>
							    <select class="form-control removeDisabled" name="cashAccountStatus" id="" disabled>
									<option value="<?php echo $data->cashAccountStatus;  ?>" selected disabled ><?php if($data->cashAccountStatus==1) echo "Active"; else echo "InActive" ; ?></option>
									<option value="1">Active</option>
									<option value="0">InActive</option>
									
								</select>
							  </div>
						</div>				
					</div>
												
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control removeDisabled" name="cashAccountNote" disabled>
							    <?php echo $data->cashAccountNote; ?></textarea>
							</div>
						</div>			
					</div>	
					<div class="row">
						<div class="col-md-12">
							<button type="button" class="btn btn-primary" id="removeDisabledButton"><i class="fa fa-pencil"></i> Edit</button>
							<button type="submit" class="btn btn-success addDisabled hidden"><i class="fa fa-thumbs-up"></i> Save</button>
							<button type="button" class="btn btn-warning addDisabled hidden" id="addDisabledButton"><i class="fa fa-times"></i> Cancel</button>
							<button class="btn btn-danger" onclick="window.history.back();"><i class="fa fa-arrow-left"></i> Back</button>
						</div>			
					</div>	
					<input type="hidden" class="form-control " name="cashAccountInfoId" value="<?php echo $data->cashAccountInfoId; ?>" >
					<?php form_close(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 m-bottom-10 m-top-10">
							<div class="pull-right">
								<button type="button" id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
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
											<input type="text" class="form-control" placeholder="Transaction ID" disabled data-toggle="true" id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Date" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Transaction Type" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Deposit" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Withdrawal" disabled id="">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Balance" disabled id="">
										</th>
										<th>
											<span >View</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>108007</td>
										<td>25-07-2017</td>
										<td> </td>
										<td> </td>
										<td> </td>
										<td>25972</td>
										<td>
											<a href="<?php echo base_url('manager/viewCashtransfer')?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
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