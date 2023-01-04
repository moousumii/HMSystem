<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Transfer Product</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Transfer Product</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Date</label>
									   	<input type="text" class="form-control" name="" id="date" value="">
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
									    <label>Product Name</label>
									   	<select name="" id="" class="form-control forselect2">
									    	<option value="0">Select an Option</option>
									    	<option value="1">Rod</option>
									    	<option value="2">Cement</option>
									    	<option value="3">Tin</option>
									    </select>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
									    <label>Quantity</label>
									   	<input type="text" class="form-control" name="" value="">
									</div>
								</div>
							</div>
							<div class="row">								
								<div class="col-md-6">
									<div class="form-group">
									    <label>Transfer from</label>
									   	<select name="" id="" class="form-control forselect2">
									    	<option value="0">Select an Option</option>
									    	<option value="1">Storage 1</option>
									    	<option value="2">Storage 2</option>
									    	<option value="3">Storage 3</option>
									    </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Transfer to </label>
									   	<select name="" id="" class="form-control forselect2">
									    	<option value="0">Select an Option</option>
									    	<option value="1">Storage 1</option>
									    	<option value="2">Storage 2</option>
									    	<option value="3">Storage 3</option>
									    </select>
									</div>
								</div>								
							</div>
							<div class="row">								
								<div class="col-md-6">
									<div class="form-group">
									    <label>Reference</label>
									   	<textarea name="" id="" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Note </label>
									   	<textarea name="" id="" class="form-control"></textarea>
									</div>
								</div>								
							</div>

							<div class="row m-bottom-25">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
									<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
								</div>	
							</div>
						</div>
					</div>						
				</div>	
			</div>
		</div>
	</div>

	
	
<?php include('addCashAccountModal.php') ?>
<?php include('footer.php') ?>