<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Expense Field</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Expense Field</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateExpenseField', 'class="expenseFieldDetails-form"')?>
					<?php echo form_hidden('fieldId',$data->fieldId); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Expanse Field</label>
										<?php echo form_input(['name'=>'fieldTitle', 'class'=>'form-control removeDis ','required'=>'required', 'disabled'=>'disabled', 'value'=>set_value('fieldTitle').$data->fieldTitle]);?>
										<div class="errorClass"><?php echo form_error('fieldTitle'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Status</label>
										<select name="fieldStatus" id="" class="form-control removeDis" disabled>
											<option value="<?php echo $data->fieldStatus ?>" selected disabled><?php if($data->fieldStatus == 1) {echo 'Active';} else {echo 'Inactive';}; ?></option>	
											<option value="1">Active</option>	
											<option value="2">Inactive</option>	
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Details</label>
										<?php echo form_textarea(['name'=>'fieldDetails', 'class'=>'form-control removeDis','required'=>'required','disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('fieldDetails').$data->fieldDetails]);?>
						    			<div class="errorClass"><?php echo form_error('fieldDetails'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'fieldNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('fieldNote').$data->fieldNote]);?>
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
<?php include('footer.php') ?>