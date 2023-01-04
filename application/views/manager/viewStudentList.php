<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Student List</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Student List</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 >Student Information
						<div class="pull-right">Student ID: <?= $data->stdIdNo; ?></div>
					</h4>
					
				</div>
				<div class="panel-body">
					<?php echo form_open_multipart('manager/updateStudentInfo', 'class="studentInfo-form"') ?>
					<?php echo form_hidden('studentId', $data->studentId); ?>
					<div class="row">
						<div class="col-md-12">
							<?php 
									$data->studentAddedDate=date('m/d/Y',strtotime($data->studentAddedDate)); 
									$data->studentBirthDate=date('m/d/Y',strtotime($data->studentBirthDate)); 
								?>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Type of Admission</label>
										<select name="student_admission_type_admissionTypeId"  class="form-control removeDis" disabled>
											<option value="<?php echo $data->student_admission_type_admissionTypeId ?>" selected disabled> <?php echo $data->admissionTypeName ; ?></option>
											<?php foreach($admissions as $admission) {?>
												<option value="<?php echo $admission->admissionTypeId?>"><?php echo $admission->admissionTypeName?></option>
											<?php } ?>
										</select>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Student's Name</label>
										<?php echo form_input(['name'=>'studentName', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','required'=>'required', 'value'=>set_value('studentName').$data->studentName]);?>
					    				<div class="errorClass"><?php echo form_error('studentName'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Gender</label>
										<select name="studentGender" class="form-control removeDis" disabled>
											<option value="" selected disabled> <?php 
											if($data->studentGender == 1) {echo 'Male';}
											 else {echo "Female";}; 
											 ?></option>
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
										<?php echo form_input(['name'=>'fatherName', 'class'=>'form-control removeDis','disabled'=>'disabled','required'=>'required','value'=>set_value('fatherName').$data->fatherName]);?>
					    				<div class="errorClass"><?php echo form_error('fatherName'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Mother's Name</label>
										<?php echo form_input(['name'=>'motherName', 'class'=>'form-control removeDis','disabled'=>'disabled','required'=>'required','value'=>set_value('motherName').$data->motherName]);?>
					    				<div class="errorClass"><?php echo form_error('motherName'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Date of Birth</label>
										<?php echo form_input(['name'=>'studentBirthDate', 'id'=>'date', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('studentBirthDate',$data->studentBirthDate)]);?>
					    				<div class="errorClass"><?php echo form_error('studentBirthDate'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Joining Date</label>
										<?php echo form_input(['name'=>'studentAddedDate', 'class'=>'form-control removeDis ', 'id'=>'startDate', 'disabled'=>'disabled', 'value'=>set_value('studentAddedDate').$data->studentAddedDate]);?>
					    				<div class="errorClass"><?php echo form_error('studentAddedDate'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Status</label>
										<select name="studentStatus" id="" class="form-control removeDis" disabled>
											<option value="" selected disabled > <?php 
											if($data->studentStatus == 1) {echo 'Active';}
											elseif ($data->studentStatus == 2) {echo 'Inactive';} 
											elseif ($data->studentStatus == 3) {echo 'Complete';}
											 else {echo "On Hold";}; 
											 ?></option>
											<option value="1">Active</option>
											<option value="2">Inactive</option>
											<option value="3">Complete</option>
											<option value="4">On Hold</option>
										</select>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Religion</label>
										<?php if($data->studentReligion){?>
										<select name="studentReligion" class="form-control removeDis" disabled>
											<option value="" selected disabled> <?php 
											if($data->studentReligion == 1) {echo 'Muslim';}
											elseif ($data->studentReligion == 2) {echo 'Hindu';} 
											elseif ($data->studentReligion == 3) {echo 'Christian';}
											 else {echo "Buddha";}; 
											 ?></option>
											<option value="1">Muslim</option>
											<option value="2">Hindu</option>
											<option value="3">Christian</option>
											<option value="4">Buddha</option>
										</select>
									<?php } else {?>
										<select name="studentReligion" class="form-control removeDis" disabled>
											<option value="0" selected disabled> Select an Option</option>
											<option value="1">Muslim</option>
											<option value="2">Hindu</option>
											<option value="3">Christian</option>
											<option value="4">Buddha</option>
										</select> <?php } ?>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Blood Group</label>
					    				<?php if($data->studentBloodGroup){?>
					    				<select name="studentBloodGroup" class="form-control removeDis" disabled>
											<option value="" selected disabled> <?php 
											if($data->studentBloodGroup == 1) {echo 'A+';}
											elseif ($data->studentBloodGroup == 2) {echo 'A-';} 
											elseif ($data->studentBloodGroup == 3) {echo 'B+';}
											elseif ($data->studentBloodGroup == 4) {echo 'B-';}
											elseif ($data->studentBloodGroup == 5) {echo 'AB+';}
											elseif ($data->studentBloodGroup == 6) {echo 'AB-';}
											elseif ($data->studentBloodGroup == 7) {echo 'O+';}
											 else {echo "O-";}; 
											 ?></option>
											<option value="1">A+</option>
											<option value="2">A-</option>
											<option value="3">B+</option>
											<option value="4">B-</option>
											<option value="5">AB+</option>
											<option value="6">AB-</option>
											<option value="7">O+</option>
											<option value="8">O-</option>
										</select>
					    			<?php } else{ ?>
											<select name="studentBloodGroup" class="form-control removeDis" disabled>
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
					    			<?php } ?>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Contact Number</label>
										<?php echo form_input(['name'=>'studentContactNo', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('studentContactNo').$data->studentContactNo]);?>
					    				<div class="errorClass"><?php echo form_error('studentContactNo'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Nationality</label>
										<?php echo form_input(['name'=>'nationality', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('nationality').$data->nationality]);?>
					    				<div class="errorClass"><?php echo form_error('nationality'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'studentNID', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('studentNID').$data->studentNID]);?>
					    				<div class="errorClass"><?php echo form_error('studentNID'); ?></div>
									</div>			
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Birth Registration No.</label>
										<?php echo form_input(['name'=>'studentBirthRegNo', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('studentBirthRegNo').$data->studentBirthRegNo]);?>
					    				<div class="errorClass"><?php echo form_error('studentBirthRegNo'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<?php echo form_textarea(['name'=>'studentAddress', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled','required'=>'required', 'rows'=>'3', 'value'=>set_value('studentAddress').$data->studentAddress]);?>
										<div class="errorClass"><?php echo form_error('studentAddress'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'stdNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('stdNote').$data->stdNote]);?>
					    				<div class="errorClass"><?php echo form_error('stdNote'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-10 col-md-offset-1">
															<div class="std-image">
														  		<a href="#" class="img-container">
															      <img src="<?php echo base_url($data->stdImage); ?>" alt="...">
															    </a>
														  	</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label for="exampleInputFile">Student's Image</label>
														<?php echo form_input(['name'=>'stdImage', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'type'=>'file','value'=>set_value('stdImage').$data->stdImage]);?>
														<div class="errorClass"><?php echo form_error('stdImage'); ?></div>
													</div>
												</div>
											</div>		
										</div>
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-10 col-md-offset-1">
															<div class="std-image">
														  		<a href="#" class="img-container">
															      <img src="<?php echo base_url($data->stdIdCard); ?>" alt="...">
															    </a>
														  	</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label for="exampleInputFile">Student's ID Card</label>
														<?php echo form_input(['name'=>'stdIdCard', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','type'=>'file','value'=>set_value('stdIdCard').$data->stdIdCard]);?>
														<div class="errorClass"><?php echo form_error('stdImage'); ?></div>	
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
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-10 col-md-offset-1">
															<div class="std-image">
														  		<a href="#" class="img-container">
															      <img src="<?php echo base_url($data->parentsImage); ?>" alt="...">
															    </a>
														  	</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label for="exampleInputFile">Parent's Image</label>
														<?php echo form_input(['name'=>'parentsImage', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','type'=>'file','value'=>set_value('parentsImage').$data->parentsImage]);?>
														<div class="errorClass"><?php echo form_error('stdImage'); ?></div>	
													</div>
												</div>
											</div>		
										</div>
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-10 col-md-offset-1">
															<div class="std-image">
														  		<a href="#" class="img-container">
															      <img src="<?php echo base_url($data->parentsIdCard); ?>" alt="...">
															    </a>
														  	</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label for="exampleInputFile">Parent's ID Card</label>
														<?php echo form_input(['name'=>'parentsIdCard', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'type'=>'file','value'=>set_value('parentsIdCard').$data->parentsIdCard]);?>
														<div class="errorClass"><?php echo form_error('stdImage'); ?></div>	
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
							<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
						</div>
					</div>
					<?php echo form_close() ?>								
				</div>		
			</div>
		</div>
	</div>
	<?php if($std_info['gurdian_info']): ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>Gurdian Information</h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<?php echo form_open('manager/updateGurdianInfo'); ?>
						<?php echo form_hidden('gurdianId', $std_info['gurdian_info']->gurdianId); ?>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Father's Name</label>
										<?php echo form_input(['name'=>'stdFatherName', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('stdFatherName').$std_info['gurdian_info']->stdFatherName]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherName'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact No.</label>
										<?php echo form_input(['name'=>'stdFatherContactNo', 'id'=>'date', 'class'=>'form-control removeDis', 'disabled'=>'disabled', 'value'=>set_value('stdFatherContactNo').$std_info['gurdian_info']->stdFatherContactNo]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherContactNo'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Occupation</label>
										<?php echo form_input(['name'=>'stdFatherOccupation', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('stdFatherOccupation').$std_info['gurdian_info']->stdFatherOccupation]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherOccupation'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'stdFatherNID', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('stdFatherNID').$std_info['gurdian_info']->stdFatherNID]);?>
					    				<div class="errorClass"><?php echo form_error('stdFatherNID'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Mother's Name</label>
										<?php echo form_input(['name'=>'stdMotherName', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('stdMotherName').$std_info['gurdian_info']->stdMotherName]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherName'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact No.</label>
										<?php echo form_input(['name'=>'stdMotherContactNo', 'id'=>'date', 'class'=>'form-control removeDis', 'disabled'=>'disabled', 'value'=>set_value('stdMotherContactNo').$std_info['gurdian_info']->stdMotherContactNo]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherContactNo'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Occupation</label>
										<?php echo form_input(['name'=>'stdMotherOccupation', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('stdMotherOccupation').$std_info['gurdian_info']->stdMotherOccupation]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherOccupation'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'stdMotherNID', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('stdMotherNID').$std_info['gurdian_info']->stdMotherNID]);?>
					    				<div class="errorClass"><?php echo form_error('stdMotherNID'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<?php echo form_textarea(['name'=>'gurdianAddress', 'class'=>'form-control removeDis', 'disabled'=>'disabled','rows'=>'3','value'=>set_value('gurdianAddress').$std_info['gurdian_info']->gurdianAddress]);?>
					    				<div class="errorClass"><?php echo form_error('gurdianAddress'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Husband Name</label>
										<?php echo form_input(['name'=>'husbandName', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('husbandName').$std_info['gurdian_info']->husbandName]);?>
					    				<div class="errorClass"><?php echo form_error('husbandName'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Contact No.</label>
										<?php echo form_input(['name'=>'husbandContactNo', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('husbandContactNo').$std_info['gurdian_info']->husbandContactNo]);?>
					    				<div class="errorClass"><?php echo form_error('husbandContactNo'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Occupation</label>
										<?php echo form_input(['name'=>'husbandOccupation', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('husbandOccupation').$std_info['gurdian_info']->husbandOccupation]);?>
					    				<div class="errorClass"><?php echo form_error('husbandOccupation'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> National ID No.</label>
										<?php echo form_input(['name'=>'husbandNID', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('husbandNID').$std_info['gurdian_info']->husbandNID]);?>
					    				<div class="errorClass"><?php echo form_error('husbandNID'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<?php echo form_textarea(['name'=>'husbandAddress', 'class'=>'form-control removeDis', 'disabled'=>'disabled','rows'=>'3','value'=>set_value('husbandAddress').$std_info['gurdian_info']->husbandAddress]);?>
					    				<div class="errorClass"><?php echo form_error('husbandAddress'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
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
							<?php echo form_open('manager/updateGurdianInfo'); ?>
							<?php echo form_hidden('gurdianId', $std_info['gurdian_info']->gurdianId); ?>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Local Gurdian's Name</label>
										<?php echo form_input(['name'=>'localGurdianName', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('localGurdianName').$std_info['gurdian_info']->localGurdianName]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianName'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Contact No.</label>
										<?php echo form_input(['name'=>'localGurdianContactNo', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('localGurdianContactNo').$std_info['gurdian_info']->localGurdianContactNo]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianContactNo'); ?></div>
									</div>			
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Occupation</label>
										<?php echo form_input(['name'=>'localGurdianOccupation', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('localGurdianOccupation').$std_info['gurdian_info']->localGurdianOccupation]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianOccupation'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>National ID No.</label>
										<?php echo form_input(['name'=>'localGurdianNID', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('localGurdianNID').$std_info['gurdian_info']->localGurdianNID]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianNID'); ?></div>
									</div>			
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Relationship With Student</label>
										<?php echo form_input(['name'=>'localGurdianRelationship', 'class'=>'form-control removeDis', 'disabled'=>'disabled','value'=>set_value('localGurdianRelationship').$std_info['gurdian_info']->localGurdianRelationship]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianRelationship'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Local Gurdian's Address</label>
										<?php echo form_textarea(['name'=>'localGurdianAddress', 'class'=>'form-control removeDis', 'disabled'=>'disabled','rows'=>'3','value'=>set_value('localGurdianAddress').$std_info['gurdian_info']->localGurdianAddress]);?>
					    				<div class="errorClass"><?php echo form_error('localGurdianAddress'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>								
				</div>	
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<?php if($qualification['ssc']): ?>
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>SSC </h4>
						</div>
						<div class="panel-body card-shadow">
							<?php echo form_open('manager/updateStudentQualificationInfo', 'class="studentQualificationInfo-form"') ?>
							<?php echo form_hidden('sQId', $qualification['ssc']->sQId); ?>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> School</label>
										<?php echo form_input(['name'=>'institutionName', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('institutionName').$qualification['ssc']->institutionName]);?>
					    				<div class="errorClass"><?php echo form_error('institutionName'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Group</label>
										<select name="group" class="form-control removeDis" disabled>
											<option value="" selected disabled> <?php 
											if($qualification['ssc']->group == 1) {echo 'Science';}
											elseif ($qualification['ssc']->group == 2) {echo 'Commerce';} 
											 else {echo "Humanities";}; 
											 ?></option>
											<option value="1">Science</option>
											<option value="2">Commerce</option>
											<option value="3">Humanities</option>
										</select>
					    				<div class="errorClass"><?php echo form_error('group'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Class</label>
										<?php echo form_input(['name'=>'class', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('class').$qualification['ssc']->class]);?>
					    				<div class="errorClass"><?php echo form_error('class'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Class Roll</label>
										<?php echo form_input(['name'=>'classRoll', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('classRoll').$qualification['ssc']->classRoll]);?>
					    				<div class="errorClass"><?php echo form_error('classRoll'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Section</label>
										<?php echo form_input(['name'=>'section', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('section').$qualification['ssc']->section]);?>
					    				<div class="errorClass"><?php echo form_error('section'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Class Time</label>
										<?php echo form_input(['name'=>'classTime', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('classTime').$qualification['ssc']->classTime]);?>
					    				<div class="errorClass"><?php echo form_error('classTime'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Board</label>
										<select name="board" class="form-control removeDis" disabled>
											<option value="" selected disabled> <?php 
											if($qualification['ssc']->board == 1) {echo 'Sylhet';}
											elseif ($qualification['ssc']->board == 2) {echo 'Dhaka';} 
											elseif ($qualification['ssc']->board == 3) {echo 'Comilla';} 
											elseif ($qualification['ssc']->board == 4) {echo 'Chittagong';} 
											elseif ($qualification['ssc']->board == 5) {echo 'Barisal';} 
											elseif ($qualification['ssc']->board == 6) {echo 'Dinajpur';} 
											elseif ($qualification['ssc']->board == 7) {echo 'Jessore';} 
											elseif ($qualification['ssc']->board == 8) {echo 'Rajshahi';} 
											elseif ($qualification['ssc']->board == 9) {echo 'Madrasah';} 
											else {echo "Technical";}; 
											 ?></option>
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
					    				<div class="errorClass"><?php echo form_error('board'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Passing Year</label>
										<?php echo form_input(['name'=>'passingYear', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('passingYear').$qualification['ssc']->passingYear]);?>
					    				<div class="errorClass"><?php echo form_error('passingYear'); ?></div>
									</div>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
								</div>
							</div>
							<?php echo form_close() ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php if($qualification['hsc']): ?>
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>HSC </h4>
						</div>
						<div class="panel-body card-shadow">
						<?php echo form_open('manager/updateStudentQualificationInfo', 'class="studentQualificationInfo-form"') ?>
						<?php echo form_hidden('sQId', $qualification['hsc']->sQId); ?>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> College</label>
										<?php echo form_input(['name'=>'institutionName', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('institutionName').$qualification['hsc']->institutionName]);?>
					    				<div class="errorClass"><?php echo form_error('institutionName'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Group</label>
										<select name="group" class="form-control removeDis" disabled>
											<option value="" selected disabled> <?php 
											if($qualification['hsc']->group == 1) {echo 'Science';}
											elseif ($qualification['hsc']->group == 2) {echo 'Commerce';} 
											else {echo "Humanities";}; 
											 ?></option>
											<option value="1">Science</option>
											<option value="2">Commerce</option>
											<option value="3">Humanities</option>
										</select>
					    				<div class="errorClass"><?php echo form_error('group'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Year</label>
										<?php echo form_input(['name'=>'class', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('class').$qualification['hsc']->class]);?>
					    				<div class="errorClass"><?php echo form_error('class'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Class Roll</label>
										<?php echo form_input(['name'=>'classRoll', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('classRoll').$qualification['hsc']->classRoll]);?>
					    				<div class="errorClass"><?php echo form_error('classRoll'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Section</label>
										<?php echo form_input(['name'=>'section', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('section').$qualification['hsc']->section]);?>
					    				<div class="errorClass"><?php echo form_error('section'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Class Time</label>
										<?php echo form_input(['name'=>'classTime', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','value'=>set_value('classTime').$qualification['hsc']->classTime]);?>
					    				<div class="errorClass"><?php echo form_error('classTime'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Board</label>
										<select name="board" class="form-control removeDis" disabled>
											<option value="" selected disabled> <?php 
											if($qualification['hsc']->board == 1) {echo 'Sylhet';}
											elseif ($qualification['hsc']->board == 2) {echo 'Dhaka';} 
											elseif ($qualification['hsc']->board == 3) {echo 'Comilla';} 
											elseif ($qualification['hsc']->board == 4) {echo 'Chittagong';} 
											elseif ($qualification['hsc']->board == 5) {echo 'Barisal';} 
											elseif ($qualification['hsc']->board == 6) {echo 'Dinajpur';} 
											elseif ($qualification['hsc']->board == 7) {echo 'Jessore';} 
											elseif ($qualification['hsc']->board == 8) {echo 'Rajshahi';} 
											elseif ($qualification['hsc']->board == 9) {echo 'Madrasah';} 
											else {echo "Technical";}; 
											 ?></option>
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
					    				<div class="errorClass"><?php echo form_error('board'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Passing Year</label>
										<?php echo form_input(['name'=>'passingYear', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('passingYear').$qualification['hsc']->passingYear]);?>
					    				<div class="errorClass"><?php echo form_error('passingYear'); ?></div>
									</div>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
								</div>
							</div>
							<?php echo form_close() ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
			
			<div class="row">
				<?php if($qualification['graduation']): ?> 
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Graduation or Equivalent </h4>
						</div>
						<div class="panel-body card-shadow">
						<?php echo form_open('manager/updateStudentQualificationInfo', 'class="studentQualificationInfo-form"') ?>
						<?php echo form_hidden('sQId', $qualification['graduation']->sQId); ?>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Institution</label>
										<?php echo form_input(['name'=>'institutionName', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('institutionName').$qualification['graduation']->institutionName]);?>
					    				<div class="errorClass"><?php echo form_error('institutionName'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Subject</label>
										<?php echo form_input(['name'=>'group', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('group').$qualification['graduation']->group]);?>
					    				<div class="errorClass"><?php echo form_error('group'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Semester (if any)</label>
										<?php echo form_input(['name'=>'semester', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('semester').$qualification['graduation']->semester]);?>
					    				<div class="errorClass"><?php echo form_error('semester'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Institution Student ID</label>
										<?php echo form_input(['name'=>'sQInstitutionId', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('sQInstitutionId').$qualification['graduation']->sQInstitutionId]);?>
					    				<div class="errorClass"><?php echo form_error('sQInstitutionId'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Graduation Year</label>
										<?php echo form_input(['name'=>'passingYear', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('passingYear').$qualification['graduation']->passingYear]);?>
					    				<div class="errorClass"><?php echo form_error('passingYear'); ?></div>
									</div>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
								</div>
							</div>
							<?php echo form_close() ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php if($qualification['postGraduation']): ?>
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4>Post Graduation or Equivalent </h4>
						</div>
						<div class="panel-body card-shadow">
						<?php echo form_open('manager/updateStudentQualificationInfo', 'class="studentQualificationInfo-form"') ?>
						<?php echo form_hidden('sQId', $qualification['postGraduation']->sQId); ?>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Institution</label>
										<?php echo form_input(['name'=>'institutionName', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('institutionName').$qualification['postGraduation']->institutionName]);?>
					    				<div class="errorClass"><?php echo form_error('institutionName'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Subject</label>
										<?php echo form_input(['name'=>'group', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('group').$qualification['postGraduation']->group]);?>
					    				<div class="errorClass"><?php echo form_error('group'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Semester (if any)</label>
										<?php echo form_input(['name'=>'semester', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('semester').$qualification['postGraduation']->semester]);?>
					    				<div class="errorClass"><?php echo form_error('semester'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Institution Student ID</label>
										<?php echo form_input(['name'=>'sQInstitutionId', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('sQInstitutionId').$qualification['postGraduation']->sQInstitutionId]);?>
					    				<div class="errorClass"><?php echo form_error('sQInstitutionId'); ?></div>
									</div>		
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label> Graduation Year</label>
										<?php echo form_input(['name'=>'passingYear', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('passingYear').$qualification['postGraduation']->passingYear]);?>
					    				<div class="errorClass"><?php echo form_error('passingYear'); ?></div>
									</div>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
								</div>
							</div>
							<?php echo form_close() ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	<?php if($std_info['course_info']): ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4> Others Courses's </h4>
				</div>
				<div class="panel-body card-shadow">
					<?php echo form_open('manager/updateStdCourseInfo'); ?>
					<?php echo form_hidden('coursesId', $std_info['course_info']->coursesId); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label> Institution Name</label>
								<?php echo form_input(['name'=>'courseInstitutionName', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('courseInstitutionName').$std_info['course_info']->courseInstitutionName]);?>
					    		<div class="errorClass"><?php echo form_error('courseInstitutionName');?></div>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label> Course Name</label>
								<?php echo form_input(['name'=>'courseName', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('courseName').$std_info['course_info']->courseName]);?>
					    		<div class="errorClass"><?php echo form_error('courseName'); ?></div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Time</label>
								<?php echo form_input(['name'=>'courseTime', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('courseTime').$std_info['course_info']->courseTime]);?>
					    		<div class="errorClass"><?php echo form_error('courseTime'); ?></div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Day's</label>
								<?php echo form_input(['name'=>'courseDays', 'class'=>'form-control removeDis','disabled'=>'disabled','value'=>set_value('courseDays').$std_info['course_info']->courseDays]);?>
					    		<div class="errorClass"><?php echo form_error('courseDays'); ?></div>
							</div>		
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if($std_info['seat_info']): ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4> Rent & Other Fees </h4>
				</div>
				<div class="panel-body card-shadow">
					<?php echo form_open('manager/updateStudentSeatInfo', 'class="studentSeatInfo-form"') ?>
					<?php echo form_hidden('sSeatId', $std_info['seat_info']->sSeatId); ?>
					<div class="row">

						<?php $std_info['seat_info']->studentExpireDate=date('m/d/Y',strtotime($std_info['seat_info']->studentExpireDate)); ?>
						<div class="col-md-3">
							<div class="form-group">
								<label> Zone</label>
								<select name="" id="selectZoneID" class="form-control removeDis" disabled>
									<option value="<?php echo $std_info['seat_info']->zone_info_zoneID ?>" selected disabled > <?php echo $std_info['seat_info']->zoneTitle ; ?></option>
									<?php foreach($values as $value) {?>
									<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
								<?php } ?>
								</select>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Building</label>
								<select name="" id="selectBuldingID" class="form-control zoneClass removeDis" disabled>
									<option value="<?php echo $std_info['seat_info']->building_info_seatBuildingId ?>" selected disabled > <?php echo $std_info['seat_info']->buildingNumber ; ?></option>
								</select>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Floor</label>
								<select name="" id="selectFloorID" class="form-control zoneClass buildingClass removeDis" disabled>
									<option value="<?php echo $std_info['seat_info']->floor_info_seatFloorId ?>" selected disabled > <?php echo $std_info['seat_info']->floorNumber ; ?></option>
								</select>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Unit</label>
								<select name="" id="selectUnitID" class="form-control zoneClass buildingClass floorClass removeDis" disabled>
									<option value="<?php echo $std_info['seat_info']->unit_info_seatUnitId ?>" selected disabled > <?php echo $std_info['seat_info']->unitNumber ; ?></option>
								</select>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label> Room</label>
								<select name="" id="selectRoomID" class="form-control zoneClass buildingClass floorClass unitClass removeDis" disabled>
									<option value="<?php echo $std_info['seat_info']->room_info_seatRoomId ?>" selected disabled > <?php echo $std_info['seat_info']->roomNumber ; ?></option>
								</select>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Seat</label>
								<select name="" id="studentSeatID" class="form-control zoneClass buildingClass floorClass unitClass roomClass removeDis" >
									<option value="<?php echo $std_info['seat_info']->seat_info_seatId ?>" selected disabled > <?php echo $std_info['seat_info']->seatNumber ; ?></option>
									
								</select>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Monthly Rent</label>
								<?php echo form_input(['name'=>'monthelyRent', 'class'=>'form-control removeDis ', 'id'=>'seatRentID', 'disabled'=>'disabled','required'=>'required', 'value'=>set_value('monthelyRent').$std_info['seat_info']->monthelyRent]);?>
					    		<div class="errorClass"><?php echo form_error('monthelyRent'); ?></div>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Special Discount</label>
								<?php echo form_input(['name'=>'specialDiscount', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','required'=>'required', 'value'=>set_value('specialDiscount').$std_info['seat_info']->specialDiscount]);?>
					    		<div class="errorClass"><?php echo form_error('specialDiscount'); ?></div>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label> Additional Charge</label>
								<?php echo form_input(['name'=>'additionalCharge', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','required'=>'required', 'value'=>set_value('additionalCharge').$std_info['seat_info']->additionalCharge]);?>
					    		<div class="errorClass"><?php echo form_error('additionalCharge'); ?></div>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Admission Fee</label>
								<?php echo form_input(['name'=>'admissionFee', 'class'=>'form-control', 'disabled'=>'disabled','required'=>'required', 'value'=>set_value('admissionFee').$std_info['seat_info']->admissionFee]);?>
					    		<div class="errorClass"><?php echo form_error('admissionFee'); ?></div>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Security Money </label>
								<?php echo form_input(['name'=>'securityMoney', 'class'=>'form-control ', 'disabled'=>'disabled','required'=>'required', 'value'=>set_value('securityMoney').$std_info['seat_info']->securityMoney]);?>
					    		<div class="errorClass"><?php echo form_error('securityMoney'); ?></div>
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label> Expire Date </label>
								<?php echo form_input(['name'=>'studentExpireDate', 'id'=>'endDate', 'class'=>'form-control removeDis', 'disabled'=>'disabled','required'=>'required', 'value'=>set_value('studentExpireDate').$std_info['seat_info']->studentExpireDate]);?>
					    		<div class="errorClass"><?php echo form_error('studentExpireDate'); ?></div>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
						</div>
					</div>
				<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if($std_info['work_info']): ?>
	<div class="row ">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4> Work Information </h4>
				</div>
				<div class="panel-body card-shadow">
					<?php echo form_open('manager/updateStudentWorkInfo'); echo form_hidden('sWId',$std_info['work_info']->sWId) ?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label> Company Name</label>
								<?php echo form_input(['name'=>'companyName', 'class'=>'form-control removeDis','disabled'=>'disabled',''=>'','value'=>set_value('companyName').$std_info['work_info']->companyName]);?>
			    				<div class="errorClass"><?php echo form_error('companyName'); ?></div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Work ID</label>
								<?php echo form_input(['name'=>'workId', 'class'=>'form-control removeDis','disabled'=>'disabled',''=>'','value'=>set_value('workId').$std_info['work_info']->workId]);?>
			    				<div class="errorClass"><?php echo form_error('workId'); ?></div>
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label> Designation</label>
								<?php echo form_input(['name'=>'designation', 'class'=>'form-control removeDis','disabled'=>'disabled',''=>'','value'=>set_value('designation').$std_info['work_info']->designation]);?>
			    				<div class="errorClass"><?php echo form_error('designation'); ?></div>
							</div>		
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label> Office Location</label>
								<?php echo form_textarea(['name'=>'officeLocation', 'class'=>'form-control removeDis','disabled'=>'disabled',''=>'', 'rows'=>'3','value'=>set_value('officeLocation').$std_info['work_info']->officeLocation]);?>
			    				<div class="errorClass"><?php echo form_error('officeLocation'); ?></div>
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif ; ?>
	
	<?php if($std_info['image_info']): ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>Upload File </h4>
				</div>
				<div class="panel-body card-shadow">
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<?php foreach($std_info['image_info'] as $image): ?>
								<?php echo form_open_multipart('manager/updateStudentImageInfo', 'class="studentInfo-form"') ?>
									<?php echo form_hidden('sImgId', $image->sImgId);
								 ?>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-10 col-md-offset-1">
													<div class="std-image">
												  		<a href="#" class="img-container">
													      <img src="<?php echo base_url($image->imageName); ?>" alt="...">
													    </a>
												  	</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="exampleInputFile">Additional 1</label>
												<?php echo form_input(['name'=>'stdAImage', 'class'=>'form-control removeDis ', 'disabled'=>'disabled','type'=>'file','value'=>set_value($image->imageName).$image->imageName]);?>
												
											</div>
										</div>
									
										<div class="col-md-12">
											<div class="form-group">
												<label>Caption</label>
												<?php echo form_input(['name'=>'imageCaption', 'class'=>'form-control  removeDis','disabled'=>'disabled','value'=>set_value('imageCaption').$image->imageCaption]);?>
												<div class="errorClass"><?php echo form_error('imageCaption'); ?></div>
											</div>
										</div>
									</div>		
								</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>
									</div>
								</div>
								<?php echo form_close(); ?>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<?php endif; ?>
	<?php if ($data->studentStatus != 3){ ?>
	<div class="row" id="fixedButton">
		<div class="col-md-12">
			<a type="button" class="btn btn-primary" id="removeDisabled"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
			<a class="btn btn-danger hidden hiddenButton" id="addDisabled" ><i class="fa fa-reply-all fa-2x" aria-hidden="true"></i></a>
		</div>
	</div>
	<?php } ?>
	
	<!--<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<a href="<?php //echo base_url('manager/transactions'); ?>" type="button" class="btn btn-primary btn-block removeDis" disabled>Transactions</a>
			</div>
			<div class="col-md-3">
				<a href="<?php //echo base_url('manager/studentHistory'); ?>" type="button" class="btn btn-primary btn-block removeDis" disabled>Student History</a>
			</div>
			<div class="col-md-3">
				<a href="<?php //echo base_url('manager/transfer'); ?>" type="button" class="btn btn-primary btn-block removeDis" disabled>Transfer</a>
			</div>
			<div class="col-md-3">
				<a href="<?php //echo base_url('manager/vacantCurrentSeat'); ?>" type="button" class="btn btn-primary btn-block removeDis" disabled>Vacant Current Seat</a>
			</div>
		</div>
	</div>-->
	
	<?php include('footer.php') ?>