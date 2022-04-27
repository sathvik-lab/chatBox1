const webSocket = new WebSocket("ws://127.0.0.1:4000")

webSocket.onmessage = (event) =>{
	hadleSignallingData(JSON.parse(event.data))
}

function hadleSignallingData(data){
	switch (data.type){
		case "offer" :
			peerConn.setRemoteDescription(data.offer)
            crateAndSendAnswer()
			break
		case "candidate":
			peerConn.addIceCandidate(data.candidate)
	}
}

function createAndSendOffer(){
    peerConn.createAnswer((answer) => {
        peerConn.setLocalDescription(answer)
        sendData({
            type: "send_answer",
            answer: answer
        })   
    }, error => {
        console.log(error)
    })
}

function sendData(data){
    data.username = username
	webSocket.send(JSON.stringify(data))
}

let localStream 
let peerConn
let username


function join() {

    username = document.getElementById("username-input").value

	document.getElementById("video-call-div").style.display = "block"


	navigator.getUserMedia({
		video: {
			frameRate: 24,
			width: {
				min: 480, ideal: 720, max:1280
			},
			aspectRatio: 1.33333
		},
		audio: true
	}, (stream) => {
		localStream = stream
		document.getElementById("local-video").srcObject = localStream


		let configuration = {
			iceServers: [
				{
					"urls": [ "stun:stun.l.google.com:19302",
					"stun:stun1.l.google.com:19302",
					"stun:stun2.l.google.com:19302"]					
				}
			]
		}
    
		// peer for the stream to be available
		// and we should pass config like STUN and TURN server
		// used for creating the ICE candidates 

		peerConn = new RTCPeerConnection(configuration)
		peerConn.addStream(localStream)

		peerConn.onaddstream = (e) => {
			document.getElementById("reomte-video")
			.srcObject = e.stream
		}

		peerConn.onicecandidate = ((e) => {
			if(e.candidate == null)
				return
			
			sendData({
				type: "send_candidate",
				candidate: e.candidate
			})
		})

        sendData({
            type: "join_call"
        })



		// creating and sending offer -> offer is info of the candidate and remote

	}, (error) =>{
		console.log(error);
	})
}


let isAudio = true
function muteAudio() {
	isAudio = !isAudio

	localStream.getAudioTracks()[0].enabled = isAudio
}

let isVideo = true
function muteVideo() {
	isVideo = !isVideo

	localStream.getVideoTracks()[0].enabled = isVideo
}