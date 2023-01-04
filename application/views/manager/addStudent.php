<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Student</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Student</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>

   	<?php echo form_open_multipart('manager/insertStudents', 'class="addStudent-form"')?>

   	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4> Rent & Other Fees </h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label> Zone</label>
								<select name="" id="selectZoneID" class="form-control">
								<option value="0" selected disabled > Select an Option</option>
								<?php foreach($values as $value) {?>
									<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
								<?php } ?>
								</select>
								<!--<select name="zone_info_zoneID" id="selectZoneID" class="form-control">
									<option value="" selected disabled > Select an Option</option>						
									<?php //foreach($values as $value) {?>
										<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
									<?php //} ?>
								</select>-->
								<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Building</label>
								<select name="" id="selectBuldingID" class="form-control zoneClass" required>
									<option value="" selected disabled > Select an Option</option>
								</select>
								<div class="errorClass"><?php echo form_error('building_info_buildingId'); ?></div>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Floor</label>
								<select name="" id="selectFloorID" class="form-control zoneClass buildingClass" required>
									<option value="" selected disabled > Select an Option</option>	
								</select>
								<div class="errorClass"><?php echo form_error('floor_info_floorId'); ?></div>
							</div>	
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label> Unit</label>
								<select name="" id="selectUnitID" class="form-control zoneClass buildingClass floorClass" required>
									<option value="" selected disabled > Select an Option</option>
								</select>
								<div class="errorClass"><?php echo form_error('unit_info_unitId'); ?></div>
							</div>	
						</div>	
						<div class="col-md-4">
							<div class="form-group">
								<label> Room</label>
								<select name="" id="selectRoomID" class="form-control zoneClass buildingClass floorClass unitClass" required>
									<option value="" selected disabled > Select an Option</option>
								</select>
								<div class="errorClass"><?php echo form_error('room_info_roomId'); ?></div>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Seat</label>
								<select name="seat_info_seatId" id="selectSeatID" class="form-control zoneClass buildingClass floorClass unitClass roomClass" required >
									<option value="" selected > Select an Option</option>	
								</select>
								<!--<select name="seat_info_seatId" id="selectSeatID" class="form-control zoneClass buildingClass floorClass unitClass roomClass" required>
									<option value="" selected disabled > Select an Option</option>
								</select>-->
								<div class="errorClass"><?php echo form_error('seat_info_seatId'); ?></div>
							</div>		
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label> Monthly Rent</label>
								<?php echo form_input(['name'=>'monthelyRent', 'class'=>'form-control', 'id'=>'seatRentID','required'=>'required','value'=>set_value('monthelyRent')]);?>
					    		<div class="errorClass"><?php echo form_error('monthelyRent'); ?></div>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Special Discount</label>
								<?php echo form_input(['name'=>'specialDiscount', 'class'=>'form-control','required'=>'required','value'=>set_value('specialDiscount')]);?>
					    		<div class="errorClass"><?php echo form_error('specialDiscount'); ?></div>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Additional Charge</label>
								<?php echo form_input(['name'=>'additionalCharge', 'class'=>'form-control','required'=>'required','value'=>set_value('additionalCharge')]);?>
					    		<div class="errorClass"><?php echo form_error('additionalCharge'); ?></div>
							</div>		
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label> Expire Date </label>
								<?php echo form_input(['name'=>'studentExpireDate', 'id'=>'endDate', 'class'=>'form-control','value'=>set_value('studentExpireDate')]);?>
			    				<div class="errorClass"><?php echo form_error('studentExpireDate'); ?></div>
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
					<h4>Student Information</h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Type of Admission</label>
										<select name="student_admission_type_admissionTypeId"  class="form-control" id="admissionType">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($admissions as $admission) {?>
												<option value="<?php echo $admission->admissionTypeId?>"><?php echo $admission->admissionTypeName?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Student's Name</label>
										<?php echo form_input(['name'=>'studentName', 'class'=>'form-control','required'=>'required','value'=>set_value('studentName')]);?>
					    				<div class="errorClass"><?php echo form_error('studentName'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Gender</label>
					    				<select name="studentGender" class="form-control">
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
										</select>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Father's Name</label>
										<?php echo form_input(['name'=>'fatherName', 'class'=>'form-control','required'=>'required','value'=>set_value('fatherName')]);?>
					    				<div class="errorClass"><?php echo form_error('fatherName'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Mother's Name</label>
										<?php echo form_input(['name'=>'motherName', 'class'=>'form-control','required'=>'required','value'=>set_value('motherName')]);?>
					    				<div class="errorClass"><?php echo form_error('motherName'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Date of Birth</label>
										<?php echo form_input(['name'=>'studentBirthDate', 'id'=>'date', 'class'=>'form-control','value'=>set_value('studentBirthDate')]);?>
					    				<div class="errorClass"><?php echo form_error('studentBirthDate'); ?></div>
									</div>	
								</div>
							</div>
									
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Religion</label>
										<select name="studentReligion" class="form-control">
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">Muslim</option>
											<option value="2">Hindu</option>
											<option value="3">Christian</option>
											<option value="4">Buddha</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Blood Group</label>
					    				<select name="studentBloodGroup" class="form-control">
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">A+</option>
											<option value="2">A-</option>
											<option value="3">B+</option>
											<option value="4">B-</option>
											<option value="5">AB+</option>
											<option value="6">AB-</option>
											<option value="7">O+</option>
											<option value="8">O-</option>
										</select>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Contact Number</label>
										<?php echo form_input(['name'=>'studentContactNo', 'class'=>'form-control','value'=>set_value('studentContactNo')]);?>
					    				<div class="errorClass"><?php echo form_error('studentContactNo'); ?></div>
									</div>
								</div>
							</div>
								
							
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Nationality</label>
										<?php echo form_input(['name'=>'nationality', 'class'=>'form-control','value'=>set_value('nationality')]);?>
					    				<div class="errorClass"><?php echo form_error('nationality'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'studentNID', 'class'=>'form-control','value'=>set_value('studentNID')]);?>
					    				<div class="errorClass"><?php echo form_error('studentNID'); ?></div>
									</div>			
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Birth Registration No.</label>
										<?php echo form_input(['name'=>'studentBirthRegNo', 'class'=>'form-control','value'=>set_value('studentBirthRegNo')]);?>
					    				<div class="errorClass"><?php echo form_error('studentBirthRegNo'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<?php echo form_textarea(['name'=>'studentAddress', 'class'=>'form-control', 'rows'=>'3','value'=>set_value('studentAddress')]);?>
					    				<div class="errorClass"><?php echo form_error('studentAddress'); ?></div>
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
				<div class="panel-heading">
					<h4>Gurdian Information</h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Father's Name</label>
										<?php echo form_input(['name'=>'stdFatherName', 'class'=>'form-control','value'=>set_value('stdFatherName')]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherName'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact No.</label>
										<?php echo form_input(['name'=>'stdFatherContactNo', 'id'=>'date', 'class'=>'form-control', 'value'=>set_value('stdFatherContactNo')]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherContactNo'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Occupation</label>
										<?php echo form_input(['name'=>'stdFatherOccupation', 'class'=>'form-control','value'=>set_value('stdFatherOccupation')]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherOccupation'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'stdFatherNID', 'class'=>'form-control','value'=>set_value('stdFatherNID')]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherNID'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Mother's Name</label>
										<?php echo form_input(['name'=>'stdMotherName', 'class'=>'form-control','value'=>set_value('stdMotherName')]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherName'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Contact No.</label>
										<?php echo form_input(['name'=>'stdMotherContactNo', 'id'=>'date', 'class'=>'form-control', 'value'=>set_value('stdMotherContactNo')]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherContactNo'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Occupation</label>
										<?php echo form_input(['name'=>'stdMotherOccupation', 'class'=>'form-control','value'=>set_value('stdMotherOccupation')]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherOccupation'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'stdMotherNID', 'class'=>'form-control','value'=>set_value('stdMotherNID')]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherNID'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<?php echo form_textarea(['name'=>'gurdianAddress', 'class'=>'form-control','rows'=>'3','value'=>set_value('gurdianAddress')]);?>
					    				<div class="errorClass"><?php echo form_error('gurdianAddress'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Husband Name</label>
										<?php echo form_input(['name'=>'husbandName', 'class'=>'form-control','value'=>set_value('husbandName')]);?>
					    				<div class="errorClass"><?php echo form_error('husbandName'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Contact No.</label>
										<?php echo form_input(['name'=>'husbandContactNo', 'class'=>'form-control','value'=>set_value('husbandContactNo')]);?>
					    				<div class="errorClass"><?php echo form_error('husbandContactNo'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Occupation</label>
										<?php echo form_input(['name'=>'husbandOccupation', 'class'=>'form-control','value'=>set_value('husbandOccupation')]);?>
					    				<div class="errorClass"><?php echo form_error('husbandOccupation'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'husbandNID', 'class'=>'form-control','value'=>set_value('husbandNID')]);?>
					    				<div class="errorClass"><?php echo form_error('husbandNID'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<?php echo form_textarea(['name'=>'husbandAddress', 'class'=>'form-control','rows'=>'3','value'=>set_value('husbandAddress')]);?>
					    				<div class="errorClass"><?php echo form_error('husbandAddress'); ?></div>
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
				<div class="panel-heading">
					<h4>Local Gurdian Information</h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Local Gurdian's Name</label>
										<?php echo form_input(['name'=>'localGurdianName', 'class'=>'form-control','value'=>set_value('localGurdianName')]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianName'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Contact No.</label>
										<?php echo form_input(['name'=>'localGurdianContactNo', 'class'=>'form-control','value'=>set_value('localGurdianContactNo')]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianContactNo'); ?></div>
									</div>			
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Occupation</label>
										<?php echo form_input(['name'=>'localGurdianOccupation', 'class'=>'form-control','value'=>set_value('localGurdianOccupation')]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianOccupation'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>National ID No.</label>
										<?php echo form_input(['name'=>'localGurdianNID', 'class'=>'form-control','value'=>set_value('localGurdianNID')]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianNID'); ?></div>
									</div>			
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Relationship With Student</label>
										<?php echo form_input(['name'=>'localGurdianRelationship', 'class'=>'form-control','value'=>set_value('localGurdianRelationship')]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianRelationship'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Local Gurdian's Address</label>
										<?php echo form_textarea(['name'=>'localGurdianAddress', 'class'=>'form-control','rows'=>'3','value'=>set_value('localGurdianAddress')]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianAddress'); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>								
				</div>	
			</div>
		</div>
	</div>
<!-- 
	<div class="row workingStudentCheck">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" value="option1" checked disabled> Student
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" name="studentType" value="1"> Working Student
					</label>
				</div>
			</div>
		</div>
	</div> -->

	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6" id="ssc">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>SSC </h4>
						</div>
						<div class="panel-body card-shadow">
							<div class="row sscCurrentStudentCheck">
								<div class="col-md-12">
									<div class="form-group">
										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox3" name="studentType" value="1"> Current Student
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> School</label>
										<?php echo form_input(['name'=>'sscSchool', 'class'=>'form-control','value'=>set_value('school')]);?>
					    				<div class="errorClass"><?php echo form_error('school'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Group</label>
										<select name="sscGroup" class="form-control">
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">Science</option>
											<option value="2">Commerce</option>
											<option value="3">Humanities</option>
										</select>
					    				<div class="errorClass"><?php echo form_error('sscGroup'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 sscCurrentStudentDiv">
									<div class="form-group">
										<label> Class</label>
										<?php echo form_input(['name'=>'sscClass', 'class'=>'form-control','value'=>set_value('sscClass')]);?>
					    				<div class="errorClass"><?php echo form_error('sscClass'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 sscCurrentStudentDiv">
									<div class="form-group">
										<label> Class Roll</label>
										<?php echo form_input(['name'=>'sscRoll', 'class'=>'form-control','value'=>set_value('sscRoll')]);?>
					    				<div class="errorClass"><?php echo form_error('sscRoll'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 sscCurrentStudentDiv">
									<div class="form-group">
										<label> Section</label>
										<?php echo form_input(['name'=>'sscSection', 'class'=>'form-control','value'=>set_value('sscSection')]);?>
					    				<div class="errorClass"><?php echo form_error('sscSection'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 sscCurrentStudentDiv">
									<div class="form-group">
										<label> Class Time</label>
										<?php echo form_input(['name'=>'sscClassTime', 'class'=>'form-control','value'=>set_value('sscClassTime')]);?>
					    				<div class="errorClass"><?php echo form_error('sscClassTime'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Board</label>
										<select name="sscBoard" class="form-control">
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">Sylhet</option>
											<option value="2">Dhaka</option>
											<option value="3">Comilla</option>
											<option value="4">Chittagong</option>
											<option value="5">Barisal</option>
											<option value="6">Dinajpur</option>
											<option value="7">Jessore</option>
											<option value="8">Rajshahi</option>
											<option value="9">Madrasah</option>
											<option value="10">Technical</option>
										</select>
					    				<div class="errorClass"><?php echo form_error('sscBoard'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Passing Year</label>
										<?php echo form_input(['name'=>'sscPassingYear', 'class'=>'form-control','value'=>set_value('sscPassingYear')]);?>
					    				<div class="errorClass"><?php echo form_error('sscPassingYear'); ?></div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6" id="hsc">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>HSC </h4>
						</div>
						<div class="panel-body card-shadow">
							<div class="row hscCurrentStudentCheck">
								<div class="col-md-12">
									<div class="form-group">
										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox4" name="studentType" value="1"> Current Student
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> College</label>
										<?php echo form_input(['name'=>'hscSchool', 'class'=>'form-control','value'=>set_value('college')]);?>
					    				<div class="errorClass"><?php echo form_error('college'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Group</label>
										<select name="hscGroup" class="form-control">
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">Science</option>
											<option value="2">Commerce</option>
											<option value="3">Humanities</option>
										</select>
					    				<div class="errorClass"><?php echo form_error('hscGroup'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 hscCurrentStudentDiv">
									<div class="form-group">
										<label> Year</label>
										<?php echo form_input(['name'=>'hscClass', 'class'=>'form-control','value'=>set_value('hscClass')]);?>
					    				<div class="errorClass"><?php echo form_error('hscClass'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 hscCurrentStudentDiv">
									<div class="form-group">
										<label> Class Roll</label>
										<?php echo form_input(['name'=>'hscRoll', 'class'=>'form-control','value'=>set_value('hscRoll')]);?>
					    				<div class="errorClass"><?php echo form_error('hscRoll'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 hscCurrentStudentDiv">
									<div class="form-group">
										<label> Section</label>
										<?php echo form_input(['name'=>'hscSection', 'class'=>'form-control','value'=>set_value('hscSection')]);?>
					    				<div class="errorClass"><?php echo form_error('hscSection'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 hscCurrentStudentDiv">
									<div class="form-group">
										<label> Class Time</label>
										<?php echo form_input(['name'=>'hscClassTime', 'class'=>'form-control','value'=>set_value('hscClassTime')]);?>
					    				<div class="errorClass"><?php echo form_error('hscClassTime'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Board</label>
										<select name="hscBoard" class="form-control">
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">Sylhet</option>
											<option value="2">Dhaka</option>
											<option value="3">Comilla</option>
											<option value="4">Chittagong</option>
											<option value="5">Barisal</option>
											<option value="6">Dinajpur</option>
											<option value="7">Jessore</option>
											<option value="8">Rajshahi</option>
											<option value="9">Madrasah</option>
											<option value="10">Technical</option>
										</select>
					    				<div class="errorClass"><?php echo form_error('hscBoard'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Passing Year</label>
										<?php echo form_input(['name'=>'hscPassingYear', 'class'=>'form-control','value'=>set_value('hscPassingYear')]);?>
					    				<div class="errorClass"><?php echo form_error('hscPassingYear'); ?></div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" id="graduation">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Graduation or Equivalent </h4>
						</div>
						<div class="panel-body card-shadow">
							<div class="row graduationCurrentStudentCheck">
								<div class="col-md-12">
									<div class="form-group">
										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox5" name="studentType" value="1"> Current Student
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Institution</label>
										<?php echo form_input(['name'=>'graduationInstitution', 'class'=>'form-control','value'=>set_value('graduationInstitution')]);?>
					    				<div class="errorClass"><?php echo form_error('graduationInstitution'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Subject</label>
										<?php echo form_input(['name'=>'graduationSubject', 'class'=>'form-control','value'=>set_value('graduationSubject')]);?>
					    				<div class="errorClass"><?php echo form_error('graduationSubject'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 graduationCurrentStudentDiv">
									<div class="form-group">
										<label> Semester (if Currently on study)</label>
										<?php echo form_input(['name'=>'graduationSemester', 'class'=>'form-control','value'=>set_value('graduationSemester')]);?>
					    				<div class="errorClass"><?php echo form_error('graduationSemester'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 graduationCurrentStudentDiv">
									<div class="form-group">
										<label> Institution Student ID</label>
										<?php echo form_input(['name'=>'graduationInstStdId', 'class'=>'form-control','value'=>set_value('graduationInstStdId')]);?>
					    				<div class="errorClass"><?php echo form_error('graduationInstStdId'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Graduation Year</label>
										<?php echo form_input(['name'=>'graduationYear', 'class'=>'form-control','value'=>set_value('graduationYear')]);?>
					    				<div class="errorClass"><?php echo form_error('graduationYear'); ?></div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6" id="postGraduation">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Post Graduation or Equivalent </h4>
						</div>
						<div class="panel-body card-shadow">
							<div class="row postGraduationCurrentStudentCheck">
								<div class="col-md-12">
									<div class="form-group">
										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox6" name="studentType" value="1"> Current Student
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Institution</label>
										<?php echo form_input(['name'=>'postGraduationInstitution', 'class'=>'form-control','value'=>set_value('postGraduationInstitution')]);?>
					    				<div class="errorClass"><?php echo form_error('postGraduationInstitution'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Subject</label>
										<?php echo form_input(['name'=>'postGraduationSubject', 'class'=>'form-control','value'=>set_value('postGraduationSubject')]);?>
					    				<div class="errorClass"><?php echo form_error('postGraduationSubject'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 postGraduationCurrentStudentDiv">
									<div class="form-group">
										<label> Semester (if Currently on study)</label>
										<?php echo form_input(['name'=>'postGraduationSemester', 'class'=>'form-control','value'=>set_value('postGraduationSemester')]);?>
					    				<div class="errorClass"><?php echo form_error('postGraduationSemester'); ?></div>
									</div>		
								</div>
								<div class="col-md-12 postGraduationCurrentStudentDiv">
									<div class="form-group">
										<label> Institution Student ID</label>
										<?php echo form_input(['name'=>'postGraduationInstStdId', 'class'=>'form-control','value'=>set_value('postGraduationInstStdId')]);?>
					    				<div class="errorClass"><?php echo form_error('postGraduationInstStdId'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Graduation Year</label>
										<?php echo form_input(['name'=>'postGraduationYear', 'class'=>'form-control','value'=>set_value('postGraduationYear')]);?>
					    				<div class="errorClass"><?php echo form_error('postGraduationYear'); ?></div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row workingStudentDiv">
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4> Work Information </h4>
						</div>
						<div class="panel-body card-shadow">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Company Name</label>
										<?php echo form_input(['name'=>'companyName', 'class'=>'form-control','value'=>set_value('companyName')]);?>
					    				<div class="errorClass"><?php echo form_error('companyName'); ?></div>
									</div>		
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Work ID</label>
										<?php echo form_input(['name'=>'workId', 'class'=>'form-control','value'=>set_value('workId')]);?>
					    				<div class="errorClass"><?php echo form_error('workId'); ?></div>
									</div>		
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Designation</label>
										<?php echo form_input(['name'=>'designation', 'class'=>'form-control','value'=>set_value('designation')]);?>
					    				<div class="errorClass"><?php echo form_error('designation'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Office Location</label>
										<?php echo form_textarea(['name'=>'officeLocation', 'class'=>'form-control', 'rows'=>'3','value'=>set_value('officeLocation')]);?>
					    				<div class="errorClass"><?php echo form_error('officeLocation'); ?></div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="otherCourses">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4> Others Courses's </h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label> Institution Name</label>
								<?php echo form_input(['name'=>'courseInstitutionName', 'class'=>'form-control','value'=>set_value('courseInstitutionName')]);?>
					    		<div class="errorClass"><?php echo form_error('courseInstitutionName'); ?></div>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label> Course Name</label>
								<?php echo form_input(['name'=>'courseName', 'class'=>'form-control','value'=>set_value('courseName')]);?>
					    		<div class="errorClass"><?php echo form_error('courseName'); ?></div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Time</label>
								<?php echo form_input(['name'=>'courseTime', 'class'=>'form-control','value'=>set_value('courseTime')]);?>
					    		<div class="errorClass"><?php echo form_error('courseTime'); ?></div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Day's</label>
								<?php echo form_input(['name'=>'courseDays', 'class'=>'form-control','value'=>set_value('courseDays')]);?>
					    		<div class="errorClass"><?php echo form_error('courseDays'); ?></div>
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
					<h4> Upload Files & Photos </h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Student's Image</label>
								<?php echo form_upload(['name'=>'stdImage', 'class'=>'form-control', 'type'=>'file','value'=>set_value('stdImage')]);?>
								<div class="errorClass"><?php echo form_error('stdImage'); ?></div>			 
													
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Student's ID Card</label>
								<?php echo form_upload(['name'=>'stdIdCard', 'class'=>'form-control', 'type'=>'file', 'value'=>set_value('stdIdCard')]);?>
								<div class="errorClass"><?php echo form_error('stdIdCard'); ?></div>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Parent's Image</label>
								<?php echo form_upload(['name'=>'parentsImage', 'class'=>'form-control', 'type'=>'file','value'=>set_value('parentsImage')]);?>
								<div class="errorClass"><?php echo form_error('parentsImage'); ?></div>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Parent's ID Card</label>
								<?php echo form_upload(['name'=>'parentsIdCard', 'class'=>'form-control', 'type'=>'file','value'=>set_value('parentsIdCard')]);?>
								<div class="errorClass"><?php echo form_error('parentsIdCard'); ?></div>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Additional 1</label>
										<?php echo form_upload(['name'=>'additionalOne', 'class'=>'form-control', 'type'=>'file', 'value'=>set_value('additionalOne')]);?>
										<div class="errorClass"><?php echo form_error('additionalOne'); ?></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Caption 1</label>
										<?php echo form_input(['name'=>'captionOne', 'class'=>'form-control','value'=>set_value('captionOne')]);?>
										<div class="errorClass"><?php echo form_error('captionOne'); ?></div>
									</div>
								</div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Additional 2</label>
										<?php echo form_upload(['name'=>'additionalTwo', 'class'=>'form-control', 'type'=>'file', 'value'=>set_value('additionalTwo')]);?>
										<div class="errorClass"><?php echo form_error('additionalTwo'); ?></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Caption 2</label>
										<?php echo form_input(['name'=>'captionTwo', 'class'=>'form-control','value'=>set_value('captionTwo')]);?>
										<div class="errorClass"><?php echo form_error('captionTwo'); ?></div>
									</div>
								</div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Additional 3</label>
										<?php echo form_upload(['name'=>'additionalThree', 'class'=>'form-control', 'type'=>'file', 'value'=>set_value('additionalThree')]);?>
										<div class="errorClass"><?php echo form_error('additionalThree'); ?></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Caption 3</label>
										<?php echo form_input(['name'=>'captionThree', 'class'=>'form-control','value'=>set_value('captionThree')]);?>
										<div class="errorClass"><?php echo form_error('captionThree'); ?></div>
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
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label> Note</label>
								<?php echo form_textarea(['name'=>'stdNote', 'class'=>'form-control', 'rows'=>'3','value'=>set_value('stdNote')]);?>
					    		<div class="errorClass"><?php echo form_error('stdNote'); ?></div> 
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Add</button>
							<button type="reset" 
							class="btn btn-danger"> <i class="fa fa-refresh"></i> Reset</button>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close() ?>	
	
	<?php include('footer.php') ?>