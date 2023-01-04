<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Debit Note</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Debit Note</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/storeDebitNote'); ?>
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Date</label>
									    <input type="text" class="form-control" id="date" name="debitNoteDate" value="">
									  </div>
								</div>			
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Select Client Name</label>
									    <select class="form-control forselect2" name="client_info_debitNoteClientId" value="">
										  <?php foreach ($data as $value) {
										   ?>
										  <option value="<?php echo $value->clientID;  ?>"><?php echo $value->clientContactName;  ?></option>
										  <?php } ?>
										</select>

									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Amount</label>
									    <input type="text" class="form-control" name="debitNoteAmount" value="">
									</div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Details</label>
									    <textarea type="text" class="form-control" name="debitNoteDetails" value=""></textarea> 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Note</label>
									   	<textarea type="text" class="form-control" name="debitNoteInfoNote" value=""></textarea> 
									  </div>
								</div>		
							</div>							
							<div class="row m-top-15">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
									<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
								</div>	
							</div>
						</div>
					</div>	
					<?php echo form_close(); ?>
				</div>	
			</div>
		</div>
	</div>

<?php include('footer.php') ?>