<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Building</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('manager/'); ?>">Dash Board</a></li>
				<li class="active">Add Building</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertBuilding', 'class="addBuilding-form"') ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Building No</label>
										<?php echo form_input(['name'=>'buildingNumber', 'class'=>'form-control','value'=>set_value('buildingNumber')]);?>
					    				<div class="errorClass"><?php echo form_error('buildingNumber'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Title</label>
										<?php echo form_input(['name'=>'buildingTitle', 'class'=>'form-control','value'=>set_value('buildingTitle')]);?>
					    				<div class="errorClass"><?php echo form_error('buildingTitle'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'buildingNote', 'class'=>'form-control', 'rows'=>'3','value'=>set_value('buildingNote')]);?>
					    				<div class="errorClass"><?php echo form_error('buildingNote'); ?></div>
									</div>
								</div>
							</div>
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