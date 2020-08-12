<script type="text/javascript">
	jQuery(document).ready(function($) {
		    setInterval(function () {

			$.ajax({
			    type: "POST",
			    url: base_url + "user-check-new-msg",
			    data: {
			        'last_id': $("#vcLastChatId").val(),
			        'performer_id':'<?=$user[0]['id']?>',
			    },
			    cache: false,
			    dataType:'json',
			    success: function (data) {
			        if(data.status==true){
			            $('#mCSB_1_container').append(data.chatlist);
			            $('#vcLastChatId').val(data.last_chat_id);
			             scrollToLast();
			        }
			    }
			});

        //});
    }, 5000);
	});
</script>
  <script src="//media.twiliocdn.com/sdk/js/video/releases/1.20.1/twilio-video.js"></script>
<link rel="stylesheet" href="<?=base_url('assets/node_modules/lightgallery.js/dist/css/lightgallery.min.css')?>">
<?php if (!$this->session->userdata('UserType')) {?>
<input type="hidden" id="p_receiver_id" value="<?=$user[0]['id']?>">
<input type="hidden" id="p_receiver_type" value="performer">
<input type="hidden" id="p_sender_id" value="0">
<input type="hidden" id="p_sender_type" value="user">
	<?php }?>

<?php if ($this->session->userdata('UserType') == 1) {?>
<input type="hidden" id="p_receiver_id" value="<?=$user[0]['id']?>">
<input type="hidden" id="p_receiver_type" value="performer">
<input type="hidden" id="p_sender_id" value="<?=$this->session->userdata('UserId')?>">
<input type="hidden" id="p_sender_type" value="user">
<?php }?>
<input type="hidden" id="last_chat" value="<?=$last_chat->id?>">
<input type="hidden" id="vcLastChatId" value="0">
<main class="content-wrapper">
<section class="content-sec">
<div class="perform-widget perform-top-layout">
<div class="perform-left-widget">
<div class="imgbox">

<?php if ($user[0]['performer_live'] == 1) {?>

 <div id="remote-media"  >
<video id="remoteVideo" autoplay poster="<?=base_url('assets/images/giphy.gif')?>"></video>
 </div>

<?php } else {
	if ($user[0]['performer_live'] != 0) {
		?>

  <div class="group-message">
<div class="group-message-text">
	<?php if ($user[0]['performer_live'] == 2) {
			?>
<h3><?php if ($user[0]['display_name'] != '') {
				print $user[0]['display_name'];
			} else {
				print $user[0]['name'];
			}?> is currently in group</h3>
<h6>Would you join to join at £<?=$user[0]['price_in_group']?> per minute</h6>
<?php if ($this->session->userdata('UserType')) {
				?>
<a href="javascript:void(0);" onclick="startVideoChat('<?=$user[0]['id']?>', '<?php if ($user[0]['display_name'] != '') {
					print $user[0]['display_name'];
				} else {
					print $user[0]['name'];
				}?>',2)" class="btn">Join Group</a>
		<?php } else {?>
<a href="<?=base_url('login')?>"   class="btn">Join Group</a>
		<?php }?>

<?php }?>



</div>
</div>




<img src="<?=base_url('assets/images/img-003.jpg')?>" alt="img" />

<?php }}?>
<?php if ($user[0]['performer_live'] == 0): ?>

  <div class="group-message">
<div class="group-message-text">

<h3><?php if ($user[0]['display_name'] != '') {
	print $user[0]['display_name'];
} else {
	print $user[0]['name'];
}?> is currently offline</h3>


</div>
</div>




<img src="<?=base_url('assets/images/img-003.jpg')?>" alt="img" />


<?php endif?>

</div>


<!-- bellow video bar -->

<div class="option-box">

<div class="btn dropup start-show-dropdown">
<a href="javascript:void(0)" class="btn text-center dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">START SHOW</a>
<div class="dropdown-menu dropdown-show-type">
<h3>SELECT SHOW TYPE</h3>
<ul>
	<?php if ($user[0]['performer_live'] == 1): ?>
