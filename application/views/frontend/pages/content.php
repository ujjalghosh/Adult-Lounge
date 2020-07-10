<main class="content-wrapper">
    <section class="content-sec">
        <div class="col-md-12">
            <div class="dash_box">
                <div class="dash_box_hed">
                    <p><?=$page->page_title?></p>
                </div>
                <div class="content-area p-3">
                    <?=$page->page_content?>
                </div>

<!-- Profile content -->

 <div class="box-content-widget pl-3">
                        <div class="form-two-col per2 leftsc ">
                            <div class="show show2 user-profile-edit">
                                <h3>PROFILE PHOTO</h3>
                                <div class="form-group">
                                    <div class="proo profile-view">
                                        <?php if ($user[0]['image'] == '') {?>
                                        <img src="<?=base_url('assets/images/noimage.png')?>" alt="" style="height:49px; width:45px;" id="display_img">
                                        <?php } else {?>
                                        <img src="<?=base_url('assets/profile_image/' . $user[0]['image'])?>" alt="" style="height:49px; width:45px;" id="display_img">
                                        <?php }?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <?php
if ($user[0]['images'] != '') {
	$img = explode(',', $user[0]['images']);
} else {
	$img = array();
}
?>

                    <div class="box-content-widget pl-3">
                        <div class="form-two-col per2 leftsc ">
                            <div id="image-lightgallery" class="show show2">
                                <h3>GALLERY</h3>
                                <?php
if (!empty($img)) {
	for ($i = 0; $i < count($img); $i++) {
		?>
                                <div class="form-group">
                                    <div class="proo">
                                        <a class="gal-item" href="<?=base_url('assets/performer_gallery/' . $img[$i])?>">
                                            <img src="<?=base_url('assets/performer_gallery/' . $img[$i])?>" alt="" style="height:49px; width:45px;">
                                        </a>
                                    </div>
                                </div>
                                <?php }}?>
                                <br />
                                <br />

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <?php
if ($user[0]['videos'] != '') {
	$performer_videos = explode(',', $user[0]['videos']);
} else {
	$performer_videos = array();
}
?>
                    <div class="box-content-widget pl-3">
                        <div class="form-two-col per2 leftsc ">
                            <div class="show show2">
                                <h3>VIDEO GALLERY  </h3>
                                <div class="video-container mt-2">
                                    <?php if (count($performer_videos)): ?>
                                        <?php foreach ($performer_videos as $video): ?>
                                            <div class="video-box">
                                                <video height="160" preload="metadata" loop>
                                                    <source src="<?=base_url('assets/profile_videos/' . $video)?>">
                                                </video>
                                                <a class="video-play-btn">
                                                    <i class="fa fa-play"></i>
                                                    <i class="fa fa-pause"></i>
                                                </a>
                                            </div>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="box-content-widget pl-3 checkbox-area">


                        <div class="form-two-col per2 leftsc float-left-none">
                            <div class="show">




                                <h3>DESCRIPTION INFORMATION </h3>

                                <div class="show float-none">
                                    <p class="ingin"><?=$user[0]['description']?></p>
                                </div>






<!-- End profile content -->

            </div>
        </div>
    </section>
</main>