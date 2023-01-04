<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Expense Field</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Expense Field</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertExpenseField', 'class="addExpenseField-form"')?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Expanse Field</label>
										<?php echo form_input(['name'=>'fieldTitle', 'class'=>'form-control', 'value'=>set_value('fieldTitle')]);?>
					    				<div class="errorClass"><?php echo form_error('fieldTitle'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Details</label>
										<?php echo form_textarea(['name'=>'fieldDetails', 'class'=>'form-control', 'rows'=>'3', 'value'=>set_value('fieldDetails')]);?>
					    				<div class="errorClass"><?php echo form_error('fieldDetails'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'fieldNote', 'class'=>'form-control', 'rows'=>'3', 'value'=>set_value('fieldNote')]);?>
					    				<div class="errorClass"><?php echo form_error('fieldNote'); ?></div>
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