<li class="bg-light-pink">
<?php if ($this->session->userdata('UserType')) {
	?>
	<a href="javascript:void(0);" class="btn text-center" id="videostartButton" onclick="startVideoChat('<?=$user[0]['id']?>', '<?php if ($user[0]['display_name'] != '') {
		print $user[0]['display_name'];
	} else {
		print $user[0]['name'];
	}?>',1)">Private <span>$<?=$user[0]['price_in_private']?> P/M</span></a>

<?php } else {?>
<a href="<?=base_url('login')?>"   class="btn">Private <span>$<?=$user[0]['price_in_private']?> P/M</span></a>
		<?php }?>


</li>

<?php endif?>

	<?php if ($user[0]['performer_live'] != 0): ?>
<li class="bg-light-gray">
<?php if ($this->session->userdata('UserType')) {
	?>
	<a href="javascript:void(0);" class="btn text-center" id="videostartButton" onclick="startVideoChat('<?=$user[0]['id']?>', '<?php if ($user[0]['display_name'] != '') {
		print $user[0]['display_name'];
	} else {
		print $user[0]['name'];
	}?>',2)">Group <span>$<?=$user[0]['price_in_group']?> P/M</span></a>
<?php } else {?>
<a href="<?=base_url('login')?>"   class="btn">Group <span>$<?=$user[0]['price_in_group']?> P/M</span></a>
		<?php }?>
</li>

<?php endif?>




	<?php if ($user[0]['performer_live'] != 0): ?>
<li class="bg-light-green">
<?php if ($this->session->userdata('UserType')) {
	?>
	<a href="javascript:void(0);" class="btn text-center" id="videostartButton" onclick="startVideoChat('<?=$user[0]['id']?>', '<?php if ($user[0]['display_name'] != '') {
		print $user[0]['display_name'];
	} else {
		print $user[0]['name'];
	}?>',3)">Private spy to spy <span>$<?=$user[0]['price_private_spy_2_spy']?> P/M</span></a>
<?php } else {?>
<a href="<?=base_url('login')?>" class="btn">Private spy to spy <span>$<?=$user[0]['price_private_spy_2_spy']?> P/M</span></a>
		<?php }?>
</li>

<?php endif?>


<?php if ($user[0]['performer_live'] != 0): ?>
<li class="bg-deep-pink">
<?php if ($this->session->userdata('UserType')) {
	?>
	<a href="javascript:void(0);" class="btn text-center" id="videostartButton" onclick="startVideoChat('<?=$user[0]['id']?>', '<?php if ($user[0]['display_name'] != '') {
		print $user[0]['display_name'];
	} else {
		print $user[0]['name'];
	}?>',4)">Full Private <span>$<?=$user[0]['price_full_private']?> P/M</span></a>
<?php } else {?>
<a href="<?=base_url('login')?>" class="btn">Full Private<span>$<?=$user[0]['price_full_private']?> P/M</span></a>
<?php }?>
</li>

<?php endif?>




</ul>
</div>
</div>



<?php if ($this->session->userdata('UserType')) {
	?>
<?php if (empty($subs)) {?>
<a href="javascript:void(0)" onclick="subscribe('<?=$user[0]['id']?>', '<?=$this->session->userdata('UserId')?>')" class="btn text-center subs_btn">Subscribe</a>
<?php } else {
		?>
<a href="javascript:void(0)" onclick="subscribe('<?=$user[0]['id']?>', '<?=$this->session->userdata('UserId')?>')" class="btn text-center subs_btn">
<?php if ($subs[0]->status == 0) {
			print 'Subscribe';
		} else {
			print 'Unsubscribe';
		}?>
</a>
<?php }
} else {?>
<a href="<?=base_url('login')?>"  class="btn text-center subs_btn">Subscribe</a>
<?php }?>
<?php if ($this->session->userdata('UserType')) {?>

<a href="javascript:void(0)" class="btn text-center" id="myBtn2">Buy Credits</a>
<a href="javascript:void(0)" class="btn text-center gift-modal">Send Gifts</a>
<?php } else {?>
    <a href="<?=base_url('login')?>" class="btn text-center" id="myBtn2">Buy Credits</a>
<a href="<?=base_url('login')?>" class="btn text-center gift-modal">Send Gifts</a>
    <?php }?>
