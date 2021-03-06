<!-- <script type='text/javascript' src="<?=base_url('assets/js/scaledrone.min.js')?>"></script> -->
  <script src="//media.twiliocdn.com/sdk/js/video/releases/1.20.1/twilio-video.js"></script>
<input type="hidden" id="vcStarted" value="Started">
<input type="hidden" id="url_hash">
<?php if ($this->session->userdata('UserType') == 1) {?>
<input type="hidden" id="videoChatId" value="<?=$this->session->userdata('vcChatId')?>">
<input type="hidden" id="vcPerformerId" value="<?=$this->session->userdata('vcPerformerId')?>">
<input type="hidden" id="vcUserId" value="<?=$this->session->userdata('UserId')?>">
<input type="hidden" id="vcSenderType" value="user">
<input type="hidden" id="vcReceiverType" value="performer">
<?php } else {?>
<input type="hidden" id="vcPerformerId" value="<?=$this->session->userdata('UserId')?>">
<input type="hidden" id="vcUserId" value="<?=$this->session->userdata('vcUserId')?>">
<input type="hidden" id="hangupButton">
<input type="hidden" id="vcSenderType" value="performer">
<input type="hidden" id="vcReceiverType" value="user">
<?php }?>
<input type="hidden" id="last_chat" value="<?=$last_chat->id?>">
<main class="content-wrapper">
    <section class="content-sec">
        <div class="vid_chat">



            <div class="performer_sec">
                 <div id="controls">
                <div class="performer_cam_vid">
                    <!-- <video id="remoteVideo" autoplay poster="<?=base_url('assets/images/giphy.gif')?>"></video> -->


    <div id="preview">
      <p class="instructions"><?=($usrnm[0]->display_name == '' ? $usrnm[0]->name : $usrnm[0]->display_name)?></p>
      <div id="local-media"></div>
      <button id="button-preview" class="btn text-center">Preview My Camera</button>
    </div>
    <div id="room-controls">
     <!--  <p class="instructions">Room Name:</p>
      <input id="room-name" type="text" placeholder="Enter a room name" /> -->
      <button id="button-join" class="btn text-center">Start Live</button>
      <button id="button-leave" class="btn text-center">Stop Live</button>
    </div>
    <div id="log" style="display: none;"></div>




                </div>
                 </div>
                <div class="show_controll">
                    <?php if ($this->session->userdata('UserType') == '1') {?>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" id="hangupButton" class="btn">HANG UP</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn_icon">SHOW TYPE</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn">SHOP NOW</a>
                        </li>
                    </ul>
                    <?php }?>
                </div>
                <div class="user_msg">
                    <div class="msg_hed">
                        <p><?=$this->session->userdata('vcPerformerName')?> CHAT</p>
                    </div>
                    <div class="msg_body">
                        <ul class="vcChatList">
                            <?php
$vcLastChatId = 0;
if (!empty($chat)) {
	for ($i = 0; $i < count($chat); $i++) {
		$vcLastChatId = $chat[$i]->id;
		?>
                            <li <?php if ($chat[$i]->sender_id == $this->session->userdata('UserId')) {?> class="align-right" <?php } else {?> class="align-left" <?php }?>>
                                <span><?=$chat[$i]->msg?></span>
                                <span><?=$chat[$i]->sender_unm?></span>
                            </li>
                            <?php
}
}
?>
                        </ul>
                        <input type="hidden" id="vcLastChatId" value="<?=$vcLastChatId?>">
                        <form class="msg_rply" id='frm_chat'>
                            <input type="text" id="vcMsgBody">
                            <input type="button" value="SEND" id="vcSendMsg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="user_sec">
                <div class="user_vid_show">
                    <div class="user_info">
                        <div class="col_2">
                            <p><?=(($usrnm[0]->display_name)) ? $usrnm[0]->display_name : $usrnm[0]->name?></p>
                            <span><img src="<?=base_url('assets/images/heart.png')?>" alt="img">320,000</span>
                            <span><img src="<?=base_url('assets/images/trophy.png')?>" alt="img">£100</span>
                            <?php if (!empty($subs)) {?> <span>SUBSCRIBED</span> <?php }?>
                        </div>
                        <div class="col_2">
                            <div class="chat_duration">
                                <span>Active</span>
                                <p id="vcDuration">00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="user_cam_vid">
                        <div id="remote-media"></div>
                        <!-- <video id="localVideo" autoplay muted poster="<?=base_url('assets/images/giphy.gif')?>"></video> -->
                    </div>
                </div>
            </div>
        </div>
                <div id="start_wait" class="overlay"><div class="center"><p>Please wait..</p> </div></div>
    </section>
</main>
<script src="<?=base_url('assets/js/')?>quickstart.js"></script>
<script type="text/javascript">



