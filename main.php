<?php
session_start();
?>
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
<?php

     //echo "Value is: " . $_COOKIE["user"];

?><div style="position: absolute;left: 8%;top:1%;transform: translate(-8%, 0%);">
	<h3>Τα επιτρεπόμενα πλήκτρα διάδρασης <br>επισημαίνωνται με πράσινο χρώμα:</h3>
<img src="assets/img/keyboard_colorized.png" width="300px" >
</div>
<h2 style="margin-top:40px;text-align: center;">Πατήστε το πλήκτρο όποτε αρχίζει μία μουσική ιδέα</h2>

<!--<button onclick="setCurTime()" type="button">1st listening: Set time position to end</button><br>
<button onclick="setCurTime2()" type="button">2nd listening: Set time position to end</button><br>
<button onclick="setCurTime3()" type="button">3rd listening: Set time position to end</button><br>
<button onclick="setCurTime4()" type="button">4rth listening: Set time position to end</button><br>-->
<p id=""></p>


<div class="svgdiv animate__animated hide" id="svgdiv4">

	
	
<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="playButton4" class="animate__animated" onClick="playAudio4()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="550px" height="450px"
	 viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
<path d="M227.5,0C101.855,0,0,101.855,0,227.5S101.855,455,227.5,455S455,353.145,455,227.5S353.145,0,227.5,0z M166.062,321.575
	V133.425L328.938,227.5L166.062,321.575z"/>
</svg>	
	

</div>

<div class="svgdiv animate__animated hide" id="svgdiv3">	
<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="playButton3" class="animate__animated" onClick="playAudio3()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="550px" height="450px"
	 viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
<path d="M227.5,0C101.855,0,0,101.855,0,227.5S101.855,455,227.5,455S455,353.145,455,227.5S353.145,0,227.5,0z M166.062,321.575
	V133.425L328.938,227.5L166.062,321.575z"/>
</svg>
</div>

<div class="svgdiv animate__animated hide" id="svgdiv2">
<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="playButton2" class="animate__animated" onClick="playAudio2()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="550px" height="450px"
	 viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
<path d="M227.5,0C101.855,0,0,101.855,0,227.5S101.855,455,227.5,455S455,353.145,455,227.5S353.145,0,227.5,0z M166.062,321.575
	V133.425L328.938,227.5L166.062,321.575z"/>
</svg>	
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


<div class="outofsite progressbarcontainer" id="divprogress1">
  <div class="animate__animated container hide" id="progressbarcontainer1">

    <div class="progress animate__animated " id="progress1"></div>

  </div>
</div>
<div class="outofsite progressbarcontainer" id="divprogress2">
  <div class="animate__animated container hide" id="progressbarcontainer2">

    <div class="progress animate__animated " id="progress2"></div>

  </div>
</div>
<div class="outofsite progressbarcontainer" id="divprogress3">
  <div class="animate__animated container hide" id="progressbarcontainer3">

    <div class="progress animate__animated " id="progress3"></div>

  </div>
</div>
<div class="outofsite progressbarcontainer" id="divprogress4">
  <div class="animate__animated container hide" id="progressbarcontainer4">

    <div class="progress animate__animated " id="progress4"></div>

  </div>
</div>

<audio id="myAudio1">
  <source src="assets/mp3s/beethoven_sonata_no_18 fade out.mp3" type="audio/mp3">
</audio>

<audio id="myAudio2">
  <source src="assets/mp3s/beethoven_sonata_no_18 fade out.mp3" type="audio/mp3">
</audio>

<audio id="myAudio3">
  <source src="assets/mp3s/beethoven_sonata_no_18 fade out.mp3" type="audio/mp3">
</audio>

<audio id="myAudio4">
  <source src="assets/mp3s/beethoven_sonata_no_18 fade out.mp3" type="audio/mp3">
</audio>

<script>

var aud4 = document.getElementById("myAudio4");
var aud3 = document.getElementById("myAudio3");
var aud2 = document.getElementById("myAudio2");
var aud1 = document.getElementById("myAudio1");

var b = 1;

var beatTimeChange1 = [];
var beatTimeChange2 = [];
var beatTimeChange3 = [];
var beatTimeChange4 = [];

// PLAY AUDIO MAIN FUNCTION //

