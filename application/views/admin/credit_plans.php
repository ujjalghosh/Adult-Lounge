<?php $this->load->view('admin/layout/header');?>

    <!-- side bar -->
    <?php $this->load->view('admin/layout/sidemenu');?>

    <!-- CONTENT -->
    <!-- ========================================================= -->
    <div class="content">
        <!-- content HEADER -->
        <!-- ========================================================= -->
        <div class="content-header">
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url('admin/dashboard')?>">Dashboard</a></li>
                    <li><a>Manage Credit Plans</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-md-12">
                <!--<h4 class="section-subtitle">Manage CMS</h4>-->
                <div class="row">
                    <div class="col-xs-10">
                        <h3 class="page-heding-title">

                        </h3>
                    </div>
                    <div class="col-xs-2">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="<?=base_url('admin/credit/add_plan?mode=add')?>" class="btn btn-wide btn-primary btn-sm pull-right">Add New Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($this->session->flashdata('success_msg')) {?>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert">×</a>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    <?=$this->session->flashdata('success_msg')?>
                </div>
                <?php }?>
                   <?php if ($this->session->flashdata('error_msg')) {?>
            <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert">×</a>
                <h4><i class="icon fa fa-close"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
            </div>
            <?php }?>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Heading</th>
                                        <th>Credit amount</th>
                                        <th>Sell price</th>
                                        <th>Tag</th>
                                        <th>Last updated</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
if ($data_list) {
	$i = 1;
	foreach ($data_list as $dis_list) {
		?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=stripslashes($dis_list['title'])?></td>
                                        <td><?=$dis_list['credit']?></td>
                                        <td><i class="fa fa-fw fa-gbp"></i><?=$dis_list['sell_price']?></td>
                                        <td><?=($dis_list['tag']) ? $dis_list['tag'] : '---'?></td>
                                        <td><?=($dis_list['updated_at']) ? date('d M, Y H:i', strtotime($dis_list['updated_at'])) : '---'?></td>
                                        <td><a href="javascript:void(0)" id="<?=$dis_list['id']?>" class="change-status" data-table="credit_plans" data-url="admin/services/change_status" title="Status | Green:Active, Red:InActive">
                                        <?php if ($dis_list['status'] == 1) {?>
                                        <span class="glyphicon glyphicon-ok-sign green-check-icon"></span>
                                        <?php } else {?>
                                        <span class="glyphicon glyphicon-remove-sign red-check-icon"></span>
                                        <?php }?>
                                        </a></td>
                                        <td><a href="<?=base_url('admin/credit/add_plan?mode=edit&id=' . $dis_list['id'])?>" title="edit"><i class="fa fa-fw fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php
$i++;
	}
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>


<?php $this->load->view('admin/layout/footer');?>
<script src="<?=base_url()?>backend/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>backend/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
<!--Examples-->
<script src="<?=base_url()?>backend/javascripts/examples/tables/data-tables.js"></script>