<a href="javascript:void(Tawk_API.toggle())" class="btn text-center">Concierge Service</a>
</div>
</div>
<div class="perform-right-widget">
<div class="box001">
<h2><?php if ($user[0]['display_name'] != '') {
	print $user[0]['display_name'];
} else {
	print $user[0]['name'];
}?></h2>
<div class="flex-cont">
<ul>
<li><img src="<?=base_url('assets/images/icon-xs-love.png')?>" alt="" /> 320.000</li>
<li><img src="<?=base_url('assets/images/icon-xs-trophy.png')?>" alt="" /> 320.000</li>
</ul>
<?php if ($this->session->userdata('UserType')) {
	?>
<?php if (empty($subs)) {?>
<a href="javascript:void(0)" onclick="subscribe('<?=$user[0]['id']?>', '<?=$this->session->userdata('UserId')?>')" class="btn text-center subs_btn">Subscribe</a>
<?php } else {
		?>
<a href="javascript:void(0)" onclick="subscribe('<?=$user[0]['id']?>', '<?=$this->session->userdata('UserId')?>')" class="btn text-center subs_btn">
<?php if ($subs[0]->status == 0) {
			print 'Subscribe';
		} else {
			print 'Unsubscribe';
		}?>
</a>
<?php }
} else {
	?>
<a href="<?=base_url('login')?>"  class="btn text-center subs_btn">Subscribe</a>
<?php }?>
</div>
</div>
<div class="right-chat-area">
<div class="box002">
<div class="heading-stripe">
<h3><?php if ($user[0]['display_name'] != '') {
	print $user[0]['display_name'];
} else {
	print $user[0]['name'];
}?> Chat</h3>
</div>
<div class="list-style">
<ul class="chat-ul ovr-scrl-box" id="p_chat_box">
<?php
$last_chat_id = '';
if (!empty($chat)) {
	for ($i = 0; $i < count($chat); $i++) {
		$last_chat_id = $chat[$i]->id;
		?>
<li style="<?php if ($chat[$i]->sender_id == $this->session->userdata('UserId')) {
			print 'text-align: right';
		}?>"><?=$chat[$i]->msg?></li>
<?php }
}?>
</ul>
</div>
</div>
<input type="hidden" id="last_chat_id" value="<?=$last_chat_id?>">
<div class="box003">
<div class="btm-form">
<input type="text" id="p_chat_msg" />
<?php if ($this->session->userdata('UserType')) {
	?>
<input type="button" value="Send" id="p_send_chat" />
<?php } else {?>
<a href="<?=base_url('login')?>"  >Send</a>
<?php }?>
<ul>
<li>
<img src="<?=base_url('assets/images/icon-giftbox.png')?>" alt="Send Gift" />
<?php if ($this->session->userdata('UserType')) {
	?>
<a href="javascript:void(0);" class="gift-modal">Gift</a>
<?php } else {?>
<a href="<?=base_url('login')?>" class="gift-modal">Gift</a>
    <?php }?>
</li>
<li>
    <?php if ($this->session->userdata('UserType')) {
	?>
<?php //if (isset($user[0]['performer_rank'])) {?>
<input type="hidden" id="perf_vote<?=$user[0]['id']?>" value="<?=$point;?>">
<input type="hidden" id="perf_rank<?=$user[0]['id']?>" value="<?=$user[0]['performer_rank']?>">
<?php //}?>
<input type="hidden" id="perf_name<?=$user[0]['id']?>" value="<?php if ($user[0]['display_name'] != '') {
		print $user[0]['display_name'];
	} else {
		print $user[0]['name'];
	}?>">
