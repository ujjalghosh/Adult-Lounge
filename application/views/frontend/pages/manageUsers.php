<?php $curr_user = $this->session->userdata('curr_user');
$name = $curr_user['display_name'] != '' ? $curr_user['display_name'] : $curr_user['name'];
$image = base_url('assets/profile_image/' . $curr_user['image']);
?>
<main class="content-wrapper loyalty-page">
	<section class="content-sec">
        <div class="dash_inner">
            <div class="dash_nav row">
                <div class="col-sm-2">
                    <h3 class="dashboard-text">MANAGE USERS</h3>
                </div>
                <div class="col-sm-10">
                    <div class="">
                        <div class="dash_user_info">
                            <div class="dash_user_pic">
                                <img src="<?=$image?>" alt=""/>
                            </div>
                            <div class="dash_user_name">
                                <p><?=$name?></p>
                                <a href="<?=base_url('profile')?>">EDIT PROFILE</a>
                            </div>
                            <div class="dash_user_rank">
                                <p>CURRENT RANKING</p>
                                <span><?=$user_details->performer_rank?></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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