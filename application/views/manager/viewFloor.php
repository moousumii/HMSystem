<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Floor</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">View Floor</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateFloor', 'class="floorDetails-form"') ?>
					<?php echo form_hidden('floorId', $data->floorId); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="selectZoneID" class="form-control removeDis" disabled required>
											<option value="<?php echo $data->zoneID ?>" selected > <?php echo $data->zoneTitle ; ?></option>
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
										<input type="hidden" value="<?php echo $data->zoneID ?>" name="oldZone" />
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Building No</label>
										<select name="building_info_floorBuildingId" id="selectBuldingID" class="form-control zoneClass removeDis" disabled required>
											<option value="<?php echo $data->buildingId ?>" class="removablebuilding" selected  > <?php echo $data->buildingNumber ; ?></option>

											<?php foreach($infos as $info) {?>
												<option value="<?php echo $info->buildingId?>" class="removablebuilding" ><?php echo $info->buildingNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('building_info_floorBuildingId'); ?></div>
										<input type="hidden" name="oldBuilding" value="<?php echo $data->buildingId?>" />
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Floor No</label>
										<?php echo form_input(['name'=>'floorNumber', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('floorNumber').$data->floorNumber]);?>
					    				<div class="errorClass"><?php echo form_error('floorNumber'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>No. of Unit</label>
										<?php echo form_input(['name'=>'floorTotalNumberUnit', 'class'=>'form-control ', 'disabled'=>'disabled', 'value'=>set_value('floorTotalNumberUnit').$data->floorTotalNumberUnit]);?>
					    				<div class="errorClass"><?php echo form_error('floorTotalNumberUnit'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Status</label>
										<select name="floorStatus" id="" class="form-control removeDis" disabled>
											<option value="<?php echo $data->floorStatus ?>" selected><?php if($data->floorStatus == 1) {echo 'Active';} else {echo 'Inactive';}; ?></option>	
											<option value="1">Active</option>	
											<option value="2">Inactive</option>	
										</select>
										<div class="errorClass"><?php echo form_error('floorStatus'); ?></div>
										<input type="hidden" value="<?php echo $data->floorStatus; ?>" name="oldStatus" />
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'floorNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('').$data->floorNote]);?>
										<div class="errorClass"><?php echo form_error('floorNote'); ?></div>
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
											<input type="text" class="form-control text-left" placeholder="Building No." disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="Floor No." disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Unit No." disabled>
										</th>
										<th>
											<input type="text" class="form-control text-left" placeholder="No. of Room" disabled data-toggle="true">
										</th>
										<th>
											<span>View</span>
										</th>
										
									</tr>
								</thead>
								
								<tbody>
									<?php foreach ($units as $unit) {?>
									<tr>
										<td><?php echo $unit->zoneTitle ?></td>
										<td><?php echo $unit->buildingNumber ?></td>
										<td><?php echo $unit->floorNumber ?></td>
										<td><?php echo $unit->unitNumber ?></td>
										<td><?php echo $unit->unitTotalNumberRoom ?></td>
										<td><a href="<?php echo base_url("manager/viewUnit/{$unit->unitId}"); ?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a></td>
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