<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Product Type</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Product Type</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
				<?php echo form_open('manager/updateProductType', 'class="ProductTypeFrom"');
				echo form_hidden('productTypeID',$data->productTypeID);
				?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>Type ID</label>
							    <?php echo form_input(['name'=>'', 'class'=>'form-control', 'disabled'=>'disabled','required','value'=>set_value('productTypeID',$data->productTypeID)]);?>
						   		<div class="errorClass"><?php echo form_error('productTypeID'); ?></div>
							 </div>							  
						</div>	
						<div class="col-md-4">
							<div class="form-group">
							    <label>Product Type</label>
							    <?php echo form_input(['name'=>'productTypeName', 'class'=>'form-control removeDisabled ', 'disabled'=>'disabled', 'required','value'=>set_value('productTypeName',$data->productTypeName)]);?>
						   		<div class="errorClass"><?php echo form_error('productTypeName'); ?></div>
							 </div>							  
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Status</label>
							    <select name="productTypeStatus" id="" class="form-control removeDisabled" required disabled>
									<option value="<?php echo $data->productTypeID;?>"><?php if($data->productTypeStatus == 0){echo 'InActive';}else{echo 'Active';}?></option>
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
							    <?php echo form_textarea(['name'=>'productTypeDetails', 'required','class'=>'form-control removeDisabled ', 'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('productTypeDetails',$data->productTypeDetails)]);?>
						   		<div class="errorClass"><?php echo form_error('productTypeDetails'); ?></div> 
							 </div>							  
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="button" class="btn btn-primary" id="removeDisabledButton"><i class="fa fa-pencil"></i> Edit</button>
							<button type="submit" class="btn btn-success addDisabled hidden"><i class="fa fa-thumbs-up"></i> Save</button>
							<button type="button" class="btn btn-warning addDisabled hidden" id="addDisabledButton"><i class="fa fa-times"></i> Cancel</button>
							<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>					  
						</div>				
					</div>
				<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>					
<?php include('footer.php') ?>