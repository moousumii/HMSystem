<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add New Product to Inventory</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add New Product to Inventory</li>
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
								<a href="<?php echo base_url('manager/productType')?>" type="button" class="btn btn-warning">Product Type</a>
							</div>							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php echo form_open('manager/storeNewProductToInventory'); ?>
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Product Name</label>
									    <input type="" class="form-control" name="productName" value="" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Product Type</label>
									    <select name="product_type_info_productTypeID" id="" class="form-control forselect2" required>
									    	<option value="0" selected disabled>Select an Option</option>
											<?php foreach($data_pro_type as $type){?>
												<option value="<?php echo $type->productTypeID;?>"><?php echo $type->productTypeName;?></option>
											<?php } ?>
										</select>
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Supplier</label>
									    <select name="supplier_info_productSupplierID" id="" class="form-control forselect2" required>
									    	<option value="0" selected disabled>Select an Option</option>
											<?php foreach($data_supplier as $supplier){ ?>				
												<option value="<?php echo $supplier->clientID;?>"> 
													<?php echo $supplier->clientContactName;?>
												</option>
											<?php } ?>
										</select>
									  </div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Product Description</label>
									    <textarea type="text" class="form-control" name="productDetails" value="" required></textarea>
									  </div>
								</div>	
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Sale Price</label>
									    <input type="text" class="form-control" name="productSalePrice" value="" required>
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Unit Name</label>
									    <input type="text" class="form-control" name="productUnitName" value="" required>
									  </div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Note</label>
									    <textarea type="text" class="form-control" name="productNote" value="" required></textarea>
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
					<?php echo form_close(); ?>
				</div>	
			</div>
		</div>
	</div>

	
	
<?php include('addCashAccountModal.php') ?>
<?php include('footer.php') ?>