<?php
  include_once 'includes/dbh.inc.php'
?>



<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <!--<link rel="stylesheet" type="text/css" href="main.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<body>

<style>
.navbar	{
	justify-content: center;
}

.marginfixed {
	margin-top: 60px!important;
}

body {
	line-height: 1;
}

.chart-checkbox {
	display: flex;
	max-width:1220px;
	width: 100%;
	flex-wrap: wrap;
	margin: auto;
	margin-top: 10px;
}

.idcheckbox {
	margin-bottom: 10px;
}

.select-checkbox {
	display: flex;
	width:40%;
	margin:auto;
	flex-wrap: wrap;
	justify-content: space-between;
	padding-top: 20px;
	padding-bottom: 20px;

}

</style>

<script>
function uncheckProb() {
	//uncheckable problematic ids
document.getElementById("287").checked = false;
document.getElementById("289").checked = false;
document.getElementById("318").checked = false;
document.getElementById("326").checked = false;
document.getElementById("342").checked = false;
document.getElementById("359").checked = false;
document.getElementById("367").checked = false;
document.getElementById("369").checked = false;
document.getElementById("378").checked = false;
document.getElementById("384").checked = false;
document.getElementById("393").checked = false;
document.getElementById("397").checked = false;
document.getElementById("421").checked = false;
document.getElementById("435").checked = false;
document.getElementById("437").checked = false;
document.getElementById("438").checked = false;
document.getElementById("451").checked = false;
document.getElementById("453").checked = false;
document.getElementById("459").checked = false;
document.getElementById("489").checked = false;
document.getElementById("495").checked = false;
document.getElementById("500").checked = false;
document.getElementById("506").checked = false;
document.getElementById("526").checked = false;
document.getElementById("546").checked = false;
document.getElementById("572").checked = false;
document.getElementById("579").checked = false;
document.getElementById("580").checked = false;
document.getElementById("581").checked = false;
document.getElementById("587").checked = false;
}

function isOdd(num) { return num % 2;}

function toggle(source) {
  checkboxes = document.getElementsByClassName('idcheckbox');
  for(var i=0, n=checkboxes.length;i<n;i++) {
	 checkboxes[i].checked = source.checked;

	};
  uncheckProb();
}



function toggleMidi(source) {
  checkboxes = document.getElementsByClassName('idcheckbox');
  for(var i=1, n=checkboxes.length;i<n;i++) {
    if (isOdd(checkboxes[i].id)) {checkboxes[i].checked = source.checked};

  }
  uncheckProb();
}

function toggleMidiMusicians(source) {
  checkboxes = document.getElementsByClassName('idcheckbox');
  for(var i=1, n=checkboxes.length;i<n;i++) {
    if (isOdd(checkboxes[i].id) && (checkboxes[i].id > 430)) {checkboxes[i].checked = source.checked};

  }
  uncheckProb();
}

function toggleMidiNonMusicians(source) {
  checkboxes = document.getElementsByClassName('idcheckbox');
  for(var i=1, n=checkboxes.length;i<n;i++) {
    if (isOdd(checkboxes[i].id) && (checkboxes[i].id < 430)) {checkboxes[i].checked = source.checked};

  }
  uncheckProb();
}

function toggleAudio(source) {
  checkboxes = document.getElementsByClassName('idcheckbox');
  for(var i=0, n=checkboxes.length;i<n;i++) {
	  if (!(isOdd(checkboxes[i].id))) {checkboxes[i].checked = source.checked};

  }
  uncheckProb();
}

function toggleAudioMusicians(source) {
  checkboxes = document.getElementsByClassName('idcheckbox');
  for(var i=1, n=checkboxes.length;i<n;i++) {
    if (!isOdd(checkboxes[i].id) && (checkboxes[i].id > 430)) {checkboxes[i].checked = source.checked};

  }
  uncheckProb();
}

function toggleAudioNonMusicians(source) {
  checkboxes = document.getElementsByClassName('idcheckbox');
  for(var i=1, n=checkboxes.length;i<n;i++) {
    if (!isOdd(checkboxes[i].id) && (checkboxes[i].id < 430)) {checkboxes[i].checked = source.checked};

  }
  uncheckProb();
}
</script>
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="chart.php">Scatter Chart</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="scatterbasedbarchart.php">Clicks per second Chart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="linechart.php">Clicks per listening Chart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="barchart.php">Clicks per Composer Chart</a>
    </li>
  </ul>

