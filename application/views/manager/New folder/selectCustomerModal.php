
<div class="modal bs-example-modal-lg" tabindex="-1" id="selectCustomerModal" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Select Customer</h4>
      	</div>
      	<div class="modal-body filterable">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="pull-right">
					<button id="filter_button" class="btn btn-warning btn-filter with_print" ><i class="fa fa-filter"></i> Filter
					</button>
				</div>
      		</div>
      	</div>
        <div class="row m-top-15">
        	<div class="col-md-12">
    			<table class="table table-striped table-condensed">
    				<thead>
    					<tr class="filters">		
    						<th>
								<input type="text" class="form-control" placeholder="Customer ID" disabled data-toggle="true" id="">
							</th>
							<th>
								<input type="text" class="form-control" placeholder="Name" disabled id="">
							</th>
							<th>
								<input type="text" class="form-control" placeholder="Phone" disabled id="">
							</th>
							
							<th>
								<input type="text" class="form-control" placeholder="Primary Address" disabled id="">
							</th>										
							<th>
								<span >Select</span>
							</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td>108007</td>
    						<td>Nikhil Kurmi</td>
    						<td>01671614060</td>
    						<td>Jallarpar, Zindabazar, Sylhet</td>
    						<td>
    							<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button>
    						</td>
    					</tr>
    				</tbody>
    			</table>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>