<?php //if (isset($user[0]['performer_rank'])) {?>
<img src="<?=base_url('assets/images/icon-trophy.png')?>" alt="
or Me" />
<a href="javascript:void(0);" class="vt" id="<?=$user[0]['id']?>">Vote</a>
<?php //}
} else {?>
   <img src="<?=base_url('assets/images/icon-trophy.png')?>" alt="Vote For Me" />
<a href="<?=base_url('login')?>"    >Vote</a>
<?php }
?>
</li>
<li>
<img src="<?=base_url('assets/images/tip.png')?>" alt="Send Gift" />
<?php if ($this->session->userdata('UserType')) {?>
<a href="javascript:void(0);" class="gift-modal">TIP </a>
<?php } else {?>
    <a href="<?=base_url('login')?>" class="gift-modal">TIP </a>
<?php }?>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="perform-widget">
<div class="perfomer-short-des">
<div class="short-des-col">
<div class="short-des-about">
<span class="round-pic"><img src="<?=base_url('assets/profile_image/' . $user[0]['image'])?>" alt="<?php if ($user[0]['display_name'] != '') {
	print $user[0]['display_name'];
} else {
	print $user[0]['name'];
}?>" /></span>
<div class="shortcont">
<h1><?php if ($user[0]['display_name'] != '') {
	print $user[0]['display_name'];
} else {
	print $user[0]['name'];
}?></h1>
<p><?=$user[0]['description']?></p>
</div>
</div>
</div>
<div class="short-des-col">
<?php if ($user[0]['willingness'] != '') {
	$will = explode(',', $user[0]['willingness']);?>
<h5>WILLINGNESS</h5>
<ul>
<?php foreach ($will as $wll) {?>
<li><a href="javascript:void(0)">#<?=$wll?></a></li>
<?php }?>
</ul>
<?php }?>
</div>
<div class="short-des-col">
	<?php if ($buy_items) {
	?>
<h5>Buy My Personal Items</h5>
<ul class="personal-items">
	<?php foreach ($buy_items as $key => $item) {
		?>
<li><a target="_blank" href="<?=$item->buy_link?>"><div class="personal-items-image"><img  src="<?=uploads_url('buy_tem/' . $item->image)?>" alt=""/></div><?=$item->name?></a></li>
<?php
if ($key == 2) {
			break;
		}

	}?>


</ul>
<!--<a href="javascript:void(0)" class="btn">Subscribe</a>
<a href="javascript:void(0)" class="btn">Message</a>-->
<?php //if (count($buy_items) > 3) {?>
<a href="javascript:void(0)" data-toggle="modal" data-target="#myitems" class="btn">SHOP ALL PRODUCTS</a>
<?php //}?>
<?php }?>
</div>
</div>
</div>
<div class="perform-widget">
<div class="top-bar-layout">
<div class="top-bar-widgets">
<ul class="user-content-list user-list-tab">
<li>
<a href="javascript:void(0)" class="user-free-content">FREE CONTENT</a>
</li>
<li>
<a href="javascript:void(0)" class="user-premium-content">PREMIUM CONTENT</a>
</li>
<li>
<a href="javascript:void(0)" class="user-details-content">Full Details</a>
</li>
</ul>
<!--<div class="switch-view">
<span class="list"><img src="<?=base_url('assets/images/icon-list.png')?>" alt="list" /></span>
<span class="grid"><img src="<?=base_url('assets/images/icon-grid.png')?>" alt="grid" /></span>
</div>-->
</div>
</div>
<?php
if ($user[0]['images'] != '') {
	$img = explode(',', $user[0]['images']);
} else {
	$img = array();
}
?>
<div class="user-content-block">
<div class="video-grid __freeVideoGridEl" id="free_videogrid">
	<h4 class="free-image-heading">Free Video</h4>


</div>
<div class="load-more-btn ">
	<a href="javascript:get_videos(1)" class="btn-load-more  freeVideopage">Load More...</a>
</div>

<hr class="hr-devider" />

<div class="img-masgrid">
	<h4 class="free-image-heading">Free Image</h4>
	<!-- <ul class="grid effect-1 __freeImageGridEl" id="grid">

	</ul> -->

	<div class="card-columns profile-more-image" id="free_imagegrid">
	</div>

	<div class="load-more-btn">
		<a href="#" class="btn-load-more freeImagepage">Load More...</a>
	</div>



