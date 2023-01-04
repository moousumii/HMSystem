<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Show Inventory</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Show Inventory</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 m-bottom-10 m-top-10">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/addProductToStock')?>" type="button" class="btn btn-warning">Add Product</a>
								<a href="<?php echo base_url('manager/productType')?>" type="button" class="btn btn-warning">Product Type</a>
								<a href="<?php echo base_url('manager/transferProduct')?>" type="button" class="btn btn-warning">Transfer Product</a>
							</div>							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<?php echo form_open('manager/showInventory'); ?>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Product Name</label>
									   	<select name="productId" id="inventorySearchProductID"  class="form-control forselect2 productSearchID ">
									    	<option value="">Select an Option</option>
									    	<?php foreach ($pName as  $value) {
									    		
									    	?>
									    	<option value="<?php echo $value->productId ?>"><?php echo $value->productName; ?></option>
									    	<?php } ?>
									    </select>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
									    <label>Type</label>
									   	<select name="productType" id="inventorySearchTypeID" class="form-control forselect2 productSearchID " >
									    	<option value="">Select an Option</option>
									    	<?php foreach ($pType as  $value) {
									    		
									    	?>
									    	<option value="<?php echo $value->productTypeId ?>"><?php echo $value->productTypeName; ?></option>
									    	<?php } ?>
									    </select>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
									    <label>Supplier</label>
									   	<select name="supplierId" id="inventorySearchSupplierID" class="form-control forselect2 productSearchID " >
									    	<option value="">Select an Option</option>
									    	<?php foreach ($sName as  $value1) {
									    		
									    	?>
									    	<option value="<?php echo $value1->clientID ?>"><?php echo $value1->clientContactName; ?></option>
									    	<?php } ?>
									    </select>
									</div>
								</div>
							</div>
							<div class="row m-bottom-25">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
									<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
								</div>	
							</div>
							<?php echo form_close(); ?>

							<div class="row">
								<div class="col-md-12 m-top-15">
									<table class="table table-striped">
										<thead>
											<tr class="active">
												<th>Product ID</th>
												<th>Product Name</th>
												<th>Product Type</th>
												<th>Amount in Stock</th>
												<th>Details</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($pName as  $info) {
												
											?>
											<tr>
												<td><?php echo $info->productId; ?></td>
												<td><?php echo $info->productName; ?></td>
												<td><?php echo $info->productTypeName; ?> </td>
												<td><?php echo $info->productQuantity?></td>
												<td>
													<a href="<?php echo base_url("manager/productDetails/{$info->productId}")?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
												</td>
											</tr>	
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>

	
	
<?php include('addCashAccountModal.php') ?>
<?php include('footer.php') ?>