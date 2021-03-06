'use strict';
//var startButton = document.getElementById('startButton');
//var callButton = document.getElementById('callButton');
var hangupButton = document.getElementById('hangupButton');
//callButton.disabled = true;
//hangupButton.disabled = true;
//startButton.onclick = start;
//callButton.onclick = call;
hangupButton.onclick = hangup;
var startTime;

// Generate random room name if needed
if (!location.hash) {
    location.hash = Math.floor(Math.random() * 0xFFFFFF).toString(16);
}
const roomHash = location.hash.substring(1);
// TODO: Replace with your own channel ID
const drone = new ScaleDrone('tfThq6LS0Iva85iH');
// Room name needs to be prefixed with 'observable-'
const roomName = 'observable-' + roomHash;
const configuration = {
    iceServers: [{
        urls: 'stun:stun.l.google.com:19302'
  }]
};
let room;
let pc;
var startTime;
var startTimeToStore;

function onSuccess() {};

function onError(error) {
    console.error(error);
};
drone.on('open', error => {
    if (error) {
        return console.error(error);
    }
    room = drone.subscribe(roomName);
    room.on('open', error => {
        if (error) {
            onError(error);
        }
    });
    // We're connected to the room and received an array of 'members'
    // connected to the room (including us). Signaling server is ready.
    room.on('members', members => {
        //console.log('MEMBERS', members);
        // If we are the second user to connect to the room we will be creating the offer
        const isOfferer = members.length === 2;
        startVideoCall(isOfferer);
    });
});
// Send signaling data via Scaledrone
function sendMessage(message) {
    drone.publish({
        room: roomName,
        message
    });
    console.log(message);
}

function startVideoCall(isOfferer) {
    pc = new RTCPeerConnection(configuration);
    pc.onicecandidate = event => {
        if (event.candidate) {
            sendMessage({
                'candidate': event.candidate
            });
        }
    };
    // If user is offerer let the 'negotiationneeded' event create the offer
    if (isOfferer) {
        pc.onnegotiationneeded = () => {
            pc.createOffer().then(localDescCreated).catch(onError);
        }
    }
    // When a remote stream arrives display it in the #remoteVideo element
    pc.ontrack = event => {
        const stream = event.streams[0];
        if (!remoteVideo.srcObject || remoteVideo.srcObject.id !== stream.id) {
            remoteVideo.srcObject = stream;
        }
    };
    navigator.mediaDevices.getUserMedia({
        audio: true,
        video: true,
    }).then(stream => {
        // Display your local video in #localVideo element
        localVideo.srcObject = stream;
        // Add your stream to be sent to the conneting peer
        stream.getTracks().forEach(track => pc.addTrack(track, stream));
    }, onError);
    // Listen to signaling data from Scaledrone
    room.on('data', (message, client) => {
        // Message was sent by us
        if (client.id === drone.clientId) {
            return;
        }
        if (message.sdp) {
            // This is called after receiving an offer or answer from another peer
            pc.setRemoteDescription(new RTCSessionDescription(message.sdp), () => {
                // When receiving an offer lets answer it
                if (pc.remoteDescription.type === 'offer') {
                    pc.createAnswer().then(localDescCreated).catch(onError);
                }
            }, onError);
        } else if (message.candidate) {
            // Add the new ICE candidate to our connections remote description
            pc.addIceCandidate(
                new RTCIceCandidate(message.candidate), onSuccess, onError
            );
        }
    });
}

function hangup() {
    pc.close();
    var elapsedTime = ((window.performance.now() - startTime) / 1000).toFixed(3);
    console.log("Elapsed Time : " + elapsedTime);
}

function localDescCreated(desc) {
    startTimeToStore = (window.performance.now() / 1000).toFixed(3);
    startTime = window.performance.now();
    pc.setLocalDescription(
        desc,
        () => sendMessage({
            'sdp': pc.localDescription
        }),
        onError
    );
}
