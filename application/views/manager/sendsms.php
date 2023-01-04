<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Send SMS</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Send SMS</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
   	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6">
							<h4>Search Student </h4>
						</div>
						
					</div>
				</div>
				<?php //print_r($inputs); exit; ?>
				<div class="panel-body card-shadow">
					<?php echo form_open('manager/sendsms', 'class="transactions-form"')?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Student Name</label>
								<select name="student_id" class="form-control forselect2">
									<option value="0" selected disabled > Select an Option</option>						
									<?php foreach($students as $student) {?>
										<option value="<?php echo $student->studentId?>">(<?php echo $student->stdIdNo?>) <?php echo $student->studentName?></option>
									<?php } ?>
								</select>
								<div class="errorClass"><?php echo form_error('student_info_paymentStudentId'); ?></div>
							</div>	
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-primary" style="margin-top:25px;">Submit</button>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<?php if($infos){ ?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-6">
								<h4>Student Information </h4>
							</div>
							
						</div>
					</div>
					<?php echo form_open('manager/createSms', 'class="transactions-form"')?>
						<div class="panel-body card-shadow">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
									    <label>Student ID</label>
									    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?= $infos->stdIdNo ?>" disabled >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Student Name</label>
									    <input type="text"  class="form-control" value="<?= $infos->studentName ?>" disabled  >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Student Mobile</label>
									    <input type="text" class="form-control" name="std_mob" value="<?= $infos->studentContactNo ?>" required  >
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
									    <label>Gurdian Name</label>
									    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?= $infos->localGurdianName ?>" disabled >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Gurdian Mobile</label>
									    <input type="text" name="gur_mob"  class="form-control" value="<?= $infos->localGurdianContactNo ?>" required  >
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Gurdian Relation with Student</label>
									    <input type="text" class="form-control" name="" value="<?= $infos->localGurdianRelationship ?>" disabled >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Seat No</label>
									    <input type="text" class="form-control" name="" value="<?= $infos->seatNumber ?>" disabled >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Student Status</label>
									    <input type="text" class="form-control" name="" value="<?php if($infos->studentStatus==1) echo "Active"; elseif($infos->studentStatus==2) echo "InActive";elseif($infos->studentStatus==3) echo "Complete"; else echo "In Hold";  ?>" disabled >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Due Amount</label>
									    <input type="text" class="form-control" name="" value="<?= $infos->studentWalletAmount ?>" disabled >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label>Send SMS To</label>
									    <select name="send_to" class="form-control" required>
											<option value="" selected disabled > Select an Option</option>	
											<option value="1" >Both</option>
											<option value="2">Gurdian</option>
											<option value="3" >Student</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									    <label>Type Message</label>
									    <textarea class="form-control" name="message" required ></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary " style="margin-top:25px; float:right;">Send</button>
								</div>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	<?php }?>
<?php include('footer.php') ?>