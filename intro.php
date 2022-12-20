<?php
session_start();
?>
<button onclick="setCurTime()" type="button">1st listening: Set time position to end</button><br>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="sid-plesk">
<head>
    <title>Domain Default page</title>
    <meta name="copyright" content="Copyright 1999-2018. Plesk International GmbH. All rights reserved.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="main.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  	<script src="/js/jquery_3_5_1.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body id="body">
	<h2 style="margin-top:40px;text-align: center;">Πατήστε το πλήκτρο όποτε αρχίζει μία μουσική ιδέα</h2>

<!--
<form id="theForm" action="includes/userinput.inc.php" method="POST">
  <input type="text" name="age" placeholder="Age">
  <br>
  <input type="text" name="gender" placeholder="Gender">
  <br>
  <input type="text" name="educationLevel" placeholder="Education">
  <br>
  <input type="text" name="country" placeholder="Country">
  <br>
  <input type="text" name="musicPreferences" placeholder="MusicPreferences">
  <br>
  <button id="formSubmit" type="submit" name="submit">Submit</button>
</form>
-->
<!--<button onclick="setCurTime()" type="button">1st listening: Set time position to end</button><br>-->


<p id=""></p>
<div style="position: absolute;left: 10%;transform: translate(-10%, 0%);">
	<h3>Τα επιτρεπόμενα πλήκτρα διάδρασης <br>επισημαίνονται με πράσινο χρώμα:</h3>
<img src="assets/img/keyboard_colorized.png" width="300px" >
</div>
<div class="svgdiv animate__animated" id="svgdiv1">
	
<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="playButton1" class="animate__animated" onClick="playAudio1()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="550px" height="450px"
	 viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
<path d="M227.5,0C101.855,0,0,101.855,0,227.5S101.855,455,227.5,455S455,353.145,455,227.5S353.145,0,227.5,0z M166.062,321.575
	V133.425L328.938,227.5L166.062,321.575z"/>
</svg>	
	
</div>


<div>
  <div class="animate__animated container hide" id="progressbarcontainer1">

    <div class="progress animate__animated " id="progress1"></div>

  </div>
</div>


<audio id="myAudio1">
  <source src="assets/mp3s/mozart_kv_331_Amajor.mp3" type="audio/mp3">
</audio>


<script>

var beatTimeChange_intro = [];	
	
var aud1 = document.getElementById("myAudio1");

var b = 1;



// PLAY AUDIO MAIN FUNCTION //

function playAudio1() {

var element = document.getElementById("playButton1");


document.addEventListener("keydown", getCurTime = function() {
      document.getElementById("body").classList.add("blink");
      //console.log(b);
      setTimeout(function(){
          document.getElementById("body").classList.remove("blink");
      }, 500);
      //alert(aud1.currentTime);
      beatTimeChange_intro.push(aud1.currentTime);
  });

  // PLAY FUNCTION //

  aud1.play();

  // ADD PROGRESS BAR //

  var newprogressbar = "progressbarcontainer1";
  element.classList.add("animate__fadeOut");
  document.getElementById(newprogressbar).classList.remove("hide");
  document.getElementById(newprogressbar).classList.add("animate__fadeIn");

  // REMOVE PLAY BUTTON //

  setTimeout(function(b){
      document.getElementById("svgdiv1").remove();
  }, 1500, b);

  // WHAT HAPPENS WHEN THE SAMPLE STOPS //

  aud1.onended = function() {
  //document.getElementById("svgdiv2").classList.remove("hide");
  //document.getElementById("svgdiv2").classList.add("animate__fadeIn");
  //document.getElementById("progressbarcontainer1").classList.add("animate__fadeOut");
  //document.removeEventListener("keydown", getCurTime);
  //audio.removeEventListener("playing", test);
  //sendArray();

	     Swal.fire({
          title: '<strong><u>Έχετε ξανακούσει αυτό το κομμάτι;</u></strong>',
          icon: 'info',
          html: "",
          allowOutsideClick: false,
          allowEscapeKey: false,
          allowEnterKey: false,
          showCloseButton: false,
          showDenyButton: true,
          focusConfirm: false,
          confirmButtonText:
          'Yes',
          denyButtonText:
          'No',
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            var c = 1;
			  						let timerInterval
									Swal.fire({
									  title: '',
									  html: 'Το ερωτηματολόγιο ξεκινάει σε <b></b> δευτερόλεπτα.',
									  timer: 5000,
									  timerProgressBar: true,
									  didOpen: () => {
										Swal.showLoading()
										timerInterval = setInterval(() => {
										  const content = Swal.getContent()
										  if (content) {
											const b = content.querySelector('b')
											if (b) {
											  b.textContent = Swal.getTimerLeft()
											}
										  }
										}, 100)
									  },
									  willClose: () => {
										clearInterval(timerInterval)
									  }
									}).then((result) => {
									  sendArray(c);
									  if (result.dismiss === Swal.DismissReason.timer) {
										console.log('I was closed by the timer')
									  }										
									})
			  
          } else if (result.isDenied) {
			  var c = 0;


			  						let timerInterval
									Swal.fire({
									  title: '',
									  html: 'Το ερωτηματολόγιο ξεκινάει σε <b></b> δευτερόλεπτα.',
									  timer: 5000,
									  timerProgressBar: true,
									  didOpen: () => {
										Swal.showLoading()
										timerInterval = setInterval(() => {
										  const content = Swal.getContent()
										  if (content) {
											const b = content.querySelector('b')
											if (b) {
											  b.textContent = Swal.getTimerLeft()
											}
										  }
										}, 100)
									  },
									  willClose: () => {
										clearInterval(timerInterval)
									  }
									}).then((result) => {
									    
									    sendArray(c);

									})
          }
        })
  };

  // PROGRESS BAR FUNCTIONS //

  var timer;
  var percent = 0;
  var audio = document.getElementById("myAudio1");

  audio.addEventListener("playing", test = function(_event) {
    var duration = _event.target.duration;
    advance(duration, audio);
  });
  audio.addEventListener("pause", function(_event) {
    clearTimeout(timer);
  });
  var advance = function(duration, element) {
    var progress = document.getElementById("progress1");
    increment = 10/duration
    percent = Math.min(increment * element.currentTime * 10, 100);
    progress.style.width = percent+'%'
    startTimer(duration, element);
  }
  var startTimer = function(duration, element){
    if(percent < 100) {
      timer = setTimeout(function (){advance(duration, element)}, 100);
    }
  }

  function togglePlay (e) {
    e = e || window.event;
    var btn = e.target;
    if (!audio.paused) {
      btn.classList.remove('active');
      audio.pause();
      isPlaying = false;
    } else {
      btn.classList.add('active');
      audio.play();
      isPlaying = true;
    }
  }
};

function sendArray(c)
										{

$.ajax({
	url     : 'includes/receiveintro.php',
	method    : 'POST',
	data :{
		data:c,
		arrayData:beatTimeChange_intro
		},
	success   : function(response)
		{
			//console.log("data sent response is "+response);
										

			window.location.replace(response + ".php?userinput=success");

					},
	error : function(e)
					{
			alert("data not sent")
	}
	});
}


	
function setCurTime() {
  aud1.currentTime=200;
}
	
</script>
</body>
</html>
