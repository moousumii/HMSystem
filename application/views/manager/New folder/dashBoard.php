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
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-xs-6 col-md-3 dashboard-total-cash">
					<div class="panel panel-info">
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4 col-md-4">
									<i class="fa fa-money fa-5x" aria-hidden="true"></i>
								</div>
								<div class="col-xs-8 col-md-8">
									<h3>Total Cash </h3>
									<h3>৳ 20000</h3>
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
	</div>
	
<?php include('footer.php') ?>