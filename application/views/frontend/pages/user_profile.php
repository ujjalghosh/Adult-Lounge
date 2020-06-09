<!-- <?php //echo "<pre>"; print_r($user);exit;
echo SITE_NAME; ?> -->
<style>
.video-container {
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
	grid-auto-rows: 80px;
	gap: 1em;
}
.video-box {
	border: 1px solid #b8a368;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
}
.video-box video {
	max-width: 100%;
	object-fit: cover;
	max-height: 100%;
}
#video-upload-form {
    color: #d8c17e;
}
.video-play-btn {
	position: absolute;
}
.video-play-btn:hover {
    cursor: pointer;
    color: #b8a368;
}
.video-play-btn .fa-pause {
    display: none
}
.video-box.is-playing:hover .fa-pause {
    display: block;
}
.video-box:not(.is-playing) .fa-play {
    display: block;
}
.video-box.is-playing .fa-play {
    display: none;
}
.default-show-wrap {
	position: absolute;
	bottom: -2em;
}
</style>

<link rel="stylesheet" href="<?=base_url('assets/node_modules/lightgallery.js/dist/css/lightgallery.min.css')?>">
<link rel="stylesheet" href="<?=base_url('assets/css/switcher.css')?>">

<main class="content-wrapper">
    <section class="content-sec">
        <div class="box-content-layout">
            <div class="title-sec">
                <h1>GENERAL INFORMATION</h1>
            </div>
            <div class="box-content-widget per">
                <div class="leftsc ">
                    <p>SUBMIT BASIC DETAILS  </p>
                </div>
                <div class="rightsec">

                </div>
                <div class="clear"></div>
                <form id="userprofile-form" method="post" autocomplete="off" class="form-catagories">
                    <div class="box-content-widget pl-0">
                        <div class="form-two-col per2 leftsc ">
                            <div class="show show2">
                                <h3>PROFILE PHOTO</h3>
                                <div class="form-group">
                                    <div class="proo profile-view">
                                        <?php if ($user[0]['image'] == '') {?>
                                        <img src="<?=base_url('assets/images/noimage.png')?>" alt="" style="height:49px; width:45px;" id="display_img">
                                        <?php } else {?>
                                        <img src="<?=base_url('assets/profile_image/' . $user[0]['image'])?>" alt="" style="height:49px; width:45px;" id="display_img">
                                        <?php }?>
                                    </div>
                                    <input type="file" value="UPLOAD THUMBNAIL" class="form-control username formsm" name="editpro_image" id="editpro_image" />
                                    <div class="brows editpro_image_brows">BROWSER</div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-widget perso ">
                        <input type="hidden" value="<?=$user[0]['id']?>" name="editpro_id">
                        <input type="hidden" value="<?=$user[0]['image']?>" name="old_editpro_image">
                        <div class="form-two-col">
                            <div class="form-group">
                                <input type="text" placeholder="NAME" class="man form-control username requiredCheck" data-check="Name" name="name" id="name" value="<?=$user[0]['name']?>" />
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="man form-control username requiredCheck" data-check="email" name="email" id="email" value="<?=$user[0]['email']?>" />
                            </div>
                             <div class="form-group">
                                <select class="custom-select requiredCheck" name="editpro_sexual_pref" id="editpro_sexual_pref" data-check="Sexual Preference">
                                    <option value="">SEXUAL PREFERENCE</option>
                                    <option value="Male" <?php if (isset($user)) {if ($user[0]['gender'] == 'Male') {print 'selected';}}?>>Male</option>
                                    <option value="Female" <?php if (isset($user)) {if ($user[0]['gender'] == 'Female') {print 'selected';}}?>>Female</option>
                                    <option value="Both" <?php if (isset($user)) {if ($user[0]['gender'] == 'Both') {print 'selected';}}?>>Both</option>
                                </select>
                            </div>
                             <div class="form-group">
                                <input type="text" placeholder="Phone No" class="man form-control " data-check="phone_no" name="phone_no" id="phone_no" value="<?=$user[0]['phone_no']?>" />
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Age" class="man form-control " data-check="age" name="age" id="age" value="<?=$user[0]['age']?>" />
                            </div>




                        </div>

                    </div>


<div class="form-two-col">
                                    <div class="form-group form-action mt-0">
                                        <input type="submit" value="Update" id="editpro_submit_btn">
                                    </div>
                                </div>
                    <span class="editpro-message" style="color:red;font-style: italic;"></span>
                </form>
            </div>
        </div>
    </section>
</main>

<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lightgallery.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-thumbnail.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-autoplay.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-fullscreen.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-zoom.min.js')?>"></script>
<script>
    lightGallery(document.getElementById('image-lightgallery'), {
        selector          : '.gal-item',
        thumbnail         : true,
        download          : false,
        animateThumb      : false,
        showThumbByDefault: false,
    });
</script>
