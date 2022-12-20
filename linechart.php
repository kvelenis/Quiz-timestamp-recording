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
.navbar {
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
      <a class="nav-link active" href="linechart.php">Clicks per listening Chart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="barchart.php">Clicks per Composer Chart</a>
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
	<label for="cars">Επιλογή Ακρόασης:</label>
	<select id="cars" name="timestamp" form="selectionId">
	  <option <?php if($_POST['timestamp'] == 'timestamp_1'){echo("selected");}?> value="timestamp_1">Beethoven</option>
	  <option <?php if($_POST['timestamp'] == 'timestamp_2'){echo("selected");}?> value="timestamp_2">Gogol</option>
	  <option <?php if($_POST['timestamp'] == 'timestamp_3'){echo("selected");}?> value="timestamp_3">Schoenberg</option>
	</select>
	</div>
	<div class="chart-checkbox">
	    <input type="submit" name="submit" value="Submit">
	</div>
	</form>
<?php
$sumFirst = 0;
$sumSecond = 0;
$sumThird = 0;
$sumFourth = 0;
$timestampSelection = 0;
$timestampList = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['timestamp'] == "timestamp_1")
	{
		$timestampSelection = 1;
	}
	else if ($_POST['timestamp'] == "timestamp_2")
	{
		$timestampSelection = 2;
	}
	else
	{
		$timestampSelection = 3;
	}

	for ($i=0; $i <= count($_POST["selectionId"]); $i++) {


			  $sql = "SELECT `click_timestamp` FROM timestamp_".$timestampSelection."_1 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampList[$i][0][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_".$timestampSelection."_2 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampList[$i][1][] = $results[0];
				}

			  $sql = "SELECT `click_timestamp` FROM timestamp_".$timestampSelection."_3 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
					$timestampList[$i][2][] = $results[0];
			  }

			  $sql = "SELECT `click_timestamp` FROM timestamp_".$timestampSelection."_4 WHERE user_id =".$_POST['selectionId'][$i];
			  $result = mysqli_query($conn,$sql);
			  while($results = mysqli_fetch_array($result)){
			  		$timestampList[$i][3][] = $results[0];
			  }
	};


	for ($i=0; $i <= count($_POST["selectionId"]); $i++) {
		$sumFirst += count($timestampList[$i][0]);
		$sumSecond += count($timestampList[$i][1]);
		$sumThird += count($timestampList[$i][2]);
		$sumFourth += count($timestampList[$i][3]);
	}

}




?>

	<div>
	  	<canvas id="myChart"></canvas>
	</div>



</body>


<script>
let borderColor = 'rgb(255, 99, 132)';
//pass Php array to Js
let selectedComposer = <?php echo json_encode($_POST['timestamp']); ?>;
if (selectedComposer == "timestamp_1") {
	selectedComposer = "Beethoven";
	borderColor = 'rgb(255, 99, 132)';
} else if (selectedComposer == "timestamp_2") {
	selectedComposer = "Gogol";
	borderColor = 'rgb(239, 186, 225)';
} else {
	selectedComposer = "Schoenberg";
	borderColor = 'rgb(107, 164, 184)';
}
let sumFirst = <?php echo json_encode($sumFirst); ?>;
let sumSecond = <?php echo json_encode($sumSecond); ?>;
let sumThird = <?php echo json_encode($sumThird); ?>;
let sumFourth = <?php echo json_encode($sumFourth); ?>;
let selectedIds = <?php echo json_encode($timestampList); ?>;


let xPoints = [];
let yPoints = [];
let storage = [];
let selectedTimestamps = [];
let y = 1;
selectedIds.forEach((currentValue) =>
	{


		currentValue.forEach((currentValue) =>
		{

		x = xPoints.push(currentValue);
		let json = {x: currentValue, y: y};
		storage.push(json);

		})

	y++;

	}
)


//Chart.js
const labels = [1,2,3,4];
const data = {
  labels: labels,
  datasets: [{
    label: selectedComposer,
    data: [sumFirst, sumSecond, sumThird, sumFourth],
    fill: false,
    borderColor: borderColor,
    tension: 0.1,
  }]};
var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
};

const config = {
  type: 'line',
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
