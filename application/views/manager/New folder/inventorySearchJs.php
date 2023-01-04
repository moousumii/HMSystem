<!-- Product Search -->
<script type="text/javascript">
		// Ajax post
	$(document).ready(function() {
		$(".productSearchID").change(function(event) {
			event.preventDefault();
			alert("hi");
			var product_id = $("#inventorySearchProductID").val();
			var type_id = $("#inventorySearchTypeID").val();
			var client_id = $("#inventorySearchSupplierID").val();
			if(client_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "manager/ajax_getSearchProductInfo",
					dataType: 'json',
					data: {
						product_id: product_id,
						type_id: type_id,
						client_id: client_id,
					},
					success: function(res) {
						if (res) {
							
							if (res.status === true) {
								alert('working');
								var len = data.infos.length;
									//alert(len);
								var txt = "";
								if(len > 0){
									for(var i=0;i<len;i++){
										if(data.infos[i].productBarcode && data.infos[i].productName){
											
											txt += "<tr class='remove_tr'><td>"+data.infos[i].productBarcode+"</td><td>"+data.infos[i].productName+"</td><td>"+data.infos[i].groupName+"</td><td>"+data.infos[i].productSaleCounter+"</td><td>"+data.infos[i].productQuantity+"</td><td>"+data.infos[i].supplierCompanyName+"</td><td>"+data.infos[i].productAddedDate+"</td><td><a href='<?php echo base_url('admin/productDetails/"+data.infos[i].productID+"'); ?>' type='button' class='btn btn-sm btn-primary' data-toggle='tooltip' data-placement='top' title='Details'><i class='fa fa-info'></i></a></td></tr>";
											//alert(txt);
										}
									}
									if(txt != ""){
										$("#showInventorytable").append(txt);
									}
								}
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
<?php
	/*$data = array(
				'status'=>true, 
				'infos'=>$query
				);
		if('IS_AJAX')  
        {  
            //echo json_encode($data); //echo json string if ajax request  
            echo json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
        }  */
 ?>
