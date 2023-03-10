<?php include('header.php') ?>
<div class="row">
    <div class="col-md-12">
        <?php if($this->session->flashdata('feedback_successfull'))
					{ ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">?</span>
								</button>
                <strong>Success!</strong>
                <?php echo $this->session->flashdata('feedback_successfull'); ?>
            </div>
            <?php } 
					if($this->session->flashdata('feedback_failed'))
						{ ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">?</span>
									</button>
                    <strong>Oops!</strong>
                    <?php echo $this->session->flashdata('feedback_failed'); ?>
                </div>
                <?php   } ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">All Expense Field</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url('superAdmin/addExpenseField'); ?>" target="_blank" type="button" class="btn btn-primary pull-right">Add New Expense Field</a>
                    </div>
                </div>
                <?php if($infos){  ?>
                <div class="row m-top-15">
                    <div class="col-md-12">
                        <table id="showInventory" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Field Name</th>
                                    <th>Expense Field Status</th>
                                    <th>Expense Field Added Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($infos as $info):  //print_r($info);?>
                                <?php $info->expenseFieldAddedDate= date('d,M y h:ia', strtotime($info->expenseFieldAddedDate)); ?>
                                <tr id="expenseField<?php echo $info->expenseFieldID ?>" class="active">
                                    <td>
                                        <?php echo $info->expenseFieldID; ?>
                                    </td>
                                    <td>
                                        <?php echo $info->expenseFieldName; ?>
                                    </td>
                                    <td>
                                        <?php if($info->expenseFieldStatus==1) echo "Active";else echo "InActive"; ?>
                                    </td>
                                    <td>
                                        <?php echo $info->expenseFieldAddedDate; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-info"></i></button>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div align="center">
                        <ul class="pagination">
                            <?php echo $this->pagination->create_links(); ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>