function playAudio1() {

var element = document.getElementById("playButton1");


document.addEventListener("keydown", getCurTime = function() {
      document.getElementById("body").classList.add("blink");
      console.log(b);
      setTimeout(function(){
          document.getElementById("body").classList.remove("blink");
      }, 500);
      //alert(aud1.currentTime);
      beatTimeChange1.push(aud1.currentTime);
  });

  // PLAY FUNCTION //

  aud1.play();

  // ADD PROGRESS BAR //

  var newprogressbar = "progressbarcontainer1";
  element.classList.add("animate__fadeOut");
  
  document.getElementById(newprogressbar).classList.remove("hide");
  document.getElementById(newprogressbar).classList.add("animate__fadeIn");
  document.getElementById("divprogress1").classList.remove("outofsite");	
  document.getElementById("divprogress1").classList.add("insite");
  // REMOVE PLAY BUTTON //

  setTimeout(function(b){
      document.getElementById("svgdiv1").remove();
  }, 1500, b);

  // WHAT HAPPENS WHEN THE SAMPLE STOPS //

  aud1.onended = function() {
  document.getElementById("svgdiv2").classList.remove("hide");
  document.getElementById("svgdiv2").classList.add("animate__fadeIn");
  document.getElementById("progressbarcontainer1").classList.add("animate__fadeOut");
  document.removeEventListener("keydown", getCurTime);
  audio.removeEventListener("playing", test);
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
            var c = "1";
            sendArray(c);
            //Swal.fire('Saved!', '', 'success')
          } else if (result.isDenied) {
            var c = "0";
            sendArray(c);
            //Swal.fire('Changes are not saved', '', 'info')
          }
        })

  setTimeout(function(){
      document.getElementById("progressbarcontainer1").parentNode.remove();
    }, 1500);
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