</nav>

	<div class="select-checkbox marginfixed">
		<input type="checkbox" onClick="toggle(this)" /> Select All (80)<br/>
		<input type="checkbox" onClick="toggleMidi(this)" /> Select All MIDI (41)<br/>
		<input type="checkbox" onClick="toggleAudio(this)" /> Select All Audio (39)<br/>
	</div>
	<div class="select-checkbox">
		<input type="checkbox" onClick="toggleMidiMusicians(this)" /> Select MIDI Musicians (18)<br/>
		<input type="checkbox" onClick="toggleMidiNonMusicians(this)" /> Select MIDI Non-Musicians(23)<br/>
	</div>
	<div class="select-checkbox">
		<input type="checkbox" onClick="toggleAudioMusicians(this)" /> Select Audio Musicians (20)<br/>
		<input type="checkbox" onClick="toggleAudioNonMusicians(this)" /> Select Audio Non-Musicians(19)<br/>
	</div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="selectionId">
	<div class="chart-checkbox">
<?php
//sanitized user data
$sql = "SELECT `user_id` FROM `users` WHERE `heardbefore_beethoven` <= 1 & `heardbefore_gogol` <= 1 & `heardbefore_schoenberg` <= 1";
$result = mysqli_query($conn,$sql);
while($results = mysqli_fetch_array($result)){
    echo "<input class='idcheckbox' type='checkbox' id=".$results['user_id']." name='selectionId[]' value=".$results['user_id'].">
<label style='margin-right:20px;' for=".$results['user_id'].">".$results['user_id']."</label>";
}
?>
	</div>
	<div class="chart-checkbox">
	    <input type="submit" name="submit" value="Submit">
	</div>
	</form>
<?php
$timestampSelection = 0;

$sumFirstBeethoven = 0;
$sumSecondBeethoven = 0;
$sumThirdBeethoven = 0;
$sumFourthBeethoven = 0;
$sumBeethoven = 0;

$sumFirstGogol = 0;
$sumSecondGogol = 0;
$sumThirdGogol = 0;
$sumFourthGogol = 0;
$sumGogol = 0;

$sumFirstSchoenberg = 0;
$sumSecondSchoenberg = 0;
$sumThirdSchoenberg = 0;
$sumFourthSchoenberg = 0;
$sumSchoenberg = 0;

$timestampListBeethoven = [];
$timestampListGogol = [];
$timestampListSchoenberg = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	for ($i=0; $i <= count($_POST["selectionId"]); $i++) {

			  //Beethoven
			  $sql = "SELECT `click_timestamp` FROM timestamp_1_1 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListBeethoven[$i][0][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_1_2 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListBeethoven[$i][1][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_1_3 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListBeethoven[$i][2][] = $results[0];
			  }

			  $sql = "SELECT `click_timestamp` FROM timestamp_1_4 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
			  		$timestampListBeethoven[$i][3][] = $results[0];
			  }
			  //Gogol
			  $sql = "SELECT `click_timestamp` FROM timestamp_2_1 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListGogol[$i][0][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_2_2 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListGogol[$i][1][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_2_3 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListGogol[$i][2][] = $results[0];
			  }

			  $sql = "SELECT `click_timestamp` FROM timestamp_2_4 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
			  		$timestampListGogol[$i][3][] = $results[0];
			  }
			  //Schoenberg
			  $sql = "SELECT `click_timestamp` FROM timestamp_3_1 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListSchoenberg[$i][0][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_3_2 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListSchoenberg[$i][1][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_3_3 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampListSchoenberg[$i][2][] = $results[0];
			  }

			  $sql = "SELECT `click_timestamp` FROM timestamp_3_4 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
			  		$timestampListSchoenberg[$i][3][] = $results[0];
			  }
	};


	for ($i=0; $i <= count($_POST["selectionId"]); $i++) {
		$sumFirstBeethoven += count($timestampListBeethoven[$i][0]);
		$sumSecondBeethoven += count($timestampListBeethoven[$i][1]);
		$sumThirdBeethoven += count($timestampListBeethoven[$i][2]);
		$sumFourthBeethoven += count($timestampListBeethoven[$i][3]);
	}
	$sumBeethoven = $sumFirstBeethoven + $sumSecondBeethoven + $sumThirdBeethoven + $sumFourthBeethoven;

	for ($i=0; $i <= count($_POST["selectionId"]); $i++) {
		$sumFirstGogol += count($timestampListGogol[$i][0]);
		$sumSecondGogol += count($timestampListGogol[$i][1]);
		$sumThirdGogol += count($timestampListGogol[$i][2]);
		$sumFourthGogol += count($timestampListGogol[$i][3]);
	}
	$sumGogol = $sumFirstGogol + $sumSecondGogol + $sumThirdGogol + $sumFourthGogol;

	for ($i=0; $i <= count($_POST["selectionId"]); $i++) {
		$sumFirstSchoenberg += count($timestampListSchoenberg[$i][0]);
		$sumSecondSchoenberg += count($timestampListSchoenberg[$i][1]);
		$sumThirdSchoenberg += count($timestampListSchoenberg[$i][2]);
		$sumFourthSchoenberg += count($timestampListSchoenberg[$i][3]);
	}
	$sumSchoenberg = $sumFirstSchoenberg + $sumSecondSchoenberg + $sumThirdSchoenberg +$sumFourthSchoenberg;
}

