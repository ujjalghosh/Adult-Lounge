<main class="content-wrapper loyalty-page">
	<section class="content-sec">
    	<div class="manage-user-heading">
        	<h3 class="dashboard-text">MANAGE USERS</h3>
            <ul>
            	<li>
                	<img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/>
                    <h5>PERFORMER NAME</h5>
                    <a href="<?=base_url('profile')?>">EDIT PROFILE</a>
                </li>
                <li>
                	<h5>CURRENT RANKING</h5>
                    <h2>1,110</h2>
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
                                	<h4><img height="30" width="30" src="<?=base_url('assets/profile_image/' . $subscribe->image)?>" alt=""/> <?=$subscribe->username?>  @<?=$subscribe->usernm?></h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">BLOCK</a>
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
                                    <h4><img height="30" width="30"  src="<?=base_url('assets/profile_image/' . $user->image)?>" alt=""/> <?=$user->username?>  @<?=$user->usernm?></h4>
                                    <div class="list-btn">
                                        <a href="#" class="btn">MESSAGE</a>
                                        <a href="#" class="btn">BLOCK</a>
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