</div>
</div>
<div id="" class="user-content-block d-none">
<div class="video-grid __freeVideoGridEl" id="premium_videogrid">
	<h4 class="free-image-heading">Premium Video</h4>


</div>
<div class="load-more-btn">
	<a href="#" class="btn-load-more premiumVideopage">Load More...</a>
</div>

<hr class="hr-devider" />

<div class="img-masgrid" >
	<h4 class="free-image-heading">Premium Image</h4>
	<!-- <ul class="grid effect-1 __freeImageGridEl" id="grid">

	</ul> -->


	<div class="card-columns profile-more-image" id="premium_imagegrid">

	</div>

	<div class="load-more-btn">
		<a href="#" class="btn-load-more premiumImagepage">Load More...</a>
	</div>
		<!-- <ul>
			<?php
if (!empty($img)) {
	for ($i = 0; $i < (count($img) / 2); $i++) {
		?>
					<li>
						<?php if (empty($subs)) {?>
							<div class="item-subscribe">
								<figure>
									<img src="<?=base_url('assets/images/lock-icon.png')?>" alt="lock" />
									<a href="javascript:void(0)" onclick="subscribe('<?=$user[0]['id']?>', '<?=$this->session->userdata('UserId')?>')" class="btn subscribebtn">SUBSCRIBE TO UNLOCK</a>
								</figure>
							</div>
						<?php } else {
			?>
							<div class="item-subscribe" <?php if ($subs[0]->status == 1) {
				print 'style="display:none;"';
			}?>>
								<figure>
									<img src="<?=base_url('assets/images/lock-icon.png')?>" alt="lock" />
									<a href="javascript:void(0)" onclick="subscribe('<?=$user[0]['id']?>', '<?=$this->session->userdata('UserId')?>')" class="btn subscribebtn">SUBSCRIBE TO UNLOCK</a>
								</figure>
							</div>
						<?php }?>
						<img src="<?=base_url('assets/performer_gallery/' . $img[$i])?>">
					</li>
			<?php }
}?>
		</ul> -->


</div>
</div>
<div id="content">
</div>
<div class="user-content-block d-none pt-2">
<h2>Performer Details</h2>
<table class="performer-details">
<tbody>
<tr>
<th align="left">Full Name</th>
<td><?=db_val($user[0]['display_name'])?></td>
</tr>
<tr>
<th align="left">Sexual Preference</th>
<td><?=db_val($user[0]['sexual_pref'])?></td>
</tr>
<tr>
<th align="left">Height</th>
<td><?=db_val($user[0]['height'])?></td>
</tr>
<tr>
<th align="left">Weight</th>
<td><?=db_val($user[0]['weight'])?></td>
</tr>
<tr>
<th align="left">Hair Colour</th>
<td><?=db_val($user[0]['hair'])?></td>
</tr>
<tr>
<th align="left">Eye Colour</th>
<td><?=db_val($user[0]['eye'])?></td>
</tr>
<tr>
<th align="left">Zodiac Sign</th>
<td><?=db_val($user[0]['zodiac'])?></td>
</tr>
<tr>
<th align="left">Build</th>
<td><?=db_val($user[0]['build'])?></td>
</tr>
<tr>
<th align="left"><?=$user[0]['gender'] == 'Male' ? 'Chest' : 'Breast'?> Size</th>
<td><?=db_val($user[0]['chest'])?></td>
</tr>
<tr>
<th align="left">Burst Size</th>
<td><?=db_val($user[0]['burst'])?></td>
</tr>
<?php if ($user[0]['gender'] == 'Female'): ?>
<tr>
<th align="left">Cup</th>
<td><?=db_val($user[0]['cup'])?></td>
</tr>
<?php endif;?>
<tr>
<th align="left">Display Age As</th>
<td><?=db_val($user[0]['age'])?></td>
</tr>
<?php if ($user[0]['gender'] == 'Male'): ?>
<tr>
<th align="left">Penis Size</th>
<td><?=db_val($user[0]['penis'])?></td>
</tr>
<?php endif;?>
<tr>
<th align="left">Pubic Hair</th>
<td><?=db_val($user[0]['pubic_hair'])?></td>
</tr>
</tbody>
</table>
</div>