function new_request() {


         setInterval(function () {
            $.ajax({
                type: "POST",
                url: base_url + "check-new-video-chat-request",
                data: {
                    'performer_id': <?=$this->session->userdata('UserId')?>
                },
                cache: false,
                success: function (data) {
                    var res = data.split('~~');
                    if (res[0] != 'no-request') {
                        var options = swalConfirmationOptions;
                        options.title = "Confirmation";
                        options.text = "New Video Call Request from " + res[1] + "!!!";
                        options.type = "success";
                        options.confirmButtonText = "Accept";

                        swal(options).then(function () {
                            $.ajax({
                                type: "POST",
                                url: base_url + "accept-video-chat",
                                data: {
                                    'performer_id': <?=$this->session->userdata('UserId')?>,
                                    'url_hash': res[0],
                                    'user_id': res[2]
                                },
                                cache: false,
                                success: function (data) {
                                    $('#url_hash').val(res[0]);
                                   // window.location = base_url + 'video-chat#' + res[0];
                                }
                            });
                            //window.open(base_url + 'video-chat#' + res, '_blank');
                        }, function (dismiss) {
                            if (dismiss == 'cancel') {
                                $.ajax({
                                    type: "POST",
                                    url: base_url + "cancel-video-chat",
                                    data: {
                                        'performer_id': UserId,
                                        'url_hash': res[0],
                                        'user_id': res[2]
                                    },
                                    cache: false,
                                    success: function (data) {}
                                });
                            }
                        });
                    }
                }
            });
        }, 5000);


}



//var Video = require('twilio-video');
var Video =Twilio.Video;

var activeRoom;
var previewTracks;
var identity;
var roomName;
var start_id;

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
$.getJSON('videochat/access_token', function(data) {
  identity = data.identity;
  document.getElementById('room-controls').style.display = 'block';

  // Bind button to join Room.
  document.getElementById('button-join').onclick = function() {
    //roomName = document.getElementById('room-name').value;
    roomName='<?=$this->session->userdata('UserId')?>_performer'
    if (!roomName) {
      alert('Your room is missing.');
      return;
    }
    $('#start_wait').show();
    log("Starting live...");
    var connectOptions = {
      name: roomName,
      logLevel: 'debug',
        bandwidthProfile: {
    video: {
      dominantSpeakerPriority: 'high',
      mode: 'collaboration',
      renderDimensions: {
        high: { height: 720, width: 1280 },
        standard: { height: 90, width: 160 }
      }
    }
  },
      video: { height: 720, frameRate: 24, width: 1280 },
      audio: true
    };

    if (previewTracks) {
      connectOptions.tracks = previewTracks;
    }

    // Join the Room with the token from the server and the
    // LocalParticipant's Tracks.
    Video.connect(data.token, connectOptions).then(roomJoined, function(error) {
      $('#start_wait').hide();
      log('Could not start: ' + error.message);
    });
  };

  // Bind button to leave Room.
  document.getElementById('button-leave').onclick = function() {
    log('Leaving room...');
    stop_time();
    activeRoom.disconnect();
  };
});

// Successfully connected!
function roomJoined(room) {
  window.room = activeRoom = room;
$.get('<?=base_url('videochat/start_live_video')?>', function(data) {
    start_id=data
    });
  //start active time
  start(0);
  $('#start_wait').hide();

  log("Started as '" + identity + "'");
  document.getElementById('button-join').style.display = 'none';
  document.getElementById('button-leave').style.display = 'inline';
  new_request();
  // Attach LocalParticipant's Tracks, if not already attached.
  var previewContainer = document.getElementById('local-media');
  if (!previewContainer.querySelector('video')) {
    attachParticipantTracks(room.localParticipant, previewContainer);
  }

  // Attach the Tracks of the Room's Participants.
  room.participants.forEach(function(participant) {
    log("Already in Room: '" + participant.identity + "'");
    var previewContainer = document.getElementById('remote-media');
    attachParticipantTracks(participant, previewContainer);
  });

  // When a Participant joins the Room, log the event.
  room.on('participantConnected', function(participant) {
    log("Joining: '" + participant.identity + "'");
  });

  // When a Participant adds a Track, attach it to the DOM.
  room.on('trackAdded', function(track, participant) {
    log(participant.identity + " added track: " + track.kind);
    var previewContainer = document.getElementById('remote-media');
    attachTracks([track], previewContainer);

  });

  // When a Participant removes a Track, detach it from the DOM.
  room.on('trackRemoved', function(track, participant) {
    log(participant.identity + " removed track: " + track.kind);
    detachTracks([track]);
  });

  // When a Participant leaves the Room, detach its Tracks.
  room.on('participantDisconnected', function(participant) {
    log("Participant '" + participant.identity + "' left the room");
    detachParticipantTracks(participant);
  });

  // Once the LocalParticipant leaves the room, detach the Tracks
  // of all Participants, including that of the LocalParticipant.
  room.on('disconnected', function() {
     $.get('<?=base_url('videochat/stop_live_video')?>/'+start_id, function(data) {
      /*optional stuff to do after success */
    });
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
   $('#start_wait').show();
  var localTracksPromise = previewTracks
    ? Promise.resolve(previewTracks)
    : Video.createLocalTracks();

  localTracksPromise.then(function(tracks) {
    window.previewTracks = previewTracks = tracks;
    var previewContainer = document.getElementById('local-media');
    if (!previewContainer.querySelector('video')) {
      attachTracks(tracks, previewContainer);
    }
     $('#start_wait').hide();
  }, function(error) {
    console.error('Unable to access local media', error);
    $('#start_wait').hide();
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
          setInterval(function () {
            $.ajax({
                type: "POST",
                url: base_url + "check-new-msg",
                data: {
                    'last_id': $("#vcLastChatId").val()
                },
                cache: false,
                dataType:'json',
                success: function (data) {
                    if(data.status==true){
                        $('.vcChatList').append(data.chatlist);
                        $('#vcLastChatId').val(data.last_chat_id);
                        $('.vcChatList').animate({
                            scrollTop: $('.vcChatList').get(0).scrollHeight
                        }, 100);
                    }
                }
            });
        }, 5000);
});


</script>
