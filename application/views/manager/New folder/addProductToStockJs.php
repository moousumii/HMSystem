<!-- add Product to stock -->
<script type="text/javascript">
		// Ajax post
	$(document).ready(function() {
		$("#productNameID").change(function(event) {
			event.preventDefault();
			var product_id = $("#productNameID").val();
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
								$("#productOldQuantityID").val(res.productQuantity);
								$("#productOldUnitCostID").val(res.productPurchasePrice);
								
								var quantity = $("input#productQuantityID").val();
								if(quantity){
									var oldQuantity = $("input#productOldQuantityID").val();
									var cost =$("input#productTotalCostID").val();
									var unitCost=cost/quantity;
									var totalQuantity=(+quantity)+(+oldQuantity);
									$("#productUnitCostID").val(unitCost);
									$("#productCustomUnitCostID").val(unitCost);
									$("#productTotalQuantityID").val(totalQuantity);
									var avg=quantity*$("input#productCustomUnitCostID").val();
									var oldAvg=($("#productOldQuantityID").val())*($("input#productOldUnitCostID").val());
									var sumAvg=(+avg)+(+oldAvg);
									var newUnitCost=(sumAvg)/($("#productTotalQuantityID").val());
									newUnitCost=newUnitCost.toFixed(2);
									$("#productNewUnitCostID").val(newUnitCost);
									$("#productNewUnitCostHiddenID").val(newUnitCost);
								}
							}
							else {
								jQuery("#quantity_errors").show();
								jQuery("#quantity_errors").html(res.errors);
								
							}
						}
					}
				});
			}
		});
	});
</script>
<script type="text/javascript">
		// Ajax post
	$(document).ready(function() {
		$("#productQuantityID").change(function(event) {
			event.preventDefault();
			//alert("working");
			var cost =$("input#productTotalCostID").val();
			if(cost){
				var quantity = $("input#productQuantityID").val();
				var oldQuantity = $("input#productOldQuantityID").val();
				var unitCost=cost/quantity;
				var totalQuantity=(+quantity)+(+oldQuantity);
				$("#productUnitCostID").val(unitCost);
				$("#productCustomUnitCostID").val(unitCost);
				$("#productTotalQuantityID").val(totalQuantity);
				var avg=quantity*$("input#productCustomUnitCostID").val();
				var oldAvg=($("#productOldQuantityID").val())*($("input#productOldUnitCostID").val());
				var sumAvg=(+avg)+(+oldAvg);
				var newUnitCost=(sumAvg)/($("#productTotalQuantityID").val());
				newUnitCost=newUnitCost.toFixed(2);
				$("#productNewUnitCostID").val(newUnitCost);
				$("#productNewUnitCostHiddenID").val(newUnitCost);
			}
		});
	});
</script>
<script type="text/javascript">
		// Ajax post
	$(document).ready(function() {
		$("#productTotalCostID").change(function(event) {
			event.preventDefault();
			//alert("working");
			var quantity = $("input#productQuantityID").val();
			if(quantity){
				var oldQuantity = $("input#productOldQuantityID").val();
				var cost =$("input#productTotalCostID").val();
				var unitCost=cost/quantity;
				var totalQuantity=(+quantity)+(+oldQuantity);
				$("#productUnitCostID").val(unitCost);
				$("#productCustomUnitCostID").val(unitCost);
				$("#productTotalQuantityID").val(totalQuantity);
				var avg=quantity*$("input#productCustomUnitCostID").val();
				var oldAvg=($("#productOldQuantityID").val())*($("input#productOldUnitCostID").val());
				var sumAvg=(+avg)+(+oldAvg);
				var newUnitCost=(sumAvg)/($("#productTotalQuantityID").val());
				newUnitCost=newUnitCost.toFixed(2);
				$("#productNewUnitCostID").val(newUnitCost);
				$("#productNewUnitCostHiddenID").val(newUnitCost);
			}
		});
	});
</script>
<script type="text/javascript">
		// Ajax post
	$(document).ready(function() {
		$("#productCustomUnitCostID").change(function(event) {
			event.preventDefault();
			//alert("working");
			var quantity = $("input#productQuantityID").val();
			var oldQuantity = $("input#productOldQuantityID").val();
			var cost =$("input#productTotalCostID").val();
			var unitCost=cost/quantity;
			var totalQuantity=(+quantity)+(+oldQuantity);
			$("#productUnitCostID").val(unitCost);
			//$("#productCustomUnitCostID").val(unitCost);
			$("#productTotalQuantityID").val(totalQuantity);
			var avg=quantity*$("input#productCustomUnitCostID").val();
			var oldAvg=($("#productOldQuantityID").val())*($("input#productOldUnitCostID").val());
			var sumAvg=(+avg)+(+oldAvg);
			var newUnitCost=(sumAvg)/($("#productTotalQuantityID").val());
			newUnitCost=newUnitCost.toFixed(2);
			$("#productNewUnitCostID").val(newUnitCost);
			$("#productNewUnitCostHiddenID").val(newUnitCost);
		});
	});
</script>