</div>
</section>




</main>
</section>
<div id="myitems" class="modal fade buy-items-modal "  role="dialog">
  <div class="modal-dialog modal-dialog-centered">


    <div class="modal-content">
      <div class="modal-header">
		<h4 class="modal-title">Buy My Personal Items</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        	<?php if ($buy_items) {
	?>

<ul class="personal-items">
	<?php foreach ($buy_items as $key => $item) {
		?>
<li><a target="_blank" href="<?=$item->buy_link?>"><div class="personal-items-image"><img  src="<?=uploads_url('buy_tem/' . $item->image)?>" alt=""/></div><?=$item->name?></a></li>
<?php

	}?>


</ul>

<?php }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php if ($user[0]['performer_live'] == 1 || $user[0]['performer_live'] == 3): ?>
<div style="display: none;">
    <div id="preview">
      <p class="instructions">me</p>
      <div id="local-media"></div>
      <button id="button-preview">Preview My Camera</button>
    </div>
    <div id="room-controls">
       <p class="instructions">Room Name:</p>
      <input id="room-name" type="text" placeholder="Enter a room name" />
      <button id="button-join">Start Live</button>
      <button id="button-leave">Stop Live</button>
    </div>
<div id="log"></div>
</div>
<?php endif;?>

<!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
<script>
// var $grid = $('.__freeImageGridEl').imagesLoaded( function() {
//   // init Masonry after all images have loaded
//   $grid.masonry({
//     // options...
//   });
// });
// var grid = document.querySelector('.__freeImageGridEl');
// var msnry = new Masonry( grid, {
//   // options...
//   itemSelector: 'li',
//   columnWidth: 200
// });
</script>

<!-- <script type="module" defer src="<?=base_url('assets/js/components/performer/ViewPerformerComponent.js')?>"></script> -->
<!-- <script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lightgallery.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-thumbnail.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-autoplay.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-fullscreen.min.js')?>"></script>
<script src="<?=base_url('assets/node_modules/lightgallery.js/dist/js/lg-zoom.min.js')?>"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script>

