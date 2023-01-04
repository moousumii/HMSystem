<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Product Details</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Product Details</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				
				<div class="panel-body">
					<?php echo form_open('manager/updateProductInfo')?>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							    <label>Product ID</label>
							    <input type="text" class="form-control" name="productId" value="<?php echo $data->productId; ?>" disabled>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							    <label>Product Name</label>
							    <input type="text" class="form-control removeDisabled" name="productName" value="<?php echo $data->productName; ?>" disabled>
							  </div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							    <label>Quantity</label>
							    <input type="text" class="form-control" name="productQuantity" value="<?php echo $data->productQuantity; ?>" disabled>
							  </div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							    <label>Status</label>
							    <select name="productStatus" id="" class="form-control removeDisabled" disabled>
									
									<?php if($data->productStatus==1){?>
									<option value="1">Active</option>
									<option value="0">Inactive</option>
									<?php } else {?>
									<option value="0">Inactive</option>
									<option value="1">Active</option>
									<?php }?>
								</select>
							</div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Product Details</label>
							    <textarea type="text" class="form-control removeDisabled" name="productDetails" value="" disabled><?php echo $data->productDetails; ?></textarea> 
							 </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Note</label>
							    <textarea type="text" class="form-control removeDisabled" name="productNote" value="" disabled><?php echo $data->productNote; ?></textarea> 
							 </div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label>Average Buy Price</label>
							    <input type="text" class="form-control" name="" value="<?php echo $data->productPurchasePrice; ?>" disabled>
							 </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Selling Price</label>
							    <input type="text" class="form-control removeDisabled" name="productSalePrice" value="<?php echo $data->productSalePrice; ?>" disabled>
							 </div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Minimum Selling Price</label>
							    <input type="text" class="form-control removeDisabled" name="" value="<?php //echo $data->productPurchasePrice; ?>" disabled>
							 </div>
						</div>				
					</div>
					<input  class="form-control" name="productId" type="hidden" value="<?php echo $data->productId; ?>">
					<div class="row m-bottom-25">
						<div class="col-md-12">
							<button type="button" class="btn btn-primary" id="removeDisabledButton"><i class="fa fa-pencil"></i> Edit</button>
							<button type="submit" class="btn btn-success addDisabled hidden"><i class="fa fa-thumbs-up"></i> Save</button>
							<button type="button" class="btn btn-warning addDisabled hidden" id="addDisabledButton"><i class="fa fa-times"></i> Cancel</button>
							<button class="btn btn-danger" onclick="window.history.back();"><i class="fa fa-arrow-left"></i> Back</button>
						</div>	
					</div>
					<?php echo form_close() ?>
				</div>
				
			</div>
		</div>
	</div>	
<?php include('footer.php') ?>