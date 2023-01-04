<!-- Product sale -->
<script type="text/javascript">
		// Ajax post
	$(document).ready(function() {
		$("#clientIdForInvoice").change(function(event) {
			event.preventDefault();
			//alert("hi");
			var client_id = $("#clientIdForInvoice").val();
			if(client_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_getCustomerInfo",
					dataType: 'json',
					data: {
						client_id: client_id,
					},
					success: function(res) {
						if (res) {
							
							if (res.status === true) {
								//alert(res.productQuantity);
								$("#clientContactNumberID").val(res.clientContactNumber);
								//$("#clientContactNumberID").attr('placeholder',res.clientContactNumber);
								$("#clientAddressID").val(res.clientAddress);
								var clientBalance=(+res.clientBalance)*(-1);
								//alert(clientBalance);
								$("#clientBalanceID").html(clientBalance);
								$("#clientDueID").val(clientBalance);
								
								/*other cost adjustment*/
								var transportCost = $("#transportCostID").val();
								var additionalCost = $("#additionalCostID").val();
								var discount = $("#discountID").val();
								var paidAmount = $("#paidAmountID").val();
								var subtotal=$("#totalSubtotalID").val();
								var totalBill=((+transportCost)+(+additionalCost)+(+subtotal))-(+discount);
								totalBill=totalBill.toFixed(2);
								$("#totalBillID").html(totalBill);
								var due=$("#clientDueID").val();
								var grandTotal=(+totalBill)+(+due);
								$("#grandTotalID").html(grandTotal);
								var totalDue=(+grandTotal)-(+paidAmount);
								$("#totalDueID").html(totalDue);
							
							}
						}
						else {
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#productIdForInvoice").autocomplete({
			minLength: 1,
			//alert("");
			source: function(req, add) {
				$.ajax({
					url: "<?php echo base_url(); ?>" + "manager/ajaxProductInfoSearch",
					dataType: 'json',
					type: 'POST',
					data: req,
					success: function(data) {
						if (data.response == "true") {
							add(data.message);
							console.log(data);
						}
					},
				});
			},
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#productIdForInvoice").change(function(event) {
			event.preventDefault();
			var product_id = $("#productIdForInvoice").val();
			//alert(product_id);
			if(product_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_productQuantityInfo",
					dataType: 'json',
					data: {
						product_id: product_id,
					},
					success: function(res) {
						if (res) {
							
							if (res.status === true) {
								//alert(res.productQuantity);
								$("#productQtyForInvoice").attr('placeholder',res.productQuantity);
								$("#productRateForInvoice").val(res.productPurchasePrice);
								$("#productSpecialRateForInvoice").val(res.productSalePrice);
							
							}
						}
						else {
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#addToCartBtn").click(function(event) {
			event.preventDefault();
			//alert("working");
			var product_id = $("#productIdForInvoice").val();
			var product_qty = $("#productQtyForInvoice").val();
			var product_rate= $("#productRateForInvoice").val();
			var product_special_rate = $("#productSpecialRateForInvoice").val();
			if(product_qty){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_addProductToCart",
					dataType: 'json',
					data: {
						product_id: product_id,
						product_qty: product_qty,
						product_rate: product_rate,
						product_special_rate: product_special_rate,
					},
					success: function(res) {
						if (res) {
							if (res.status === true) {
								if(res.past_buy === true){
									//alert(product_qty);
									var product_id = res.product_id;
									var quantity = res.quantity;
									var price = res.price;
									var salePrice = res.salePrice;
									var subtotal=salePrice*quantity;
									var qid="quantity_clmn"+product_id;
									var subid="subtotal_clmn"+product_id;
									$("#"+qid).html(quantity);
									$("#"+subid).html(subtotal);
									var total=salePrice*product_qty;
									//* for total price *//
									var old_totalPrice=$("#totalSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+total);
									old_totalPrice=old_totalPrice.toFixed(2);
									$(".totalSubtotalClass").html(old_totalPrice);
									$("#totalSubtotalID").val(old_totalPrice);
										
								}
								else{
									var product_id = res.product_id;
									var quantity = res.quantity;
									var total_quantity = res.total_quantity;
									var price = res.price;
									var salePrice = res.salePrice;
									var name = res.name;
									var rowid = res.rowid;
									var subtotal = salePrice*quantity;
									var table = document.getElementById("productTable");
									var table_len = (table.rows.length);
									var row = table.insertRow(table_len).outerHTML = "<tr id='row" + product_id + "' ><td id='product_clmn" + table_len + "'>" + product_id + "</td><td id='name_clmn" + table_len + "'>" + name + "</td><td  id='quantity_clmn" + product_id + "'>"+quantity+"</td><td id='price_clmn" + product_id + "'>" + salePrice + "</td><td id='subtotal_clmn" + product_id + "'>" + subtotal + "</td><td id='remove_clmn" + table_len + "' ><a type='button' id='my_cart_table_close' onclick='delete_row(\""+ rowid + "\","+product_id+","+salePrice+","+quantity+")' ><i class='fa fa-remove'></i></a></td></tr>";
									
									//* for total price *//
									var old_totalPrice=$("#totalSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+subtotal);
									old_totalPrice=old_totalPrice.toFixed(2);
									$(".totalSubtotalClass").html(old_totalPrice);
									$("#totalSubtotalID").val(old_totalPrice);
									
								}
								
								/*other cost adjustment*/
								var transportCost = $("#transportCostID").val();
								var additionalCost = $("#additionalCostID").val();
								var discount = $("#discountID").val();
								var paidAmount = $("#paidAmountID").val();
								var subtotal=$("#totalSubtotalID").val();
								var totalBill=((+transportCost)+(+additionalCost)+(+subtotal))-(+discount);
								totalBill=totalBill.toFixed(2);
								$("#totalBillID").html(totalBill);
								var due=$("#clientDueID").val();
								var grandTotal=(+totalBill)+(+due);
								$("#grandTotalID").html(grandTotal);
								var totalDue=(+grandTotal)-(+paidAmount);
								$("#totalDueID").html(totalDue);
								$(".ajaxInputField").val("");
								$("#productQtyForInvoice").attr('placeholder',"");
							}
						}
						else {
							alert("Select a Quantity");
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
			else{
				alert("Select a Quantity");
				jQuery("#quantity_errors").show();
				jQuery("#quantity_errors").html("Please Select a Quantity");
			}
		});
	});
</script>
<script type="text/javascript">
	function delete_row(row_id,no,price,qty) {
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "manager/ajaxCartRemove",
			dataType: 'json',
			data: {
				row_id: row_id,
				//quantity: quantity,
			},
			success: function(res) {
				if (res) {
					// Show Entered Value
						if (res.status === true) {
							var sub_total=qty*price;
							sub_total=sub_total.toFixed(2);
							
							//* for total price *//
							var old_totalPrice=$("#totalSubtotalID").val();
							old_totalPrice=(+old_totalPrice)-(+sub_total);
							old_totalPrice=old_totalPrice.toFixed(2);
							$(".totalSubtotalClass").html(old_totalPrice);
							$("#totalSubtotalID").val(old_totalPrice);
							document.getElementById("row" + no + "").outerHTML = "";
							
							/*other cost adjustment*/
							var transportCost = $("#transportCostID").val();
							var additionalCost = $("#additionalCostID").val();
							var discount = $("#discountID").val();
							var paidAmount = $("#paidAmountID").val();
							var subtotal=$("#totalSubtotalID").val();
							var totalBill=((+transportCost)+(+additionalCost)+(+subtotal))-(+discount);
							totalBill=totalBill.toFixed(2);
							$("#totalBillID").html(totalBill);
							var due=$("#clientDueID").val();
							var grandTotal=(+totalBill)+(+due);
							$("#grandTotalID").html(grandTotal);
							var totalDue=(+grandTotal)-(+paidAmount);
							$("#totalDueID").html(totalDue);
							
						}
						
					} else {
						//jQuery("#quantity_errors").show();
						//jQuery("#quantity_errors").html(res.errors);
					}
				}
		});
		
	}
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".otherCosts").change(function(event) {
			event.preventDefault();
			var transportCost = $("#transportCostID").val();
			var additionalCost = $("#additionalCostID").val();
			var discount = $("#discountID").val();
			var paidAmount = $("#paidAmountID").val();
			var subtotal=$("#totalSubtotalID").val();
			var totalBill=((+transportCost)+(+additionalCost)+(+subtotal))-(+discount);
			totalBill=totalBill.toFixed(2);
			$("#totalBillID").html(totalBill);
			var due=$("#clientDueID").val();
			var grandTotal=(+totalBill)+(+due);
			$("#grandTotalID").html(grandTotal);
			var totalDue=(+grandTotal)-(+paidAmount);
			$("#totalDueID").html(totalDue);
			
		});
	});
</script>
<!-- Quick Sale -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#productIdForQuickSale").autocomplete({
			minLength: 1,
			//alert("");
			source: function(req, add) {
				$.ajax({
					url: "<?php echo base_url(); ?>" + "manager/ajaxProductInfoSearch",
					dataType: 'json',
					type: 'POST',
					data: req,
					success: function(data) {
						if (data.response == "true") {
							add(data.message);
							console.log(data);
						}
					},
				});
			},
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#productIdForQuickSale").change(function(event) {
			event.preventDefault();
			var product_id = $("#productIdForQuickSale").val();
			//alert(product_id);
			if(product_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_productQuantityInfo",
					dataType: 'json',
					data: {
						product_id: product_id,
					},
					success: function(res) {
						if (res) {
							
							if (res.status === true) {
								//alert(res.productQuantity);
								$("#productQtyForInvoice").attr('placeholder',res.productQuantity);
								$("#productRateForInvoice").val(res.productSalePrice);
								$("#productSpecialRateForInvoice").val(res.productSalePrice);
								$("#productBuyPriceForInvoice").val(res.productPurchasePrice);
							
							}
						}
						else {
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#addQuickSaleToCartBtn").click(function(event) {
			event.preventDefault();
			//alert("working");
			var product_id = $("#productIdForQuickSale").val();
			var product_qty = $("#productQtyForInvoice").val();
			var product_rate= $("#productRateForInvoice").val();
			var product_special_rate = $("#productSpecialRateForInvoice").val();
			var product_buy_price = $("#productBuyPriceForInvoice").val();
			if(product_qty && product_buy_price ){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_addQuickSaleProductToCart",
					dataType: 'json',
					data: {
						product_id: product_id,
						product_qty: product_qty,
						product_rate: product_rate,
						product_special_rate: product_special_rate,
						product_buy_price: product_buy_price,
					},
					success: function(res) {
						if (res) {
							if (res.status === true) {
								if(res.past_buy === true){
									//alert(product_qty);
									var product_id = res.product_id;
									var quantity = res.quantity;
									var price = res.price;
									var salePrice = res.salePrice;
									var subtotal=salePrice*quantity;
									var qid="quantity_clmn"+product_id;
									var subid="subtotal_clmn"+product_id;
									$("#"+qid).html(quantity);
									$("#"+subid).html(subtotal);
									var total=salePrice*product_qty;
									//* for total price *//
									var old_totalPrice=$("#totalSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+total);
									old_totalPrice=old_totalPrice.toFixed(2);
									$(".totalSubtotalClass").html(old_totalPrice);
									$("#totalSubtotalID").val(old_totalPrice);
										
								}
								else{
									var product_id = res.product_id;
									var quantity = res.quantity;
									var total_quantity = res.total_quantity;
									var price = res.price;
									var salePrice = res.salePrice;
									var name = res.name;
									var rowid = res.rowid;
									var subtotal = salePrice*quantity;
									var table = document.getElementById("productTable");
									var table_len = (table.rows.length);
									var row = table.insertRow(table_len).outerHTML = "<tr id='row" + product_id + "' ><td id='product_clmn" + table_len + "'>" + product_id + "</td><td id='name_clmn" + table_len + "'>" + name + "</td><td  id='quantity_clmn" + product_id + "'>"+quantity+"</td><td id='price_clmn" + product_id + "'>" + salePrice + "</td><td id='subtotal_clmn" + product_id + "'>" + subtotal + "</td><td id='remove_clmn" + table_len + "' ><a type='button' id='my_cart_table_close' onclick='delete_row(\""+ rowid + "\","+product_id+","+salePrice+","+quantity+")' ><i class='fa fa-remove'></i></a></td></tr>";
									
									//* for total price *//
									var old_totalPrice=$("#totalSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+subtotal);
									old_totalPrice=old_totalPrice.toFixed(2);
									$(".totalSubtotalClass").html(old_totalPrice);
									$("#totalSubtotalID").val(old_totalPrice);
									
								}
								
								/*other cost adjustment*/
								var transportCost = $("#transportCostID").val();
								var additionalCost = $("#additionalCostID").val();
								var discount = $("#discountID").val();
								var paidAmount = $("#paidAmountID").val();
								var subtotal=$("#totalSubtotalID").val();
								var totalBill=((+transportCost)+(+additionalCost)+(+subtotal))-(+discount);
								totalBill=totalBill.toFixed(2);
								$("#totalBillID").html(totalBill);
								var due=$("#clientDueID").val();
								var grandTotal=(+totalBill)+(+due);
								$("#grandTotalID").html(grandTotal);
								var totalDue=(+grandTotal)-(+paidAmount);
								$("#totalDueID").html(totalDue);
								$(".ajaxInputField").val("");
								$("#productQtyForInvoice").attr('placeholder',"");
							}
						}
						else {
							alert("Select a Quantity");
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
			else{
				alert("Select a Quantity");
				jQuery("#quantity_errors").show();
				jQuery("#quantity_errors").html("Please Select a Quantity");
			}
		});
	});
</script>
<!-- Return Product -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#addReturnProductBtn").click(function(event) {
			event.preventDefault();
			
			var product_id = $("#addReturnProductID").val();
			var product_qty = $("#addReturnProductQty").val();
			//var product_rate= $("#productRateForInvoice").val();
			//var product_special_rate = $("#productSpecialRateForInvoice").val();
			//var product_buy_price = $("#productBuyPriceForInvoice").val();
			if(product_qty){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_addReturnProductToCart",
					dataType: 'json',
					data: {
						product_id: product_id,
						product_qty: product_qty,
						//product_rate: product_rate,
						//product_special_rate: product_special_rate,
						//product_buy_price: product_buy_price,
					},
					success: function(res) {
						if (res) {
							if (res.status === true) {
								if(res.past_buy === true){
									//alert(product_qty);
									var product_id = res.product_id;
									var quantity = res.quantity;
									var price = res.price;
									var salePrice = res.price;
									var subtotal=salePrice*quantity;
									var qid="quantity_clmn"+product_id;
									var subid="subtotal_clmn"+product_id;
									$("#"+qid).html(quantity);
									$("#"+subid).html(subtotal);
									var total=salePrice*product_qty;
									//* for total price *//
									var old_totalPrice=$("#totalReturnSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+total);
									old_totalPrice=old_totalPrice.toFixed(2);
									$("#totalReturnSubtotalID").val(old_totalPrice);
									var exchangeTotal=$("#totalExchangeSubtotalID").val();
									var adjustValue=(+exchangeTotal)-(+old_totalPrice);
									adjustValue=adjustValue.toFixed(2);
									$(".adjustValueID").val(adjustValue);
									//$("#adjustValueHidenID").val(adjustValue);
										
								}
								else{
									var product_id = res.product_id;
									var quantity = res.quantity;
									var total_quantity = res.total_quantity;
									var price = res.price;
									var salePrice = res.price;
									var name = res.name;
									var rowid = res.rowid;
									var subtotal = salePrice*quantity;
									var table = document.getElementById("returnProductTable");
									var table_len = (table.rows.length);
									var row = table.insertRow(table_len).outerHTML = "<tr id='row" + product_id + "' ><td id='name_clmn" + table_len + "'>" + name + "</td><td  id='quantity_clmn" + product_id + "'>"+quantity+"</td><td id='price_clmn" + product_id + "'>" + salePrice + "</td><td id='subtotal_clmn" + product_id + "'>" + subtotal + "</td><td id='remove_clmn" + table_len + "' ><a type='button' id='my_cart_table_close' onclick='delete_return_row(\""+ rowid + "\","+product_id+","+salePrice+","+quantity+",0)' ><i class='fa fa-remove'></i></a></td></tr>";
									
									//* for total price *//
									var old_totalPrice=$("#totalReturnSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+subtotal);
									old_totalPrice=old_totalPrice.toFixed(2);
									$("#totalReturnSubtotalID").val(old_totalPrice);
									var exchangeTotal=$("#totalExchangeSubtotalID").val();
									var adjustValue=(+exchangeTotal)-(+old_totalPrice);
									adjustValue=adjustValue.toFixed(2);
									$(".adjustValueID").val(adjustValue);
									//$("#adjustValueHidenID").val(adjustValue);
									
								}
								$(".ajaxInputField").val("");
							}
						}
						else {
							alert("Select a Quantity");
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
			else{
				alert("Select a Quantity");
				jQuery("#quantity_errors").show();
				jQuery("#quantity_errors").html("Please Select a Quantity");
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#addExchangeProductID").change(function(event) {
			event.preventDefault();
			var product_id = $("#addExchangeProductID").val();
			//alert(product_id);
			if(product_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_productQuantityInfo",
					dataType: 'json',
					data: {
						product_id: product_id,
					},
					success: function(res) {
						if (res) {
							
							if (res.status === true) {
								//alert(res.productQuantity);
								$("#addExchangeProductQty").attr('placeholder',res.productQuantity);
								$("#addExchangeProductSpecialRate").val(res.productSalePrice);
								$("#addExchangeProductBuyRateID").val(res.productPurchasePrice);
							
							}
						}
						else {
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#addExchangeProductBtn").click(function(event) {
			event.preventDefault();
			
			var product_id = $("#addExchangeProductID").val();
			var product_qty = $("#addExchangeProductQty").val();
			//var product_rate= $("#productRateForInvoice").val();
			var product_special_rate = $("#addExchangeProductSpecialRate").val();
			//var product_buy_price = $("#productBuyPriceForInvoice").val();
			if(product_qty){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_addExchangeProductToCart",
					dataType: 'json',
					data: {
						product_id: product_id,
						product_qty: product_qty,
						product_special_rate: product_special_rate,
					},
					success: function(res) {
						if (res) {
							if (res.status === true) {
								if(res.past_buy === true){
									//alert(product_qty);
									var product_id = res.product_id;
									var quantity = res.quantity;
									var salePrice = res.price;
									var subtotal=salePrice*quantity;
									var qid="quantity_clmn"+product_id;
									var subid="subtotal_clmn"+product_id;
									$("#"+qid).html(quantity);
									$("#"+subid).html(subtotal);
									var total=salePrice*product_qty;
									//* for total price *//
									var old_totalPrice=$("#totalExchangeSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+total);
									old_totalPrice=old_totalPrice.toFixed(2);
									$("#totalExchangeSubtotalID").val(old_totalPrice);
									var returnTotal=$("#totalReturnSubtotalID").val();
									var adjustValue=(+old_totalPrice)-(+returnTotal);
									adjustValue=adjustValue.toFixed(2);
									$(".adjustValueID").val(adjustValue);
									//$("#adjustValueHidenID").val(adjustValue);
										
								}
								else{
									var product_id = res.product_id;
									var quantity = res.quantity;
									var total_quantity = res.total_quantity;
									var price = res.price;
									var salePrice = res.price;
									var name = res.name;
									var rowid = res.rowid;
									var subtotal = salePrice*quantity;
									var table = document.getElementById("exchangeProductTable");
									var table_len = (table.rows.length);
									var row = table.insertRow(table_len).outerHTML = "<tr id='row" + product_id + "' ><td id='name_clmn" + table_len + "'>" + name + "</td><td  id='quantity_clmn" + product_id + "'>"+quantity+"</td><td id='price_clmn" + product_id + "'>" + salePrice + "</td><td id='subtotal_clmn" + product_id + "'>" + subtotal + "</td><td id='remove_clmn" + table_len + "' ><a type='button' id='my_cart_table_close' onclick='delete_return_row(\""+ rowid + "\","+product_id+","+salePrice+","+quantity+",1)' ><i class='fa fa-remove'></i></a></td></tr>";
									
									//* for total price *//
									var old_totalPrice=$("#totalExchangeSubtotalID").val();
									old_totalPrice=(+old_totalPrice)+(+subtotal);
									old_totalPrice=old_totalPrice.toFixed(2);
									$("#totalExchangeSubtotalID").val(old_totalPrice);
									var returnTotal=$("#totalReturnSubtotalID").val();
									var adjustValue=(+old_totalPrice)-(+returnTotal);
									adjustValue=adjustValue.toFixed(2);
									$(".adjustValueID").val(adjustValue);
									//$("#adjustValueHidenID").val(adjustValue);
									
								}
								$(".ajaxInputField").val("");
							}
						}
						else {
							alert("Select a Quantity");
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
			else{
				alert("Select a Quantity");
				jQuery("#quantity_errors").show();
				jQuery("#quantity_errors").html("Please Select a Quantity");
			}
		});
	});
</script>
<script type="text/javascript">
	function delete_return_row(row_id,no,price,qty,type) {
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "manager/ajaxCartRemove",
			dataType: 'json',
			data: {
				row_id: row_id,
				//quantity: quantity,
			},
			success: function(res) {
				if (res) {
					// Show Entered Value
						if (res.status === true) {
							var sub_total=qty*price;
							sub_total=sub_total.toFixed(2);
							
							//* for total price *//
							var returnTotal=$("#totalReturnSubtotalID").val();
							var exchangeTotal=$("#totalExchangeSubtotalID").val();
							if(type==0){
								returnTotal=(+returnTotal)-(+sub_total);
								returnTotal=returnTotal.toFixed(2);
								$("#totalReturnSubtotalID").val(returnTotal);
							}
							else if(type==1){
								exchangeTotal=(+exchangeTotal)-(+sub_total);
								exchangeTotal=exchangeTotal.toFixed(2);
								$("#totalExchangeSubtotalID").val(returnTotal);
							}
							var adjustValue=(+exchangeTotal)-(+returnTotal);
							adjustValue=adjustValue.toFixed(2);
							$(".adjustValueID").val(adjustValue);
							//$("#adjustValueHidenID").val(adjustValue);
							document.getElementById("row" + no + "").outerHTML = "";
							
						}
						
					} else {
						//jQuery("#quantity_errors").show();
						//jQuery("#quantity_errors").html(res.errors);
					}
				}
		});
		
	}
</script>
<!-- ReceivedPaidPaymentForm -->
<script type="text/javascript">
		// Ajax post
	$(function() {
		$("#paymentTypeID").change(function() {
			//$("#storeReceivedPaidPaymentForm").reset();
			document.getElementById("storeReceivedPaidPaymentForm").reset();
		});
	});

</script>

<script type="text/javascript">
		// Ajax post
	$(document).ready(function() {
		$(".transectionClientClass").change(function(event) {
			event.preventDefault();
			//alert("hi");
			var client_id = $(".transectionClientClass").val();
			if(client_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_getCustomerInfo",
					dataType: 'json',
					data: {
						client_id: client_id,
					},
					success: function(res) {
						if (res) {
							
							if (res.status === true) {
								$("#clientContactNumberID").val(res.clientContactNumber);
								$("#clientAddressID").val(res.clientAddress);
								var clientBalance=(+res.clientBalance)*(-1);
								$("#clientBalanceID").val(clientBalance);
								var paidAmount = $("#transectionPaidAmountID").val();
								
							}
						}
						else {
							jQuery("#quantity_errors").show();
							jQuery("#quantity_errors").html(res.errors);
							
						}
					}
				});
			}
		});
	});
</script>


