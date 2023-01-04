<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Student Report</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Student Report</li>
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
					<?php echo form_open('manager/studentReport', 'class="transactions-form"')?>
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
					<?php //print_r($inputs); exit; ?>
					<div class="panel-body card-shadow">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								    <label>Student ID</label>
								    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?= $infos->stdIdNo ?>" disabled >
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
								    <label>Student Name</label>
								    <input type="text"  class="form-control" value="<?= $infos->studentName ?>" disabled >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label>Phone</label>
								    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?= $infos->studentContactNo ?>" disabled >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label>Seat No</label>
								    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?= $infos->seatNumber ?>" disabled >
								</div>
							</div>
							<?php $seatType=common::get_seat_type_by_id($infos->seat_type_info_seatSeatTypeId); ?>
							<div class="col-md-4">
								<div class="form-group">
								    <label>Seat Type</label>
								    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?= $seatType ?>" disabled >
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
								    <label>Student Status</label>
								    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?php if($infos->studentStatus==1) echo "Active"; elseif($infos->studentStatus==2) echo "InActive";elseif($infos->studentStatus==3) echo "Complete"; else echo "In Hold";  ?>" disabled >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label>Due Amount</label>
								    <input type="text" class="form-control" name="monthlyBillingMonth" value="<?= $infos->studentWalletAmount ?>" disabled >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label>Student Type</label>
								    <input type="text" id="date" class="form-control" name="monthlyBillingMonth" value="<?= $infos->admissionTypeName;?>" disabled >
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info filterable">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 m-bottom-10 m-top-10">
							<div class="pull-right">
								<button id="filter_button" class="btn btn-warning btn-filter with_print m-top-20" ><i class="fa fa-filter"></i> Filter
								</button>
							</div>							
						</div>
					</div>
				</div>
				<div class="panel-body">	
					<div class="row">
						<div class="col-md-12 m-top-15">
							<table class="table table-striped" >
								<thead>

									<tr class="filters">											
										<th>
											<input type="text" class="form-control text-left" placeholder="Date & Time" disabled data-toggle="true">
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Transaction Type" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Details" disabled>
										</th>
										<th>
											<input type="text" class="form-control" placeholder="Amount" disabled>
										</th>
										<th>
											<span>View</span>
										</th>
										
									</tr>
								</thead>
								
								<tbody>
									<?php if($transections){ ?>
										<?php foreach ($transections as $info) {?>
										<tr>
											<td><?php echo $info->transactionDate ?></td>
											<td><?php echo $info->transactionTypeTitle ?></td>
											<td><?php echo $info->transactionDetails ?></td>
											<td><?php echo $info->transactionAmount ?></td>
											<td><a href="<?php echo base_url("manager/$info->transactionTypeLink/{$info->transactionRefferenceId}");?>"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a></td>
											
										</tr>
										<?php }?>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>