<script >
	jQuery(document).ready(function($) {
var freeImagepage=freeVideopage=premiumImagepage=premiumVideopage=1
$('.freeImagepage, .freeVideopage, .premiumImagepage, .premiumVideopage').css('visibility', 'hidden');
get_images();
get_videos();
get_images(2);
get_videos(2);
$(document).on('click', '.freeImagepage', function(event) {
	event.preventDefault();
	$(this).css('visibility', 'hidden');
	 get_images(1);
});
$(document).on('click', '.freeVideopage', function(event) {
	event.preventDefault();
	$(this).css('visibility', 'hidden');
	 get_videos(1);
});
$(document).on('click', '.premiumImagepage', function(event) {
	event.preventDefault();
	$(this).css('visibility', 'hidden');
	 get_images(2);
});
$(document).on('click', '.premiumVideopage', function(event) {
	event.preventDefault();
	$(this).css('visibility', 'hidden');
	 get_videos(2);
});

		function get_images(type=1) {
			var page= (type==1?freeImagepage:premiumImagepage);
			$.ajax({
				url: '<?=base_url('home/getperformer_images')?>',
				type: 'POST',
				dataType: 'json',
				data: {type: type,page:page ,performer:<?=$user[0]['id']?> },
			})
			.done(function(res) {
				if(res.status==true){
					var gallery = $('#free_imagegrid');
					var gallery2 = $('#premium_imagegrid');


					if(type==1){
						$('#free_imagegrid').append(res.images);
						if(page>1){
							gallery.data('lightGallery').destroy(true);
						}

						 gallery.lightGallery({
						 	selector          : '.free-gal',
							thumbnail         : false,
							download          : false,
							animateThumb      : false,
							showThumbByDefault: false
					    });

						  /*  lightGallery(document.getElementById('free_imagegrid'), {
						        selector          : '.free-gal',
						        thumbnail         : false,
						        download          : false,
						        animateThumb      : false,
						        showThumbByDefault: false,
						    });*/
						$('.freeImagepage').css('visibility', 'hidden');
						if(res.loadmore==true){
							$('.freeImagepage').css('visibility', 'visible');
						}
						freeImagepage++;
					}else{
						$('#premium_imagegrid').append(res.images);

						if(page>1){
							gallery2.data('lightGallery').destroy(true);
						}

						 gallery2.lightGallery({
						 	selector          : '.premium-gal',
							thumbnail         : false,
							download          : false,
							animateThumb      : false,
							showThumbByDefault: false
					    });

						  /*lightGallery(document.getElementById('premium_imagegrid'), {
						        selector          : '.premium-gal',
						        thumbnail         : false,
						        download          : false,
						        animateThumb      : false,
						        showThumbByDefault: false,
						    });*/
						$('.premiumImagepage').css('visibility', 'hidden');
						if(res.loadmore==true){
							$('.premiumImagepage ').css('visibility', 'visible');
						}
						premiumImagepage++;
					}
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});

		}

		function get_videos (type=1) {
			$.ajax({
				url: '<?=base_url('home/getperformer_videos')?>',
				type: 'POST',
				dataType: 'json',
				data: {type: type,page:  (type==1?freeVideopage:premiumVideopage),performer:<?=$user[0]['id']?> },
			})
			.done(function(res) {
				if(res.status==true){
					if(type==1){
						$('#free_videogrid').append(res.videos);
						$('.freeVideopage').css('visibility', 'hidden');
						if(res.loadmore==true){
							$('.freeVideopage').css('visibility', 'visible');
						}
						freeVideopage++;
					}else{
						$('#premium_videogrid').append(res.videos);
						$('.premiumVideopage').css('visibility', 'hidden');
						if(res.loadmore==true){
							$('.premiumVideopage ').css('visibility', 'visible');
						}
						premiumVideopage++;
					}
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		}
	});
</script>


<?php if ($user[0]['performer_live'] == 1 || $user[0]['performer_live'] == 3): ?>
<!-- video -->
<script src="<?=base_url('assets/js/')?>quickstart.js"></script>
<script type="text/javascript">

jQuery(document).ready(function($) {
	//$('#button-join').trigger('click');
});
//start_online();
//var Video = require('twilio-video');
var Video =Twilio.Video;

var activeRoom;
var previewTracks;
var identity;
var roomName;

// Attach the Tracks to the DOM.
function attachTracks(tracks, container) {
  tracks.forEach(function(track) {
    container.appendChild(track.attach());
  });
}

// Attach the Participant's Tracks to the DOM.
function attachParticipantTracks(participant, container) {
  var tracks = Array.from(participant.tracks.values());
  attachTracks(tracks, container);
}

// Detach the Tracks from the DOM.
function detachTracks(tracks) {
  tracks.forEach(function(track) {
    track.detach().forEach(function(detachedElement) {
      detachedElement.remove();
    });
  });
}

// Detach the Participant's Tracks from the DOM.
function detachParticipantTracks(participant) {
  var tracks = Array.from(participant.tracks.values());
  detachTracks(tracks);
}

// When we are about to transition away from this page, disconnect
// from the room, if joined.
window.addEventListener('beforeunload', leaveRoomIfJoined);

// Obtain a token from the server in order to connect to the Room.
$.getJSON('<?=base_url()?>auth/access_token', function(data) {
  identity = data.identity;
  document.getElementById('room-controls').style.display = 'block';

  // Bind button to join Room.

  /* $(document).on('click', '#button-join', function(event) {
  	event.preventDefault();*/
  	/* Act on the event */

  //document.getElementById('button-join').onclick = function() {
    //roomName = document.getElementById('room-name').value;
    roomName='<?=$user[0]['id']?>_performer'
    if (!roomName) {
      alert('Your room is missing.');
      return;
    }

    log("Starting live...");
    var connectOptions = {
      name: roomName,
      logLevel: 'debug',
     // audio: false,
      video: false
    };

    if (previewTracks) {
      connectOptions.tracks = previewTracks;
    }

    // Join the Room with the token from the server and the
    // LocalParticipant's Tracks.
    Video.connect(data.token, connectOptions).then(roomJoined, function(error) {
      log('Could not start: ' + error.message);
    });

   //});

  // Bind button to leave Room.
  document.getElementById('button-leave').onclick = function() {
    log('Leaving room...');
    activeRoom.disconnect();
  };
});

// Successfully connected!
function roomJoined(room) {
  window.room = activeRoom = room;

  log("Started as '" + identity + "'");
  document.getElementById('button-join').style.display = 'none';
  document.getElementById('button-leave').style.display = 'inline';

  // Attach LocalParticipant's Tracks, if not already attached.
/*  var previewContainer = document.getElementById('local-media');
  if (!previewContainer.querySelector('video')) {
    attachParticipantTracks(room.localParticipant, previewContainer);
  }*/

  // Attach the Tracks of the Room's Participants.
  room.participants.forEach(function(participant) {
	console.warn(participant)
	var array =  participant.identity.split('~');
	if(array[0]==<?=$user[0]['id']?>){
    log("Already in Room: '" + participant.identity + "'");
    var previewContainer = document.getElementById('remote-media');
    attachParticipantTracks(participant, previewContainer);
		}
  });

  // When a Participant joins the Room, log the event.
  room.on('participantConnected', function(participant) {
    log("Joining: '" + participant.identity + "'");
  });

  // When a Participant adds a Track, attach it to the DOM.
  room.on('trackAdded', function(track, participant) {
  	var array =  participant.identity.split('~');
  	if(array[0]==<?=$user[0]['id']?>){
    log(participant.identity + " added track: " + track.kind);
    var previewContainer = document.getElementById('remote-media');
    attachTracks([track], previewContainer);
    console.warn(participant)
    $('#remoteVideo').hide();
   var video = document.querySelector('video');
	//video.muted = true;
	video.play();
	//video.unmuted = true;
	//video.attr('controls', '');
	video.setAttribute("autoplay","true");
	video.setAttribute("controls","controls")
	}
  });

  // When a Participant removes a Track, detach it from the DOM.
  room.on('trackRemoved', function(track, participant) {
    log(participant.identity + " removed track: " + track.kind);
    detachTracks([track]);
  });

  // When a Participant leaves the Room, detach its Tracks.
  room.on('participantDisconnected', function(participant) {
  	var array =  participant.identity.split('~');
  	if(array[0]==<?=$user[0]['id']?>){
  		window.location.reload();
    log("Participant '" + participant.identity + "' left the room");
    detachParticipantTracks(participant);
	}
  });

  // Once the LocalParticipant leaves the room, detach the Tracks
  // of all Participants, including that of the LocalParticipant.
  room.on('disconnected', function() {
    log('Left');
    if (previewTracks) {
      previewTracks.forEach(function(track) {
        track.stop();
      });
      previewTracks = null;
    }
    detachParticipantTracks(room.localParticipant);
    room.participants.forEach(detachParticipantTracks);
    activeRoom = null;
    document.getElementById('button-join').style.display = 'inline';
    document.getElementById('button-leave').style.display = 'none';
  });
}

// Preview LocalParticipant's Tracks.
document.getElementById('button-preview').onclick = function() {
  var localTracksPromise = previewTracks
    ? Promise.resolve(previewTracks)
    : Video.createLocalTracks();

  localTracksPromise.then(function(tracks) {
    window.previewTracks = previewTracks = tracks;
    var previewContainer = document.getElementById('local-media');
    if (!previewContainer.querySelector('video')) {
      attachTracks(tracks, previewContainer);
    }
  }, function(error) {
    console.error('Unable to access local media', error);
    log('Unable to access Camera and Microphone');
  });
};

// Activity log.
function log(message) {
  var logDiv = document.getElementById('log');
  logDiv.innerHTML += '<p>&gt;&nbsp;' + message + '</p>';
  logDiv.scrollTop = logDiv.scrollHeight;
}

// Leave Room.
function leaveRoomIfJoined() {
  if (activeRoom) {
    activeRoom.disconnect();
  }
}

jQuery(document).ready(function($) {
	$('#button-join').trigger('click');

});





</script>

<?php endif?>