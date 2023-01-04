<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Income Expense Report</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Income Expense Report</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body card-shadow">
					<?php echo form_open('manager/incomeExpenseReport')?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label> From</label>
								<input type="text" id="startDate" class="form-control" name="firstDate" value="<?php if($inputs['firstDate']) echo date('m/d/Y',strtotime($inputs['firstDate'])) ?>">
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> To</label>
								<input type="text" id="endDate" class="form-control" name="lastDate" value="<?php if($inputs['lastDate']) echo date('m/d/Y',strtotime($inputs['lastDate'])) ?>">
							</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
					<?php echo form_close()?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>Income</h4>
				</div>
				<?php $totalIncome=0; $totalExpense=0; ?>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Field</th>
										<th>Amount</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($incomes as $income) {?>
									<tr>
										<td><?php echo $income->paymentTypeTitle ?></td>
										<td><?php echo $income->receivedPaymentAmount ?></td>
									</tr>
									<?php $totalIncome=$totalIncome+$income->receivedPaymentAmount; }?>
								</tbody>
							</table>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>Expense</h4>
				</div>
				<div class="panel-body card-shadow">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Field</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($expenses as $expense) {?>
									<tr>
										<td><?php echo $expense->fieldTitle ?></td>
										<td><?php echo $expense->expenseAmount ?></td>
									</tr>
									<?php $totalExpense=$totalExpense+$expense->expenseAmount; }?>
								</tbody>
							</table>	
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
						<div class="col-md-6">
							<div class="form-group">
								<label> Total Income</label>
								<input type="text" class="form-control" name="" value="<?= $totalIncome ?>" disabled>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label> Total Expense</label>
								<input type="text" class="form-control" name="" value="<?= $totalExpense; ?>" disabled>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php') ?>