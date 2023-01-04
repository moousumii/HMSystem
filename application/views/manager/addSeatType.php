<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Seat Type</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Seat Type</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertSeatType', 'class="addSeatType-form"')?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Seat Type Name</label>
										<?php echo form_input(['name'=>'seatTypeName', 'class'=>'form-control', 'value'=>set_value('seatTypeName')]);?>
										<div class="errorClass"><?php echo form_error('seatTypeName'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Seat Rent</label>
										<?php echo form_input(['name'=>'rentAmount', 'class'=>'form-control', 'value'=>set_value('rentAmount')]);?>
										<div class="errorClass"><?php echo form_error('rentAmount'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Profit</label>
										<?php echo form_input(['name'=>'profit', 'class'=>'form-control', 'value'=>set_value('profit')]);?>
										<div class="errorClass"><?php echo form_error('profit'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Add</button>
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