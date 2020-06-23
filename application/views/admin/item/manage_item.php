<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidemenu');
?>
<div class="content">
    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url('admin/dashboard')?>">Dashboard</a></li>
                <li><a>Buy Items</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-md-12">

<div id="message_show">           <?php
if ($this->session->flashdata('success_msg') != null) {
	echo $this->session->flashdata('success_msg');
} else if ($this->session->flashdata('error_msg') != null) {
	echo $this->session->flashdata('error_msg');
}?></div>

            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="buy_items-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Item Image</th>
                                    <th>Is Active?</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
<!--                             <tbody>
                                <?php
if (count($gifts)) {
	foreach ($gifts as $index => $gift) {
		?>
                                <tr>
                                    <td><?=$index + 1?>.</td>
                                    <td><img src="<?=base_url('uploads/' . $gift['gift_image_path'])?>" height="80"></td>
                                    <td><?=$gift['gift_name']?></td>
                                    <td><?=$gift['is_active'] ? 'Yes' : 'No'?></td>
                                    <td><a href="<?=base_url('admin/gifts/edit/' . encrypt_id($gift['id']))?>" title="edit"><i class="fa fa-fw fa-edit"></i></a>
                                    </td>
                                </tr>
                                <?php
}
}
?>
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/layout/footer');?>

<script src="<?=base_url()?>backend/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>backend/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $("#buy_items-table").one("preInit.dt", function () {
        $button = $("<a class='btn btn-primary ml-3 mt-3' href='<?=base_url('admin/items/add')?>'>Add New</a>");
        $("#buy_items-table_filter label").append($button);
        $button.button();
    });
});
</script>
<script>
$(document).ready(function() {
var dataTable = $('#buy_items-table').DataTable({
"processing":true,
"serverSide":true,
"DisplayLength": 25,
"order":[ 0, "asc" ],
"ajax":{
url:"<?php echo base_url() . 'admin/items/get_items'; ?>",
type:"POST"
},
"columnDefs":[
{
"targets":[1,3],
"orderable":false,
},
],
});

del =function (aa,bb,cc) {
  var a = confirm("Are you sure, you want to delete this " + cc + "?");
  if (a) {
  //  location.href = bb + "?cid=" + aa + "&action=delete";


            $.ajax({
              type     : "POST",
              cache    : false,
              contentType: false,
              processData: false,
              url      : "<?=base_url();?>"+bb,
              dataType : 'json',
              success  : function(data) {
                if(data.success==0){
                  $('#message_show').html(data.error_message);
                }else{
                  $('#message_show').html(data.success_message);
                   dataTable.ajax.reload();
                }
              },
              beforeSend: function(){
                $(".page_load").show();
              },
              complete: function(){
                $(".page_load").hide();
              }
            });

  }
}
} );
</script>
<!-- <script src="<?=base_url()?>backend/javascripts/examples/tables/data-tables.js"></script> -->