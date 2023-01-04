<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Floor</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Add Floor</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertFloor', 'class="addFloor-form"')?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="selectZoneID" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Building No</label>
										<select name="building_info_floorBuildingId" id="selectBuldingID" class="form-control zoneClass">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($buildings as $building) {?>
												<option value="<?php echo $building->buildingId?>"><?php echo $building->buildingNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('building_info_floorBuildingId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>No. of Floor</label>

										<input type="text" class="form-control" id="floorNumberID" name="floorNumberID" value="">

									</div>	
								</div>
							</div>
							<div class="row floorInfo">
								<div class="col-md-12">
									<div class="panel panel-info">
										<div class="panel-heading">
											<h4>Floor Info </h4>
										</div>
										<div class="panel-body card-shadow floorInfos">
											
											<!--<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group floorInfos" >
																<label> Floor No</label>
																<input type="text" class="form-control" />
															</div>	
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>No. of Unit</label>
																<input type="text" class="form-control" name="" value="">
															</div>	
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label>Floor Note</label>
																<textarea name="" id=""rows="3" class="form-control"></textarea>
															</div>
														</div>
													</div>
												</div>
											</div>
											-->
										</div>
									</div>
								</div>
							</div>
							<!--<div class="row">
								<div class="col-md-12">
									<div class="panel panel-info">
										<div class="panel-heading">
											<h4>Unit Info </h4>
										</div>
										<div class="panel-body card-shadow">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label> Unit No.</label>
														<input type="text" class="form-control" name="" value="">
													</div>		
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label>Unit Note</label>
														<textarea name="" id=""rows="3" class="form-control"></textarea>
													</div>		
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>-->
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Add </button>
									<button type="reset" class="btn btn-danger"> <i class="fa fa-refresh"></i> Reset</button>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close() ?>									
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>