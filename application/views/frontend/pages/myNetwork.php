<?php $curr_user = $this->session->userdata('curr_user');
$name = $curr_user['display_name'] != '' ? $curr_user['display_name'] : $curr_user['name'];
$image = base_url('assets/profile_image/' . $curr_user['image']);
?>
<main class="content-wrapper loyalty-page">
	<section class="content-sec">
    	<div class="manage-user-heading">
        	<h3 class="dashboard-text">MY NETWORK</h3>
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
                            <p>YOUR NETWORK</p>
                        </div>
                        <div class="manage-list">
                        	<ul>
                            	<li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                                <li>
                                	<h4><img src="<?=base_url('assets/images/performere.jpg')?>" alt=""/> Megan Kroft  @megankroft</h4>
                                    <div class="list-btn">
                                    	<a href="#" class="btn">MESSAGE</a>
                                    	<a href="#" class="btn">MANAGE</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-20">
                	<div class="search-network">
                    	<div class="msg-body-nav">
                        	<h2>ADD NEW PERFORMER TO NETWORK</h2>
                            	<form id="network_user" method="post">
                                    <input type="hidden" id="user_id" name="user_id">
                                	<input type="text" class="restrictSpecial searchperformer" placeholder="SEARCH USERS">
                                    <button type="submit"><i class="fa fa-plus m-new" aria-hidden="true"></button>

                                </form>
                            <!--<span class="srchBar">
                                <input type="text" id="" class="restrictSpecial" placeholder="">
                                <ul class="suggList hide_content"></ul>
                            </span>-->
                       </div>
                    </div>
                	<h2 class="overview">FINANCIAL OVERVIEW</h2>
                	<div class="dash_box network-area">
                        <div class="dash_box_hed">
                            <p>NETWORK EARNINGS TOTALS</p>
                        </div>
                        <div class="dash_box_body grid_2">
                            <ul>
                                <li>
                                    <span class="lft_txt">SHOWS: £300</span>
                                </li>
                                <li>
                                    <span class="lft_txt">GIFTS: £500</span>
                                </li>
                                <li>
                                    <span class="lft_txt">CHAT: £1,000</span>
                                </li>
                            </ul>
                            <div class="bg_txt">
                                <span>THIS MONTH</span>
                                <p>£100</p>
                            </div>
                        </div>
                    </div>
                    <div class="dash_box network-area loyalty">
                        <div class="dash_box_hed">
                            <p>LOYALTY</p>
                        </div>
                        <div class="dash_box_body grid_2">
                            <div class="bg_txt bg_txt1">
                                <span>MONTHLYNPOINTS EARNED</span>
                                <p>4,500</p>
                            </div>
                            <div class="bg_txt">
                                <span>TOTAL POINTS</span>
                                <p>4,500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
</main>
<script>
    $(document).ready(function () {

  var engine, remoteHost, template, empty;
  $.support.cors = true;
  remoteHost = API_URL;
  template = Handlebars.compile($("#result-template").html());
  empty = Handlebars.compile($("#empty-template").html());
  engine = new Bloodhound({
    identify: function identify(o) {
      return o.id_str;
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name', 'profile_image_url_https'),
    dupDetector: function dupDetector(a, b) {
      return a.id_str === b.id_str;
    },
    prefetch: remoteHost + '/search/model',
    remote: {
      url: remoteHost + '/search/model/?q=%QUERY',
      wildcard: '%QUERY'
    }
  }); // ensure default users are read on initialization

  engine.get('1090217586', '58502284', '10273252', '24477185');

  function engineWithDefaults(q, sync, async) {
    if (q === '') {
      sync(engine.get('1090217586', '58502284', '10273252', '24477185'));
      async([]);
    } else {
      engine.search(q, sync, async);
    }
  }

  $('.searchperformer').typeahead({
    hint: $('.Typeahead-hint'),
    menu: $('.Typeahead-menu'),
    minLength: 0,
    classNames: {
      open: 'is-open',
      empty: 'is-empty',
      cursor: 'is-active',
      suggestion: 'Typeahead-suggestion',
      selectable: 'Typeahead-selectable'
    }
  }, {
    source: engineWithDefaults,
    displayKey: 'name',
    templates: {
      suggestion: template,
      empty: empty
    }
  }).on('typeahead:asyncrequest', function () {
    $('.Typeahead-spinner').show();
  }).on('typeahead:asynccancel typeahead:asyncreceive', function () {
    $('.Typeahead-spinner').hide();
  }).on('typeahead:select', function (event, suggestion) {
    console.log(suggestion);
        //var slug = suggestion.name;
        $('#user_id').val(suggestion.id);
       // window.location.href = "".concat(base_url, "performer/").concat(suggestion.id, "/").concat(suggestion.slug, "/");
  });

  const filterButton = document.querySelector('#filterButton');
  console.log(filterButton);


$(document).on('submit', '#network_user', function(event) {
    event.preventDefault();
   $.ajax({
       url: '<?=base_url('service/add_to_network')?>',
       type: 'POST',
       dataType: 'json',
       data: $('#network_user').serialize(),
   })
   .done(function(res) {
       console.log(res);
       if(res.status==true){
        $('#network_user')[0].reset();
        swal(res.msg, "", "success");
       }else{
        swal(res.msg, "", "error");
       }
   })
   .fail(function() {
       console.log("error");
   })
   .always(function() {
       console.log("complete");
   });

});

});
</script>