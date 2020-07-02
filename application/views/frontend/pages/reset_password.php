<section class="modal modal-signup forgot-paddword-box">
    <span class="overlay"></span>
	<span class="close_reg" id="cancel_btn">X</span>
    <div class="modal-body">
        <div class="modal-widget mdl-lft forgot-modal">

                <h2><img src="<?=base_url('assets/images/line-logo.png')?>" alt="logo" /> Reset Password </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum lorem nisl. convallis nec semper quis, tincidunt non est. </p>
            <form id="reset_password" method="post" autocomplete="off" action="<?=base_url('auth/passwordResetSubmit')?>">
                <input type="hidden" name="user_secret" value="<?=$user_secret?>">
                <div class="form-group">
                    <input type="password" placeholder="New Password" class="form-control"  name="password" id="password" />
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Confirm Password" class="form-control"  name="confirm_password" id="confirm_password" />
                </div>
<div id="fmsg"></div>
  <a href="<?=base_url('login')?>">Login</a>
                <button type="submit" class="btn">Reset</button>
            </form>
            <span style="color:red;" class="login-message"></span>
            <h4>LEGAL DISCLAIMER:</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum lorem nisl. Aliquam erat volutpat. Proin vulputate enim ac hendrerit sagittis. </p>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function($) {

        $("#reset_password").validate({
            rules:
            {
             password : {
                required:true,
                    minlength : 5
                },
                confirm_password : {
                     required:true,
                    minlength : 5,
                    equalTo : "#password"
                }
            },
            messages:{
                password:{
                  required: "Please enter new password",
                },
                confirm_password:{
                  required: "Please enter new confirm password",
                },
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
                    success  : function(res) {
                      $('#fmsg').html(res.message);
                      if(res.success==true){
                        $("#fmsg").css("color", "green");
                      }else{
                        $("#fmsg").css("color", "red");
                      }
                    },
                    beforeSend: function () {
                        $("body").waitMe(waitmeOptions);
                    },
                    complete: function () {
                        $("body").waitMe("hide");
                    },
                });
            }
        }).settings.ignore = [];

    });
</script>
