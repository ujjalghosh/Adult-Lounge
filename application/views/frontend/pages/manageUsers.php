<?php $curr_user = $this->session->userdata('curr_user');
$name = $curr_user['display_name'] != '' ? $curr_user['display_name'] : $curr_user['name'];
$image = base_url('assets/profile_image/' . $curr_user['image']);
?>
<main class="content-wrapper loyalty-page">
	<section class="content-sec">
    	<div class="manage-user-heading">
        	<h3 class="dashboard-text">MANAGE USERS</h3>
            <ul>
            	<li>
                	<img src="<?=$image?>" alt=""/>
                    <h5><?=$name?></h5>
                    <a href="<?=base_url('profile')?>">EDIT PROFILE</a>
                </li>
                <li>
                	<h5>CURRENT RANKING</h5>
                    <h2><?=$user_details->performer_rank?></h2>
                </li>
            </ul>
        </div>
        <div class="manage-area">
        	<div class="ad-row">
            	<div class="col-md-6 pr-20">
                	<div class="dash_box">
                        <div class="dash_box_hed">
                            <p>SUBSCRIBERS</p>
                        </div>
                        <div class="manage-list">
                        	<ul>
                                <?php if ($all_subscribers) {
	foreach ($all_subscribers as $subscribe) {

		?>
                            	<li>
                                	<h4><img height="30" width="30" src="<?=base_url('assets/profile_image/' . $subscribe->image)?>" alt=""/> <?=$subscribe->username?>  <?=$subscribe->usernm?></h4>
                                    <div class="list-btn">
                                    	<a href="javascript:void(0);" class="btn user-msg" data-uid="<?=$subscribe->user_id?>">MESSAGE</a>
                                    	<a href="javascript:void(0);" class="btn user-block blk_<?=$subscribe->user_id?>" data-uid="<?=$subscribe->user_id?>"><?=($subscribe->is_blocked == 0 ? 'BLOCK' : 'UNBLOCK')?></a>
                                    </div>
                                </li>
                             <?php }}?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-20">
                	<div class="dash_box">
                        <div class="dash_box_hed">
                            <p>GENERAL USERS</p>
                        </div>
                        <div class="manage-list">
                        	<ul>
                            	       <?php if ($all_users) {
	foreach ($all_users as $user) {

		?>
                                <li>
                                    <h4><img height="30" width="30"  src="<?=base_url('assets/profile_image/' . $user->image)?>" alt=""/> <?=$user->username?>  <?=$user->usernm?></h4>
                                    <div class="list-btn">
                                        <a href="javascript:void(0);" class="btn user-msg" data-uid="<?=$user->user_id?>">MESSAGE</a>
                                        <a href="javascript:void(0);" class="btn user-block blk_<?=$user->user_id?>" data-uid="<?=$user->user_id?>"> <?=($user->is_blocked == 0 ? 'BLOCK' : 'UNBLOCK')?></a>
                                    </div>
                                </li>
                             <?php }}?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
</main>