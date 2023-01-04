<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Building</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">View Building</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateBuilding', 'class="buildingDetails-form"') ?>
					<?php echo form_hidden('buildingId', $data->buildingId); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="" class="form-control removeDis" disabled>
											<option value="<?php echo $data->zoneID ?>" selected> <?php echo $data->zoneTitle ; ?></option>
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<input type="hidden" value="<?php echo $data->zoneID ?>" name="oldZone" />
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Building No</label>
										<?php echo form_input(['name'=>'buildingNumber', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('buildingNumber').$data->buildingNumber]);?>
					    				<div class="errorClass"><?php echo form_error('buildingNumber'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Status</label>
										<select name="buildingStatus" id="" class="form-control removeDis" disabled>
											<option value="<?php echo $data->buildingStatus ?>" selected><?php if($data->buildingStatus == 1) {echo 'Active';} else {echo 'Inactive';}; ?></option>	
											<option value="1">Active</option>	
											<option value="0">Inactive</option>	
										</select>
										<input type="hidden" value="<?php echo $data->buildingStatus; ?>" name="oldStatus" />
										<div class="errorClass"><?php echo form_error('buildingStatus'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Title</label>
										<?php echo form_input(['name'=>'buildingTitle', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('buildingTitle').$data->buildingTitle]);?>
					    				<div class="errorClass"><?php echo form_error('buildingTitle'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>No. of Floor</label>
										<?php echo form_input(['name'=>'buildingTotalFloorNumber', 'class'=>'form-control ', 'disabled'=>'disabled', 'value'=>set_value('buildingTotalFloorNumber').$data->buildingTotalFloorNumber]);?>
					    				<div class="errorClass"><?php echo form_error('buildingTotalFloorNumber'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'buildingNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('').$data->buildingNote]);?>
										<div class="errorClass"><?php echo form_error('buildingNote'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<a type="button" class="btn btn-primary" id="removeDisabled"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>

									<a class="btn btn-danger hidden hiddenButton" id="addDisabled" ><i class="fa fa-reply-all" aria-hidden="true"></i>  Cancel</a>
								</div>
							</div>
						</div>
					</div>	
					<?php echo form_close() ?>							
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
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-15" ><i class="fa fa-filter"></i> Filter
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
											<input type="text" class="form-control text-left" placeholder="Zone" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="Floor No." disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="No. of Unit" disabled>
										</th>
										<th>
											<span>View</span>
										</th>
										
									</tr>
								</thead>
								
								<tbody>
									<?php foreach ($floors as $floor) {?>
									<tr>
										<td><?php echo $floor->zoneTitle ?></td>
										<td><?php echo $floor->floorNumber ?></td>
										<td><?php echo $floor->floorTotalNumberUnit ?></td>
										<td><a href="<?php echo base_url("manager/viewFloor/{$floor->floorId}"); ?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a></td>
									</tr>
									<?php }?> 
								</tbody>
							</table>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>