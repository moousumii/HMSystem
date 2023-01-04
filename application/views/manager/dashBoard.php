<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Dash Board</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
         </ol>
      </div>
	</div>
	<div class="row dashboard">
		<div class="col-md-12">
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 dashboard-total-cash">
					<div class="panel panel-default">
						<div class="panel-body red-panel">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<i class="fa fa-money" aria-hidden="true"></i>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<h4>Income </h4>
									<h4>৳ <?php echo $totalCash; ?></h4>
								</div>
							</div>
						</div>
						<div class="panel-footer red-footer text-center">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4 border-right">
											<h5>Bill <br>৳<?= $billPayment?> </h5>
										</div>
										<div class="col-md-4 border-right">
											<h5>Security <br>৳<?= $securityPayment?> </h5>
										</div>
										<div class="col-md-4">
											<h5>Others <br>৳<?= $otherPayment; ?> </h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 dashboard-total-cash">
					<div class="panel panel-default">
						<div class="panel-body orange-panel">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<i class="fa fa-money" aria-hidden="true"></i>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<h4>Total Seat </h4>
									<h4><?php echo $totalSeat; ?></h4>
								</div>
							</div>
						</div>
						<div class="panel-footer orange-footer text-center">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6 border-right">
											<h5>Full <br><?= $fullSeat ?></h5>
										</div>
										<div class="col-md-6 ">
											<h5>Blank <br><?= $freeSeat ?></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 dashboard-total-cash">
					<div class="panel panel-default">
						<div class="panel-body green-panel">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<i class="fa fa-money" aria-hidden="true"></i>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<h4>Total Expense </h4>
									<h4>৳ <?php if($totalExpense)echo $totalExpense; else echo "0"; ?></h4>
								</div>
							</div>
						</div>
						<!-- <div class="panel-footer green-footer text-center">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4 border-right">
											<h5>Bazar <br>৳1256452</h5>
										</div>
										<div class="col-md-4 border-right">
											<h5>Salary <br>৳1256452</h5>
										</div>
										<div class="col-md-4">
											<h5>House Rent <br>৳1256452</h5>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>					
				</div>
				
			</div>
			<div class="row">				
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 dashboard-total-cash">
					<div class="panel panel-default">
						<div class="panel-body blue-panel">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<i class="fa fa-money" aria-hidden="true"></i>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<h4>Total Due </h4>
									<h4>৳ <?php echo $due; ?></h4>
								</div>
							</div>
						</div>
						<!-- <div class="panel-footer blue-footer text-center">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4">
											Rent 
										</div>
										<div class="col-md-4">
											Food Bill 
										</div>
										<div class="col-md-4">
											Profit 
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-body">
							<canvas id="myChart1" width="100%"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-body">
							<canvas id="myChart2" width="100%"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-body">
							<canvas id="myChart3" width="100%"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-body">
							<canvas id="myChart4" width="100%"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
<?php include('footer.php') ?>