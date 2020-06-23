<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidemenu');

if (isset($item_info)) {
	$item_id = $item_info->id;
	$name = $item_info->name;
	$image = $item_info->image;
	$status = $item_info->status;
} else {
	$item_id = '0';
	$name = '';
	$image = '';
	$status = 1;
}
?>
<div class="content">
    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=base_url('admin/dashboard')?>">Dashboard</a></li>
                <li><a><?=isset($gift) ? 'Edit' : 'Add'?> Buy Item</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-md-12">
          <?php
if ($this->session->flashdata('success_msg') != null) {
	echo $this->session->flashdata('success_msg');
} else if ($this->session->flashdata('error_msg') != null) {
	echo $this->session->flashdata('error_msg');
}?>
<div id="message_show"></div>

            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">

                           <form name="item_form" id="item_form" method="post" action="<?=base_url('admin/items/insert_update_item')?>" class="form-horizontal"  autocomplete="off" enctype="multipart/form-data" >
                <input type="hidden" name="item_id" value="<?=$item_id?>"/>


 <div class="form-group">
                                    <label for="email2" class="col-sm-4 control-label">Item Name *</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="name" class="form-control" value="<?=$name?>" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email2" class="col-sm-4 control-label">Item Image *</label>
                                    <div class="col-sm-4">
                                        <img src="<?=uploads_url('buy_tem/' . $image)?>" id="imageElem" class="pb-3" style="<?=$image != '' ? '' : 'display:none'?>" height="80" width="80">
                                        <input type="file" name="item_image" id="form-control" accept="image/jpeg, image/png, image/gif" onchange="onImageChange(this)">
                                        <?php if (isset($image)): ?>
                                            <input type="hidden" name="saved_item_image" id="saved_item_image"  value="<?=$image?>">
                                        <?php endif;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email2" class="col-sm-4 control-label">Is Active? *</label>
                                    <div class="col-sm-4">
                                        <label class="checkbox-inline">
                                            <input type="radio" name="is_active" value="1" <?=(isset($status) && $status == 1) ? 'checked' : 'checked'?>> Yes
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="radio" name="is_active" value="0" <?=(isset($status) && $status == 0) ? 'checked' : ''?>> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                       <div class="col-sm-6"><a href="<?=$this->agent->referrer();?>" class="btn btn-info bordered text-uppercase"><i class="fa fa-angle-double-left " ></i> Back</a></div>
                    <div class="col-sm-6 ">
                      <div class="pull-right">
                        <div class="loader"><div id="show-hide" style="display:none;"><img src="assets/images/loader.svg"></div></div>
                      <button type="submit" class="btn btn-primary text-uppercase"><?=(isset($item_info) ? 'Update' : 'Add');?></button></div></div>
                                </div>



              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/layout/footer');?>

  <script  >
  $(function(){

  $("#item_form").validate({
  errorPlacement: function (error, element) {
  error.addClass("invalid-feedback");
  if (element.prop("type") === "checkbox") {
  error.insertAfter(element.siblings("label"));
  }
  else {
  error.insertAfter(element);
  }
  },
  errorElement: "div",
  errorClass: 'is-invalid',
  validClass: 'is-valid',
  rules:
  {
  item_image:{
    required: function(element){
            return $("#saved_item_image").val()=="";
        },
    extension: "jpg|gif|png|jpeg|JPG|PNG"
  } ,
  name:{
  "required":true,
  } ,

  },
  messages:
  {
  item_image:{
  "required":  "Please choose item image",
  "extension": "Allow only image format jpg,png,jpeg "
  } ,
  name:
  {
  "required": "Please enter item name",
  }
  },
  submitHandler: function(form) {
  var formData = new FormData($(form)[0]);
  $.ajax({
  type     : "POST",
  cache    : false,
  contentType: false,
  processData: false,
  url      : form.action,
  dataType : 'json',
  data     : formData,
  success  : function(data) {
  if(data.success==0){
  $('#message_show').html(data.error_message);
  }else{
  $('#message_show').html(data.success_message);
  if(data.action == 'add'){
  $("#item_form")[0].reset();
  $('#item_form').find('.is-valid').removeClass("is-valid");
  $("#imageElem").data('src', '').hide();

  }else{
  location.href="<?=base_url('admin/items/')?>";
  }
  }
  $('html, body').animate({
  scrollTop: 0
  }, 800);
  },
  beforeSend: function(){
  $("#show-hide").show();
  },
  complete: function(){
  $("#show-hide").hide();
  }
  });
  }
  }).settings.ignore = [];
  });

  </script>
