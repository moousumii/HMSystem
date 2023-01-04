<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add New Return</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add New Return</li>
         </ol>
      </div>
   	</div>
	<?php echo form_open('manager/storeReturnProduct'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Client Name</label>
							    <select name="client_info_saleClientID" id="" class="form-control forselect2" required>
									<option value="" selected disabled>Select Customer</option>
									<?php foreach($clients as $client): ?>
									<option value="<?php echo $client->clientID ?>"><?php echo $client->clientContactName." - ".$client->clientContactNumber ?></option>
									<?php endforeach; ?>
								</select>
							</div>						
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label>Main Invoice</label>
								<input type="text" class="form-control" name="exchangeInvoiceId" value="" placeholder="Main Invoice">
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
				<div class="panel-heading">
					<h4 class="">Select Product to Return</h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Product Name</label>
							    <select name="" id="addReturnProductID" class="form-control forselect2 ">
							    	<option value="" selected disabled>Select Return Product</option>
							    	<?php foreach($products as $product): ?>
									<option value="<?php echo $product->productId ?>"><?php echo $product->productName; ?></option>
									<?php endforeach; ?>
							    </select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label>Quantity</label>
							    <input type="text" class="form-control ajaxInputField" id="addReturnProductQty" name="" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="button" id="addReturnProductBtn" class="btn btn-primary">Add</button>
						</div>
					</div>	
				</div>
				<div class="panel-body">
						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped">
								<thead>
									<tr class="active">
										<th>Product Name</th>
										<th>Quantity</th>
										<th>Price</th>
										<th>Amount</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody id="returnProductTable">
																		
								</tbody>
							</table>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="">Select Product to Exchange</h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Product Name</label>
							    <select name="" id="addExchangeProductID" class="form-control forselect2 ">
							    	<option value="" selected disabled>Select New Product</option>
							    	<?php foreach($products as $product): ?>
									<option value="<?php echo $product->productId ?>"><?php echo $product->productName; ?></option>
									<?php endforeach; ?>
							    </select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Quantity</label>
							    <input type="text" id="addExchangeProductQty" class="form-control ajaxInputField" name="" value="" >
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Buy Rate</label>
							    <input type="text" id="addExchangeProductBuyRateID" class="form-control ajaxInputField" name="" value="" >
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Special Rate </label>
							    <input type="text" id="addExchangeProductSpecialRate" class="form-control ajaxInputField" name="" value="" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="button" id="addExchangeProductBtn" class="btn btn-primary">Add</button>
						</div>
					</div>	
				</div>
				<div class="panel-body">
						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped">
								<thead>
									<tr class="active">
										<th>Product Name</th>
										<th>Quantity</th>
										<th>Price</th>
										<th>Amount</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody id="exchangeProductTable">		
								</tbody>
							</table>
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
						<div class="col-md-4">
							<div class="form-group">
							    <label>Total Return Value</label>
							    <input type="text" class="form-control" name="" id="totalReturnSubtotalID" value="0" disabled>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Total Exchange Value</label>
							    <input type="text" class="form-control" name="" id="totalExchangeSubtotalID" value="0" disabled>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="form-group">
							    <label>Adjusted Value</label>
							    <input type="text" class="form-control adjustValueID" name="" value="0" disabled>
								<input type="hidden" class="form-control adjustValueID" name="saleTotalAmount"  value="0" >
							</div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="fprm-group">
								<label for="">Return Option</label><br>
								<label class="radio-inline">
								  <input type="radio" name="paymentType" id="inlineRadio1" value="3"> Add to wallet
								</label>
								<label class="radio-inline">
								  <input type="radio" name="paymentType" id="inlineRadio2" value="5"> Return Amount (Cash/Cheque)
								</label>
								<label class="radio-inline">
								  <input type="radio" name="paymentType" id="inlineRadio3" value="4"> Exchange
								</label>
							</div>
						</div>	
					</div>
					<div class="row m-top-15">
						<div class="col-md-3">
							<button class="btn btn-primary" type="submit"><i class="fa fa-thumbs-up"></i> Done</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>	
<?php include('footer.php') ?>