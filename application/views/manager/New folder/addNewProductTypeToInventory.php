<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add New Product Type</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add New Product Type</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<?php echo form_open('manager/storeProductType'); ?>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Product Type</label>
							    <input type="text" class="form-control" name="productTypeName" value="" required >
							 </div>							  
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control" name="productTypeDetails" value="" required ></textarea> 
							 </div>							  
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>						  
							<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>						  
						</div>				
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>					
<?php include('footer.php') ?>