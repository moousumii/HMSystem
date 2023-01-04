<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Vacant</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Vacant</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<?php echo form_open('manager/saveVacantSeat'); ?>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Select Student ID</label>
										<select name="student_id" id="vacantStdID" class="form-control forselect2" required >
											<option value="" selected disabled > Select an Option</option>
											<?php foreach($students as $student):?>
												<option value="<?php echo $student->studentId?>"><?php echo $student->stdIdNo ?> => <?php echo $student->studentName?></option>
											<?php endforeach; ?>
										</select>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="" value="" id="vacantStdNameID" disabled >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" name="" value="" id="vacantStdPhnID" disabled >
										
									</div>			
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Current Seat No.</label>
										<input type="text" class="form-control" name="" value="" id="vacantSeatNumberID" disabled >
									</div>
								</div>
							</div>
							<input type="hidden" name="seat_info_seat_id" id="vacantSeatID" />
							<input type="hidden" name="sSeatId" id="vacantStudentSeatID" />
							
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-success"> Vacant </button>
									<button type="reset" class="btn btn-primary"> Reset </button>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>								
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>