?>

	<div>
	  	<canvas id="myChart"></canvas>
	</div>

</body>


<script>
let barColorBeethoven = 'rgb(255, 99, 132)';
let barColorGogol = 'rgb(239, 186, 225)';
let barColorSchoenberg = 'rgb(107, 164, 184)';

let barColorBeethovenA = 'rgba(255, 99, 132, 0.2)';
let barColorGogolA = 'rgba(239, 186, 225, 0.2)';
let barColorSchoenbergA = 'rgba(107, 164, 184, 0.2)';
//pass Php array to Js

let sumBeethoven = <?php echo json_encode($sumBeethoven); ?>;
let sumGogol = <?php echo json_encode($sumGogol); ?>;
let sumSchoenberg = <?php echo json_encode($sumSchoenberg); ?>;

//Chart.js
const labels = ["Beethoven", "Gogol", "Schoenberg"];
const data = {
  labels: labels,
  datasets: [{
    label: "Number of clicks per Composer",
    data: [sumBeethoven, sumGogol, sumSchoenberg],
	backgroundColor: [
      barColorBeethovenA,
      barColorGogolA,
      barColorSchoenbergA
    ],
	borderColor: [
      barColorBeethoven,
      barColorGogol,
      barColorSchoenberg
    ],
    borderWidth: 1
  }]};
var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
};

const config = {
  type: 'bar',
  data: data,
  options: options
};


// === include 'setup' then 'config' above ===

let myChart = new Chart(
  document.getElementById('myChart'),
  config
);


//uncheckable problematic ids
document.getElementById("287").setAttribute("disabled", "disabled");
document.getElementById("289").setAttribute("disabled", "disabled");
document.getElementById("326").setAttribute("disabled", "disabled");
document.getElementById("342").setAttribute("disabled", "disabled");
document.getElementById("359").setAttribute("disabled", "disabled");
document.getElementById("367").setAttribute("disabled", "disabled");
document.getElementById("369").setAttribute("disabled", "disabled");
document.getElementById("318").setAttribute("disabled", "disabled");
document.getElementById("378").setAttribute("disabled", "disabled");
document.getElementById("384").setAttribute("disabled", "disabled");
document.getElementById("393").setAttribute("disabled", "disabled");
document.getElementById("397").setAttribute("disabled", "disabled");
document.getElementById("421").setAttribute("disabled", "disabled");
document.getElementById("435").setAttribute("disabled", "disabled");
document.getElementById("437").setAttribute("disabled", "disabled");
document.getElementById("438").setAttribute("disabled", "disabled");
document.getElementById("451").setAttribute("disabled", "disabled");
document.getElementById("453").setAttribute("disabled", "disabled");
document.getElementById("459").setAttribute("disabled", "disabled");
document.getElementById("489").setAttribute("disabled", "disabled");
document.getElementById("495").setAttribute("disabled", "disabled");
document.getElementById("500").setAttribute("disabled", "disabled");
document.getElementById("506").setAttribute("disabled", "disabled");
document.getElementById("526").setAttribute("disabled", "disabled");
document.getElementById("546").setAttribute("disabled", "disabled");
document.getElementById("572").setAttribute("disabled", "disabled");
document.getElementById("579").setAttribute("disabled", "disabled");
document.getElementById("580").setAttribute("disabled", "disabled");
document.getElementById("581").setAttribute("disabled", "disabled");
document.getElementById("587").setAttribute("disabled", "disabled");
</script>
