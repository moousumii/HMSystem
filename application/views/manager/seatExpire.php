<?php include('header.php') ?>
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">Seats Expire Date</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
            <li class="active">Seats Expire Date</li>
        </ol>
    </div>
</div>
<?php include('messages.php') ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-body card-shadow">
                <?php echo form_open('manager/seatExpire')?>
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
                                        <input type="text" class="form-control text-left" placeholder="Seat No." disabled data-toggle="true">
                                    </th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="Student ID" disabled>
                                    </th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="Student Name" disabled>
                                    </th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="Expire Date" disabled>
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($expires as $expire) {?>
                                <tr>
                                    <td><?php echo $expire->seatNumber ?></td>
                                    <td><?php echo $expire->stdIdNo ?></td>
                                    <td><?php echo $expire->studentName ?></td>
                                    <td><?php echo $expire->studentExpireDate ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</div>
<?php include('footer.php') ?>