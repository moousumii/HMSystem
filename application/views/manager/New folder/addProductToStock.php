<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Product to Stock</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Product to Stock</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php');?>
	<?php echo form_open('manager/storeProducToStock'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Product Name</label>
									    <select class="form-control forselect2" name="productId" id="productNameID" value="" required >
										<option value="" disabled selected >Select Product</option>
										  <?php foreach($infos as $info): ?>
											<option value="<?php echo $info->productId ?>"><?php echo $info->productName ?></option>
										  <?php endforeach; ?>
										</select>
									  </div>
								</div>			
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
									    <label>Quantity</label>
									    <input type="text" class="form-control" id="productQuantityID" name="productQuantity" value="">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Total Cost</label>
									    <input type="text" class="form-control" id="productTotalCostID" name="productTotalCost" value="">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Unit Cost</label>
									    <input type="text" class="form-control" id="productUnitCostID" name="" value="">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Custom Unit Cost</label>
									    <input type="text" class="form-control" name="" id="productCustomUnitCostID" value="">
									</div>
								</div>		
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Previous Quantity</label>
									    <input type="text" class="form-control" id="productOldQuantityID" name="" value="" disabled>
										<input type="hidden" id="productOldUnitCostID"  value="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>New Quantity </label>
									    <input type="text" class="form-control" id="productTotalQuantityID" name="" value="" disabled>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>New Unit Cost</label>
									    <input type="text" class="form-control" id="productNewUnitCostID" name="" value="" disabled>
										<input type="hidden" id="productNewUnitCostHiddenID" name="productPurchasePrice" >
									</div>
								</div>		
							</div>
							<div class="row m-top-15">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
									<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
								</div>	
							</div>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
<?php include('footer.php') ?>