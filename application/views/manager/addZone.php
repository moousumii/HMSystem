<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Zone</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Zone</li>
         </ol>
      </div>
   	</div>
 <?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertZone', 'class="addZone-form"')?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Zone</label>
										<?php echo form_input(['name'=>'zoneTitle', 'class'=>'form-control','value'=>set_value('zoneTitle')]);?>
					    				<div class="errorClass"><?php echo form_error('zoneTitle'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'zoneNote', 'class'=>'form-control', 'rows'=>'3', 'value'=>set_value('zoneNote')]);?>
					    				<div class="errorClass"><?php echo form_error('zoneNote'); ?></div>
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