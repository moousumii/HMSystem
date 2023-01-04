<script>

	$(function(){ 
		/* Zone Change */

		$('#selectZoneID').change(function(){
			var zone_id = $('#selectZoneID').val();
			
			if(zone_id){
				$('.removablebuilding').remove();
				$('.zoneClass').val("");
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getAllBuldingIdForZone",
					dataType: 'json',
					data: {
					   zone_id:zone_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								var len = res.infos.length;
								for(var i=0;i<len;i++){
									$('#selectBuldingID')
									.append('<option class="removablebuilding" value="'+res.infos[i].buildingId+'"> '+res.infos[i].buildingNumber+' </option>');
								}
								
							}
							else {
								alert("Pleast Try Again");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Zone First");
			}
		});
		/* Building Change */

		$('#selectBuldingID').change(function(){
			var building_id = $('#selectBuldingID').val();
			if(building_id){
				$('.removableFloor').remove();
				$('.buildingClass').val("");
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getAllFloorIdForBuilding",
					dataType: 'json',
					data: {
					   building_id:building_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								var len = res.infos.length;
								for(var i=0;i<len;i++){
									$('#selectFloorID')
									.append('<option class="removablebuilding removableFloor" value="'+res.infos[i].floorId+'"> '+res.infos[i].floorNumber+' </option>');
								}
								
							}
							else {
								//alert("No Floor has Found");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Bilding First");
			}
		});
		/* Floor Change */

		$('#selectFloorID').change(function(){
			var floor_id = $('#selectFloorID').val();
			//alert(floor_id);
			if(floor_id){
				$('.removableUnit').remove();
				$('.floorClass').val("");
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getAllUnitIdForFloor",
					dataType: 'json',
					data: {
					   floor_id:floor_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								var len = res.infos.length;
								for(var i=0;i<len;i++){
									$('#selectUnitID')
									.append('<option class="removablebuilding removableFloor removableUnit" value="'+res.infos[i].unitId+'"> '+res.infos[i].unitNumber+' </option>');
								}
								
							}
							else {
								//alert("No Floor has Found");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A floor First");
			}
		});
		/* Unit Change */

		$('#selectUnitID').change(function(){
			var unit_id = $('#selectUnitID').val();
			//alert(unit_id);
			if(unit_id){
				$('.removableRoom').remove();
				$('.unitClass').val("");
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getAllRoomIdForUnit",
					dataType: 'json',
					data: {
					   unit_id:unit_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								var len = res.infos.length;
								for(var i=0;i<len;i++){
									$('#selectRoomID')
									.append('<option class="removablebuilding removableFloor removableUnit removableRoom" value="'+res.infos[i].roomId+'"> '+res.infos[i].roomNumber+' </option>');
								}
								
							}
							else {
								//alert("No Floor has Found");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Bilding First");
			}
		});

		/*Room Change*/
		$('#selectRoomID').change(function(){
			var room_id = $('#selectRoomID').val();
			//alert(unit_id);
			if(room_id){
				$('.removableSeat').remove();
				$('.roomClass').val("");
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getAllSeatIdForRoom",
					dataType: 'json',
					data: {
					   room_id:room_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								var len = res.infos.length;
								for(var i=0;i<len;i++){
									$('#selectSeatID')
									.append('<option class="removablebuilding removableFloor removableUnit removableRoom removableSeat" value="'+res.infos[i].seatId+'"> '+res.infos[i].seatNumber+' </option>');
								}
								
							}
							else {
								//alert("No Floor has Found");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Unit First");
			}
		});

		/* seat type change */
		$('#seatTypeID').change(function(){
			var type_id = $('#seatTypeID').val();
			//alert(unit_id);
			if(type_id){
				//$('#seatTypeID').val(0);
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getSeatAmountByType",
					dataType: 'json',
					data: {
					   type_id:type_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								//alert(res.amount);
								$('.seatRentAmount').val(res.amount);
							}
							
						}
					}
				});
			}
			else{
				alert("Please Select A Seat Type");
			}
		});
		
		/* Zone Change for student seats */

		$('#selectSeatZoneID').change(function(){
			var zone_id = $('#selectSeatZoneID').val();
			//alert("working")
			if(zone_id){
				$('.removeSeat').remove();
				$('#studentSeatID').val(0);
				$('#seatRentID').val("");
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getAllSeatIdForZone",
					dataType: 'json',
					data: {
					   zone_id:zone_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								var len = res.infos.length;
								for(var i=0;i<len;i++){
									$('#studentSeatID')
									.append('<option class="removeSeat" value="'+res.infos[i].seatId+'"> '+res.infos[i].seatNumber+' </option>');
								}
								
							}
							else {
								alert("No Seat is avaiable");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Zone First");
			}
		});

		$('#studentSeatID').change(function(){
			var seat_id = $('#studentSeatID').val();
			
			if(seat_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getSeatRent",
					dataType: 'json',
					data: {
					   seat_id:seat_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								$('#seatRentID').val(res.rentAmount);
								$('#seatNumberID').val(res.seatNumber);
							}
							else {
								alert("Seat Rent not found");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Zone First");
			}
		});
		

		$('#selectSeatID').change(function(){
			var seat_id = $('#selectSeatID').val();
			
			if(seat_id){
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getSeatRent",
					dataType: 'json',
					data: {
					   seat_id:seat_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								$('#seatRentID').val(res.rentAmount);
								$('#seatNumberID').val(res.seatNumber);
							}
							else {
								alert("Seat Rent not found");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Zone First");
			}
		});
		
		
		$(function(){
			$('.floorInfo').hide();
			$('#floorNumberID').change(function(){
				$('.floorInfo').show();
				$('.removable').remove();
				var floor_number = $('#floorNumberID').val();
				//alert(floor_number);
				for(var i=0;i<floor_number;i++){
					$('.floorInfos')
					.append('<div class="row removable m-bottom-15"><div class="col-md-12"><div class="row"><div class="col-md-12"><div class="form-group" ><label> Floor No</label><input type="text" class="form-control" name="floorNumber'+i+'" required/></div></div></div><div class="row"><div class="col-md-12"><div class="form-group"><label>Floor Note</label><textarea name="floorNote'+i+'" id=""rows="3" class="form-control"></textarea></div></div></div><hr/></div></div>');
				}
				
			});
		});

		$(function(){
			$('.unitInfo').hide();
			$('#unitNumberID').change(function(){
				$('.unitInfo').show();
				$('.removable').remove();
				var unit_number = $('#unitNumberID').val();
				//alert(unit_number);
				for(var i=0;i<unit_number;i++){
					$('.unitInfos')
					.append('<div class="row removable m-bottom-15"><div class="col-md-12"><div class="row"><div class="col-md-12"><div class="form-group" ><label> Unit No</label><input type="text" class="form-control" name="unitNumber'+i+'" required/></div></div></div><div class="row"><div class="col-md-12"><div class="form-group"><label>Unit Note</label><textarea name="unitNote'+i+'" id=""rows="3" class="form-control"></textarea></div></div></div><hr/></div></div>');
				}
				
			});
		});


		$('#transferStudentID').change(function(){
			var student_id = $('#transferStudentID').val();
			//alert(student_id);
			if(student_id){
				
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getStdSeatInfo",
					dataType: 'json',
					data: {
					   student_id:student_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								 $('#transferDiscountID').val(res.specialDiscount);
								 $('#transferAdditionalID').val(res.additionalCharge);
								 $('#transferZoneID').val(res.zoneTitle);
								 $('#transferSeatNumberID').val(res.seatNumber);
								 $('#transferSeatID').val(res.seat_info_seatId);
								 $('#transferStudentSeatID').val(res.sSeatId);
								
							}
							else {
								alert("Pleast Try Again");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Student First");
			}
		});

		
		$('#vacantStdID').change(function(){
			var student_id = $('#vacantStdID').val();
			//alert(student_id);
			if(student_id){
				
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getVacantStdSeatInfo",
					dataType: 'json',
					data: {
					   student_id:student_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								 $('#vacantStdNameID').val(res.studentName);
								 $('#vacantStdPhnID').val(res.studentContactNo);
								 $('#transferZoneID').val(res.zoneTitle);
								 $('#vacantSeatNumberID').val(res.seatNumber);
								 $('#vacantSeatID').val(res.seat_info_seatId);
								 $('#vacantStudentSeatID').val(res.sSeatId);
								
							}
							else {
								alert("Pleast Try Again");
								$('#vacantStdID').val("");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Student First");
			}
		});

		$('#payment_std_ID').change(function(){
			var student_id = $('#payment_std_ID').val();
			//alert(student_id);
			if(student_id){
				
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getStdBalance",
					dataType: 'json',
					data: {
					   student_id:student_id
					},
					success: function(res) {
					if (res) {
							if (res.status === true){
								 $('#stdBalanceID').val(res.std_balance);
							}
							else {
								alert("Pleast Try Again");
								$('#payment_std_ID').val("");
							}
						}
					}
				});
			}
			else{
				alert("Please Select A Student First");
			}
		});

		
		
	});
</script>
<script type="text/javascript">
		function updateBillInfo(bill_id) {
			var discountAmount=$('#billDiscountID'+bill_id).val();
			var otherAmount=$('#billOtherID'+bill_id).val();
			jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_updateBillInfo",
				dataType: 'json',
				data: {
					bill_id: bill_id,
					discountAmount: discountAmount,
					otherAmount: otherAmount
				},
				success: function(res) {
					if (res) {
						// Show Entered Value
						if (res.status === true) {
							$('#billTotalID'+bill_id).val(res.total);
							
						} else {
							
						}
					}
				}
			});
			
		}
	</script>