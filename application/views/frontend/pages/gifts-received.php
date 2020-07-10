<?php $curr_user = $this->session->userdata('curr_user');
$name = $curr_user['display_name'] != '' ? $curr_user['display_name'] : $curr_user['name'];
$image = base_url('assets/profile_image/' . $curr_user['image']);
?>
<main class="content-wrapper">
    <section class="content-sec">
        <div class="dash_inner">
            <div class="dash_nav row">
                <div class="col-sm-2">
                    <h3 class="dashboard-text">My GIFTS</h3>
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
                        <?php if (count($gifts)): ?>
                            <div class="dash_box_hed">
                                <p>YOUR GIFTS</p>
                            </div>
                            <div class="manage-list performer-gift-view customScroll">
                                <ul style="list-style:none">
                                    <?php foreach ($gifts as $gift): ?>
                                        <li>
                                            <h4>
                                                <img src="<?=base_url('assets/profile_image/' . $gift->image)?>" width="80" class="img-circle"> <?=$gift->username?>
                                            </h4>
                                            <span><?=$gift->gift_credit?></span>
                                            <img src="<?=uploads_url($gift->gift_image_path)?>" alt="<?=$gift->gift_name?>">
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        <?php else: ?>
                            <h3>No gift found!!!</h3>
                        <?php endif;?>
                    </div>
                </div>
                <div class="col-md-6 pl-20">
                    <h2 class="overview">FINANCIAL OVERVIEW</h2>
                    <div class="dash_box network-area">
                        <div class="dash_box_hed">
                            <p>NETWORK EARNINGS TOTALS</p>
                        </div>
                        <div class="dash_box_body grid_2">
                            <ul>
                                <li>
                                    <span class="lft_txt">SHOWS: £0.00</span>
                                </li>
                                <li>
                                    <span class="lft_txt">GIFTS: <?=currency_format($current_month_gift_totals)?></span>
                                </li>
                                <li>
                                    <span class="lft_txt">CHAT: £0.00</span>
                                </li>
                            </ul>
                            <div class="bg_txt">
                                <span>THIS MONTH</span>
                                <p><?=currency_format($current_month_gift_totals)?></p>
                            </div>
                        </div>
                    </div>
                    <div class="dash_box network-area loyalty">
                        <div class="dash_box_hed">
                            <p>LOYALTY</p>
                        </div>
                        <div class="dash_box_body grid_2">
                            <div class="bg_txt bg_txt1">
                                <span>MONTHLY POINTS EARNED</span>
                                <p><?=$gift_points;?></p>
                            </div>
                            <div class="bg_txt">
                                <span>TOTAL EARNED</span>
                                <p><?=currency_format($gift_points);?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>