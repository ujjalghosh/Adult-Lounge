<main class="content-wrapper">
    <section class="content-sec">
        <div class="subs_thumb">
            <div class="subs_thumb_hed">
                <p>My Subscribers</p>
            </div>
            <div class="subs_thumb_inner">
                <?php
if (!empty($mySubs)) {
	?>
                <ul>
                    <?php for ($i = 0; $i < count($mySubs); $i++) {?>
                    <li>
                        <?php if ($mySubs[$i]['image'] != '') {?>
                        <img src="<?=base_url('assets/profile_image/' . $mySubs[$i]['image'])?>" alt="<?=($mySubs[$i]['display_name'] != '') ? $mySubs[$i]['display_name'] : $mySubs[$i]['name']?>">
                        <?php } else {?>
                        <img src="<?=base_url('assets/images/noimage.png')?>" alt="<?=($mySubs[$i]['display_name'] != '') ? $mySubs[$i]['display_name'] : $mySubs[$i]['name']?>">
                        <?php }?>
                        <figure>
                            <span class="subs_name"><?=($mySubs[$i]['display_name'] != '') ? $mySubs[$i]['display_name'] : $mySubs[$i]['name']?></span>
                            <span class="subs_uname"><?=$mySubs[$i]['usernm']?></span>
                        </figure>
                    </li>
                    <?php }?>
                </ul>
                <?php } else {?>
                <h1 class="no-subs">Sorry !!! No Subscribers Found !!!</h1>
                <?php }?>
            </div>
        </div>


      <!--   <div class="dash_box ">
            <div class="dash_box_hed">
                <p>YOUR GIFTS</p>
            </div>
            <div class="manage-list performer-gift-view customScroll os-host os-theme-round-dark os-host-overflow os-host-overflow-y os-host-scrollbar-horizontal-hidden os-host-transition">
            <table id="example" class="table table-borderless gift-datatable">
                <thead>
                    <tr>
                        <th>User </th>
                        <th>Name</th>
                        <th>Gift</th>
                        <th>Age</th>
                        <th>Date</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/assets/profile_image/1591809734XiYCc7q38hQ.jpg" width="80" class="img-circle">
                        </td>
                        <td>Test User</td>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/uploads/gifts/gift-5dd4f9c7a87c6.png" alt="Gift 1">
                        </td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/assets/profile_image/1591809734XiYCc7q38hQ.jpg" width="80" class="img-circle">
                        </td>
                        <td>Test User</td>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/uploads/gifts/gift-5dd4f9c7a87c6.png" alt="Gift 1">
                        </td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/assets/profile_image/1591809734XiYCc7q38hQ.jpg" width="80" class="img-circle">
                        </td>
                        <td>Test User</td>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/uploads/gifts/gift-5dd4f9c7a87c6.png" alt="Gift 1">
                        </td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/assets/profile_image/1591809734XiYCc7q38hQ.jpg" width="80" class="img-circle">
                        </td>
                        <td>Test User</td>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/uploads/gifts/gift-5dd4f9c7a87c6.png" alt="Gift 1">
                        </td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/assets/profile_image/1591809734XiYCc7q38hQ.jpg" width="80" class="img-circle">
                        </td>
                        <td>Test User</td>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/uploads/gifts/gift-5dd4f9c7a87c6.png" alt="Gift 1">
                        </td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/assets/profile_image/1591809734XiYCc7q38hQ.jpg" width="80" class="img-circle">
                        </td>
                        <td>Test User</td>
                        <td>
                            <img src="http://hirewebagency.com/adultlounge/uploads/gifts/gift-5dd4f9c7a87c6.png" alt="Gift 1">
                        </td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div> -->


    </section>
</main>


