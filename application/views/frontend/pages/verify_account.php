<section class="modal modal-signup forgot-paddword-box">
    <span class="overlay"></span>
	<span class="close_reg" id="cancel_btn">X</span>
    <div class="modal-body">
        <div class="modal-widget mdl-lft forgot-modal">
            <!-- <h2><?=$message?></h2>

                <div class="form-action">
                    <ul>
                        <li> <a href="<?=base_url('login')?>">Login</a></li>
                        <li> <a href="<?=base_url('signup')?>">Signup</a></li>
                        <li><a href="javascript:void(0)" class="assist">NEED ASSISTANCE</a></li>
                    </ul>
                </div> -->

                <h2><img src="<?=base_url('assets/images/line-logo.png')?>" alt="logo" /> Reset Password </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum lorem nisl. convallis nec semper quis, tincidunt non est. </p>
            <form id="forgot-form" method="post" autocomplete="off">
                <div class="form-group">
                    <input type="password" placeholder="Old Password" class="form-control"  name="" id="" />
                </div>
                <div class="form-group">
                    <input type="password" placeholder="New Password" class="form-control"  name="" id="" />
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Confirm Password" class="form-control"  name="" id="" />
                </div>
                <button type="submit" class="btn">Reset</button>
            </form>
            <span style="color:red;" class="login-message"></span>
            <h4>LEGAL DISCLAIMER:</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum lorem nisl. Aliquam erat volutpat. Proin vulputate enim ac hendrerit sagittis. </p>
        </div>
    </div>
</section>
