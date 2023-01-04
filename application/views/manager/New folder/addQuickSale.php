<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Quick Sale</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Quick Sale</li>
         </ol>
      </div>
   	</div>
	<?php echo form_open('manager/storeQuickSale'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 m-bottom-10 m-top-10">
							<div class="pull-right">
								<a href="<?php echo base_url('manager/addClients') ?>" class="btn btn-warning">Add New Client</a>
							</div>
							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label>Client Name</label>
							    <select name="client_info_saleClientID" id="clientIdForInvoice" class="form-control forselect2" required>
									<option value="" selected disabled>Select an Option</option>
									<?php foreach($clients as $client): ?>
									<option value="<?php echo $client->clientID ?>"><?php echo $client->clientContactName." - ".$client->clientContactNumber ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
							    <label>Client Contact No.</label>
							    <input type="text" id="clientContactNumberID" class="form-control" name="" value="">
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Client Address</label>
							    <textarea type="text" id="clientAddressID" class="form-control input-lg" name="" value=""> </textarea>
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
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							    <label>Product</label>
							    <input type="text" id="productIdForQuickSale" class="form-control ajaxInputField" name="" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							    <label>Quantity</label>
							    <input type="text" id="productQtyForInvoice" class="form-control ajaxInputField" name="" value="">
							  </div>
						</div>	
						<div class="col-md-3">
							<div class="form-group">
							    <label>Sale Rate</label>
							    <input type="text" class="form-control ajaxInputField" id="productRateForInvoice" name="" value="" disabled>
							</div>
						</div>	
						<div class="col-md-3">
							<div class="form-group">
							    <label>Special Rate</label>
							    <input type="text" id="productSpecialRateForInvoice"  class="form-control ajaxInputField" name="" value="" >
							</div>
						</div>	
						<div class="col-md-3">
							<div class="form-group">
							    <label>Buy Price</label>
							    <input type="text" id="productBuyPriceForInvoice"  class="form-control ajaxInputField" name="" value="">
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-3">
							<button class="btn btn-primary" id="addQuickSaleToCartBtn" >Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="panel-body">
						
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped">
								<thead>
									<tr class="active">
										<th>SL</th>
										<th>Details</th>
										<th>Rate</th>
										<th>Quantity</th>
										<th>Amount</th>
										<th>Remove</th>
									</tr>
								</thead>
								<?php 
									$totalsubtotal=0; 
								?>
								<tbody id="productTable">
									<?php if($cart=$this->cart->contents()){ ?>
									<?php foreach($cart as $item): ?>
										<tr id="row<?php echo $item['id'] ?>">
											<td id="productclmn<?php echo $item['id'] ?>"><?php echo $item['id'] ?></td>
											<td id=""><?php echo $item['name'] ?></td>
											<td><?php echo $item['qty'] ?></td>
											<td><?php echo $item['salePrice'] ?></td>
											<td><?php echo ($item['qty']*$item['salePrice']); ?></td>
											<td><a type="button" onClick="delete_row('<?php echo $item['rowid'] ?>', '<?php echo $item['id'] ?>', '<?php echo $item['salePrice'] ?>', '<?php echo $item['qty'] ?>')" ><i class="fa fa-times"></i></a></td>
										</tr>	
									<?php 
										//$totalProductQty=$totalProductQty+$item['qty']; 
										$totalsubtotal=$totalsubtotal+($item['qty']*$item['salePrice']); 
									?>
									<?php endforeach ; ?>
									<?php } ?>
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
						<div class="col-md-3">
							<div class="form-group">
							    <label>Transport Cost</label>
							    <input type="text" class="form-control otherCosts" name="transportCost" id="transportCostID" value="0">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							    <label>Additional Cost</label>
							    <input type="text" class="form-control otherCosts" name="additionalCost" id="additionalCostID" value="0">
							</div>
						</div>	
						<div class="col-md-3">
							<div class="form-group">
							    <label>Discount</label>
							    <input type="text" class="form-control otherCosts" name="saleTotalDiscount" id="discountID" value="0">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							    <label>Paid Amount </label>
							    <input type="text" class="form-control otherCosts" name="receivedTotal" value="0" id="paidAmountID">
							</div>
						</div>	

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Last 5 Transaction</h4>
						</div>
						<div class="panel-body">
							<table class="table table-striped">
								<thead>
									<tr class="active">
										<th>Date</th>
										<th>Details</th>
										<th>Amount</th>
										<th>Balance</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>12-05-2017</td>
										<td>5 ton Rod</td>
										<td>120590</td>
										<td>120590</td>
									</tr>
									<tr>
										<td>12-05-2017</td>
										<td>5 ton Rod</td>
										<td>120590</td>
										<td>120590</td>
									</tr>
									<tr>
										<td>12-05-2017</td>
										<td>5 ton Rod</td>
										<td>120590</td>
										<td>120590</td>
									</tr>
									<tr>
										<td>12-05-2017</td>
										<td>5 ton Rod</td>
										<td>120590</td>
										<td>120590</td>
									</tr>
									<tr>
										<td>12-05-2017</td>
										<td>5 ton Rod</td>
										<td>120590</td>
										<td>120590</td>
									</tr>

								</tbody>
							</table>
						</div>	
					</div>
				</div>
				<div class="col-md-4">
					<input type="hidden" id="totalSubtotalID" value="<?php echo $totalsubtotal; ?>" name="productSubtotal" class="" />
					<input type="hidden" id="clientDueID" value="0" class="" />
					<ul class="list-group">
					  <li class="list-group-item">Subtotal<span class="pull-right totalSubtotalClass"><?php echo $totalsubtotal; ?></span></li>
					  <li class="list-group-item">Total Bill <span class="pull-right" id="totalBillID"><?php echo $totalsubtotal; ?></span></li>
					  <li class="list-group-item" >Previous Due <span class="pull-right" id="clientBalanceID">0</span></li>
					  <li class="list-group-item">Grand Total <span class="pull-right" id="grandTotalID"><?php echo $totalsubtotal; ?></span></li>
					  <li class="list-group-item">Total Due <span class="pull-right" id="totalDueID">0</span></li>
					</ul>
				</div>
				<div class="col-md-3 pull-right">
					<button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-thumbs-up"></i> Done</button>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
<?php include('footer.php') ?>