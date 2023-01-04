<?php 
$config = array(
       'login_form' => array(
            array(
			   'field' => 'email',
               'label' => 'User Email',
               'rules' => 'required' 
            ),
            array(
               'field' => 'password',
               'label' => 'Password',
               'rules' => 'required|md5', 
            )
               
		),

       'addReceivePayment' => array(
         array(
               'field' => 'zone_info_paymentZoneId',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'payment_type_info_paymentTypeId',
               'label' => 'Payment Type',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'student_info_paymentStudentId',
               'label' => 'Student Name',
               'rules' => 'required', 
            ),
          array(
               'field' => 'receivedPaymentAmount',
               'label' => 'Amount',
               'rules' => 'required', 
            ),
      ),

       'addReturn' => array(
         array(
               'field' => 'zone_info_returnPaymentZoneId',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'return_payment_type_info_returnPaymentTypeId',
               'label' => 'Return Payment Type',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'student_info_returnPaymentStudentId',
               'label' => 'Student Name',
               'rules' => 'required', 
            ),
          array(
               'field' => 'returnPaymentAmount',
               'label' => 'Amount',
               'rules' => 'required', 
            ),
      ),

       'addExpense' => array(
         array(
               'field' => 'zone_info_expenseZoneId',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'expense_field_info_fieldId',
               'label' => 'Expanse Field',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'expenseAmount',
               'label' => 'Amount',
               'rules' => 'required', 
            ),
          array(
               'field' => 'expenseDetails',
               'label' => 'Details',
               'rules' => 'required', 
            ),
      ),

       'addBuilding' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'buildingNumber',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'buildingTitle',
               'label' => 'Title',
               'rules' => 'required', 
            ),
      ),

       'updateBuilding' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'buildingNumber',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'buildingTitle',
               'label' => 'Title',
               'rules' => 'required', 
            ),
      ),

       'addFloor' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_floorBuildingId',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'floorNumberID',
               'label' => 'No. of Floor',
               'rules' => 'required', 
            ),
      ),

       'updateFloor' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_floorBuildingId',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
      ),

       'addUnit' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_unitBuildingId',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'floor_info_unitFloorId',
               'label' => 'Floor No',
               'rules' => 'required', 
            ),

          array(
               'field' => 'unitNumberID',
               'label' => 'No. of Unit',
               'rules' => 'required', 
            ),
      ),

       'updateUnit' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_unitBuildingId',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'floor_info_unitFloorId',
               'label' => 'Floor No',
               'rules' => 'required', 
            ),

      ),

       'addRoom' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_roomBuildingId',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'floor_info_roomFloorId',
               'label' => 'Floor No',
               'rules' => 'required', 
            ),

          array(
               'field' => 'unit_info_roomUnitId',
               'label' => 'Unit No',
               'rules' => 'required', 
            ),
           array(
               'field' => 'roomNumber',
               'label' => 'Room No',
               'rules' => 'required', 
            ),
      ),

       'updateRoom' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_roomBuildingId',
               'label' => 'Building No',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'floor_info_roomFloorId',
               'label' => 'Floor No',
               'rules' => 'required', 
            ),

          array(
               'field' => 'unit_info_roomUnitId',
               'label' => 'Unit No',
               'rules' => 'required', 
            ),
           array(
               'field' => 'roomNumber',
               'label' => 'Room No',
               'rules' => 'required', 
            ),
      ),

       'addSeat' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_seatBuildingId',
               'label' => 'Building',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'floor_info_seatFloorId',
               'label' => 'Floor',
               'rules' => 'required', 
            ),

          array(
               'field' => 'unit_info_seatUnitId',
               'label' => 'Unit',
               'rules' => 'required', 
            ),
           array(
               'field' => 'room_info_seatRoomId',
               'label' => 'Room',
               'rules' => 'required', 
            ),
            array(
               'field' => 'seatNumber',
               'label' => 'Seat Number',
               'rules' => 'required', 
            ),
            array(
               'field' => 'seat_type_info_seatSeatTypeId',
               'label' => 'Seat Type',
               'rules' => 'required', 
            ),
            array(
               'field' => 'seat_type_info_seatRentAmount',
               'label' => 'Rent',
               'rules' => 'required', 
            ),
      ),

       'updateSeat' => array(
         array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required' 
            ),
         array(
               'field' => 'building_info_seatBuildingId',
               'label' => 'Building',
               'rules' => 'required' 
            ),
            
          array(
               'field' => 'floor_info_seatFloorId',
               'label' => 'Floor',
               'rules' => 'required', 
            ),

          array(
               'field' => 'unit_info_seatUnitId',
               'label' => 'Unit',
               'rules' => 'required', 
            ),
           array(
               'field' => 'room_info_seatRoomId',
               'label' => 'Room',
               'rules' => 'required', 
            ),
            array(
               'field' => 'seatNumber',
               'label' => 'Seat Number',
               'rules' => 'required', 
            ),
            array(
               'field' => 'seat_type_info_seatSeatTypeId',
               'label' => 'Seat Type',
               'rules' => 'required', 
            ),
            array(
               'field' => 'seat_type_info_seatRentAmount',
               'label' => 'Rent',
               'rules' => 'required', 
            ),
      ),

       'addSeatType' => array(   
          array(
               'field' => 'seatTypeName',
               'label' => 'Seat Type Name',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'rentAmount',
               'label' => 'Seat Rent',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'profit',
               'label' => 'Profit',
               'rules' => 'required', 
            ), 
      ),

       'updateSeatType' => array(   
          array(
               'field' => 'seatTypeName',
               'label' => 'Seat Type Name',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'rentAmount',
               'label' => 'Seat Rent',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'profit',
               'label' => 'Profit',
               'rules' => 'required', 
            ),  
          
      ),

       'addExpenseField' => array(   
          array(
               'field' => 'fieldTitle',
               'label' => 'Expanse Field',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'fieldDetails',
               'label' => 'Details',
               'rules' => 'required', 
            ),    
          
      ),
       'updateExpenseField' => array(   
          array(
               'field' => 'fieldTitle',
               'label' => 'Expanse Field',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'fieldDetails',
               'label' => 'Details',
               'rules' => 'required', 
            ),    
          
      ),
       
       'addZone' => array(   
          array(
               'field' => 'zoneTitle',
               'label' => 'Zone',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'zoneNote',
               'label' => 'Note',
               'rules' => 'required', 
            ),    
          
      ),

       'updateZone' => array(   
          array(
               'field' => 'zoneTitle',
               'label' => 'Zone',
               'rules' => 'required', 
            ),    
          array(
               'field' => 'zoneNote',
               'label' => 'Note',
               'rules' => 'required', 
            ),    
          
      ),
	
      'addAdmin' => array(
            array(
               'field' => 'adminUserID',
               'label' => 'User ID',
               'rules' => 'required|is_unique[admin_info.adminUserID]',
            ),
            array(
               'field' => 'adminName',
               'label' => 'Name',
               'rules' => 'required',
            ),
            array(
               'field' => 'adminContact',
               'label' => 'Contact No',
               'rules' => 'required', 
            ),
             array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required', 
            ),
            array(
               'field' => 'adminPassword',
               'label' => 'Password',
               'rules' => 'required|min_length[8]|md5', 
            ),
      ),

      'updateAdmin' => array(
            array(
               'field' => 'adminName',
               'label' => 'Name',
               'rules' => 'required',
            ),
            array(
               'field' => 'adminContact',
               'label' => 'Contact No',
               'rules' => 'required', 
            ),
             array(
               'field' => 'zone_info_zoneID',
               'label' => 'Zone',
               'rules' => 'required', 
            ),
      ),
	);
	
	
	
?>	
	