function playAudio2() {

var element = document.getElementById("playButton2");


document.addEventListener("keydown", getCurTime2 = function() {
      document.getElementById("body").classList.add("blink");
      console.log(b);
	  setTimeout(function(){
		  document.getElementById("body").classList.remove("blink");
	  }, 500);
      beatTimeChange2.push(aud2.currentTime);
      //alert(aud2.currentTime);
      //console.log(beatTimeChange2);
  });

  // PLAY FUNCTION //

  aud2.play();

  // ADD PROGRESS BAR //

  var newprogressbar = "progressbarcontainer2";
  element.classList.add("animate__fadeOut");
  document.getElementById(newprogressbar).classList.remove("hide");
  document.getElementById(newprogressbar).classList.add("animate__fadeIn");
  document.getElementById("divprogress2").classList.remove("outofsite");	
  document.getElementById("divprogress2").classList.add("insite");

  // REMOVE PLAY BUTTON //

  setTimeout(function(b){
      document.getElementById("svgdiv2").remove();
  }, 1500, b);

  // WHAT HAPPENS WHEN THE SAMPLE STOPS //

  aud2.onended = function() {
  document.getElementById("svgdiv3").classList.remove("hide");
  document.getElementById("svgdiv3").classList.add("animate__fadeIn");
  document.getElementById("progressbarcontainer2").classList.add("animate__fadeOut");
  document.removeEventListener("keydown", getCurTime2);
  audio.removeEventListener("playing", test);
  sendArray2();

  setTimeout(function(){
      document.getElementById("progressbarcontainer2").parentNode.remove();
    }, 1500);
  };

  // PROGRESS BAR FUNCTIONS //

  var timer;
  var percent = 0;
  var audio = document.getElementById("myAudio2");

  audio.addEventListener("playing", test = function(_event) {
    var duration = _event.target.duration;
    advance(duration, audio);
  });
  audio.addEventListener("pause", function(_event) {
    clearTimeout(timer);
  });
  var advance = function(duration, element) {
    var progress = document.getElementById("progress2");
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
}

function playAudio3() {

var element = document.getElementById("playButton3");

	
document.addEventListener("keydown", getCurTime3 = function() {
      document.getElementById("body").classList.add("blink");
      console.log(b);
	  setTimeout(function(){
		  document.getElementById("body").classList.remove("blink");
	  }, 500);
      beatTimeChange3.push(aud3.currentTime);
      //alert(aud3.currentTime);
      //console.log(beatTimeChange3);
  });

  // PLAY FUNCTION //

  aud3.play();

  // ADD PROGRESS BAR //

  var newprogressbar = "progressbarcontainer3";
  element.classList.add("animate__fadeOut");
  document.getElementById(newprogressbar).classList.remove("hide");
  document.getElementById(newprogressbar).classList.add("animate__fadeIn");
  document.getElementById("divprogress3").classList.remove("outofsite");
  document.getElementById("divprogress3").classList.add("insite");

  // REMOVE PLAY BUTTON //

  setTimeout(function(b){
      document.getElementById("svgdiv3").remove();
  }, 1500, b);

  // WHAT HAPPENS WHEN THE SAMPLE STOPS //

  aud3.onended = function() {
  document.getElementById("svgdiv4").classList.remove("hide");
  document.getElementById("svgdiv4").classList.add("animate__fadeIn");
  document.getElementById("progressbarcontainer3").classList.add("animate__fadeOut");
  document.removeEventListener("keydown", getCurTime2);
  audio.removeEventListener("playing", test);
  sendArray3();

  setTimeout(function(){
      document.getElementById("progressbarcontainer3").parentNode.remove();
    }, 1500);
  };

  // PROGRESS BAR FUNCTIONS //

  var timer;
  var percent = 0;
  var audio = document.getElementById("myAudio3");

  audio.addEventListener("playing", test = function(_event) {
    var duration = _event.target.duration;
    advance(duration, audio);
  });
  audio.addEventListener("pause", function(_event) {
    clearTimeout(timer);
  });
  var advance = function(duration, element) {
    var progress = document.getElementById("progress3");
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
}

function playAudio4() {

var element = document.getElementById("playButton4");


document.addEventListener("keydown", getCurTime4 = function() {
      document.getElementById("body").classList.add("blink");
      console.log(b);
	  setTimeout(function(){
		  document.getElementById("body").classList.remove("blink");
	  }, 500);
      beatTimeChange4.push(aud4.currentTime);
      //alert(aud4.currentTime);
      //console.log(beatTimeChange4);
  });

  // PLAY FUNCTION //

  aud4.play();

  // ADD PROGRESS BAR //

  var newprogressbar = "progressbarcontainer4";
  element.classList.add("animate__fadeOut");
  document.getElementById(newprogressbar).classList.remove("hide");
  document.getElementById(newprogressbar).classList.add("animate__fadeIn");
  document.getElementById("divprogress4").classList.remove("outofsite");	
  document.getElementById("divprogress4").classList.add("insite");

  // REMOVE PLAY BUTTON //

  setTimeout(function(b){
      document.getElementById("svgdiv4").remove();
  }, 1500, b);

  // WHAT HAPPENS WHEN THE SAMPLE STOPS //

  aud4.onended = function() {
  //document.getElementById("svgdiv3").classList.remove("hide");
  //document.getElementById("svgdiv3").classList.add("animate__fadeIn");
  //document.getElementById("progressbarcontainer1").classList.add("animate__fadeOut");
  document.removeEventListener("keydown", getCurTime4);
  audio.removeEventListener("playing", test);
  sendArray4();

  //setTimeout(function(){
  //    document.getElementById("progressbarcontainer4").parentNode.remove();
  //  }, 1500);
  };

  // PROGRESS BAR FUNCTIONS //

  var timer;
  var percent = 0;
  var audio = document.getElementById("myAudio4");

  audio.addEventListener("playing", test = function(_event) {
    var duration = _event.target.duration;
    advance(duration, audio);
  });
  audio.addEventListener("pause", function(_event) {
    clearTimeout(timer);
  });
  var advance = function(duration, element) {
    var progress = document.getElementById("progress4");
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
}


// ΔΟΚΙΜΑΣΤΙΚΟ - ΒΟΗΘΗΤΙΚΟ
function setCurTime() {
  aud1.currentTime=300;
}

function setCurTime2() {
  aud2.currentTime=270;
}

function setCurTime3() {
  aud3.currentTime=300;
}

function setCurTime4() {
  aud4.currentTime=270;
}
// AJAX send sata to PHP //

function sendArray(c)
{

$.ajax({
url     : 'includes/receivedata.php',
method    : 'POST',
data :{
  data:c,
 arrayData:beatTimeChange1
},
success   : function(response)
{
//alert("data sent response is "+response);
},
error : function(e)
{
alert("data not sent")
}
});
}

function sendArray2()
{

$.ajax({
url     : 'includes/receivedata2.php',
method    : 'POST',
data :{
 arrayData2:beatTimeChange2
},
success   : function(response)
{
//alert("data sent response is "+response);
},
error : function(e)
{
alert("data not sent")
}
});
}

function sendArray3()
{

$.ajax({
url     : 'includes/receivedata3.php',
method    : 'POST',
data :{
 arrayData3:beatTimeChange3
},
success   : function(response)
{
//alert("data sent response is "+response);
},
error : function(e)
{
alert("data not sent")
}
});
}

function sendArray4()
{

$.ajax({
url     : 'includes/receivedata4.php',
method    : 'POST',
data :{
 arrayData4:beatTimeChange4
},
success   : function(response)
{
	//alert("data sent response is "+response)

if (response == "main3") {
	window.location.replace("main3.php?userinput=success");
}

else if (response == "main2") {
	window.location.replace("main2.php?userinput=success");
}	
	
else if (response == "end") {
	window.location.replace("evaluation.php");
}
	
},
error : function(e)
{
alert("data not sent")
}
});
}

</script>
	
<!--
<button onclick="sendArray();">Send Array</button>
<button onclick="sendArray2();">Send Array 2</button>
<button onclick="sendArray3();">Send Array 3</button>
<button onclick="sendArray4();">Send Array 4</button>
-->





<?php 
//echo $_SESSION["user"];
//echo $_COOKIE["timeofappereance1"];
//echo $_COOKIE["timeofappereance2"];
//echo $_COOKIE["timeofappereance3"];
?>

</body>
</html>
