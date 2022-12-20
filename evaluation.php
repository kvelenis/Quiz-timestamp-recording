<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<style>
* {
    box-sizing: border-box;
}
	
.error {color: #FF0000;}
	
form {
width:100vw;
	}	
	
#data {
    overflow:hidden;
    padding:0;
	width:100vw;
}
select {
	padding:0;
	padding-left:1px;
	border:none;
	background-color:#eee;
	width:auto;
	white-space: normal;
	height:100px;
	border-radius:0;
	font-size:13px;
	align-items:center;
}
option {
	height:100px;
	width:190px!important;
	border:1px solid #000;
	background-color:white;
	display:inline-block;
}	
label {
	margin-top:24px;}
	

</style>

<?php 
//$q_1 = $q_2 = $q_3 = $q_4 = $q_5 = $q_6 = $q_7 = $q_8 = $q_9 = $q_10 = $q_11 = $q_12 = $q_13 = $q_14 = $q_15 = $q_16 = $q_17 = $q_18 = $q_19 = $q_20 = $q_21 = $q_22 = $q_23 = $q_24 = $q_25 = $q_26 = $q_27 = $q_28 = $q_29 = $q_30 = $q_31 = $q_32 = $q_33 = $q_34 = $q_35 = $q_36 = $q_37 = $q_38 = $q_39 = $q_40 = $q_41 = "";
	
//$q_1err = $q_2err = $q_3err = $q_4err = $q_5err = $q_6err = $q_7err = $q_8err = $q_9err = $q_10err = $q_11err = $q_12err = $q_13err = $q_14err = $q_15err = $q_16err = $q_17err = $q_18err = $q_19err = $q_20err = $q_21err = $q_22err = $q_23err = $q_24err = $q_25err = $q_26err = $q_27err = $q_28err = $q_29err = $q_30err = $q_31err = $q_32err = $q_33err = $q_34err = $q_35err = $q_36err = $q_37err = $q_38err = $q_39err = $q_40err = $q_41err = "";
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["q_1"])) {
    $q_1err = "Απαιτούμενο πεδίο";
  } else {
    $q_1 = test_input($_POST["q_1"]);
  }
  
  if (empty($_POST["q_2"])) {
    $q_2err = "Απαιτούμενο πεδίο";
  } else {
    $q_2 = test_input($_POST["q_2"]);
  }
    
  if (empty($_POST["q_3"])) {
    $q_3err = "Απαιτούμενο πεδίο";
  } else {
    $q_3 = test_input($_POST["q_3"]);
  }

  if (empty($_POST["q_4"])) {
    $q_4err = "Απαιτούμενο πεδίο";
  } else {
    $q_4 = test_input($_POST["q_4"]);
  }

  if (empty($_POST["q_5"])) {
    $q_5err = "Απαιτούμενο πεδίο";
  } else {
    $q_5 = test_input($_POST["q_5"]);
  }
  if (empty($_POST["q_6"])) {
    $q_6err = "Απαιτούμενο πεδίο";
  } else {
    $q_6 = test_input($_POST["q_6"]);
  }
  
  if (empty($_POST["q_7"])) {
    $q_7err = "Απαιτούμενο πεδίο";
  } else {
    $q_7 = test_input($_POST["q_7"]);
  }
    
  if (empty($_POST["q_8"])) {
    $q_8err = "Απαιτούμενο πεδίο";
  } else {
    $q_8 = test_input($_POST["q_8"]);
  }

  if (empty($_POST["q_9"])) {
    $q_9err = "Απαιτούμενο πεδίο";
  } else {
    $q_9 = test_input($_POST["q_9"]);
  }

  if (empty($_POST["q_10"])) {
    $q_10err = "Απαιτούμενο πεδίο";
  } else {
    $q_10 = test_input($_POST["q_10"]);
  }
  if (empty($_POST["q_11"])) {
    $q_11err = "Απαιτούμενο πεδίο";
  } else {
    $q_11 = test_input($_POST["q_11"]);
  }
  
  if (empty($_POST["q_12"])) {
    $q_12err = "Απαιτούμενο πεδίο";
  } else {
    $q_12 = test_input($_POST["q_12"]);
  }
    
  if (empty($_POST["q_13"])) {
    $q_13err = "Απαιτούμενο πεδίο";
  } else {
    $q_13 = test_input($_POST["q_13"]);
  }

  if (empty($_POST["q_14"])) {
    $q_14err = "Απαιτούμενο πεδίο";
  } else {
    $q_14 = test_input($_POST["q_14"]);
  }

  if (empty($_POST["q_15"])) {
    $q_15err = "Απαιτούμενο πεδίο";
  } else {
    $q_15 = test_input($_POST["q_15"]);
  }
  if (empty($_POST["q_16"])) {
    $q_16err = "Απαιτούμενο πεδίο";
  } else {
    $q_16 = test_input($_POST["q_16"]);
  }
  
  if (empty($_POST["q_17"])) {
    $q_17err = "Απαιτούμενο πεδίο";
  } else {
    $q_17 = test_input($_POST["q_17"]);
  }
    
  if (empty($_POST["q_18"])) {
    $q_18err = "Απαιτούμενο πεδίο";
  } else {
    $q_18 = test_input($_POST["q_18"]);
  }

  if (empty($_POST["q_19"])) {
    $q_19err = "Απαιτούμενο πεδίο";
  } else {
    $q_19 = test_input($_POST["q_19"]);
  }

  if (empty($_POST["q_20"])) {
    $q_20err = "Απαιτούμενο πεδίο";
  } else {
    $q_20 = test_input($_POST["q_20"]);
  }
  if (empty($_POST["q_21"])) {
    $q_21err = "Απαιτούμενο πεδίο";
  } else {
    $q_21 = test_input($_POST["q_21"]);
  }
  
  if (empty($_POST["q_22"])) {
    $q_22err = "Απαιτούμενο πεδίο";
  } else {
    $q_22 = test_input($_POST["q_22"]);
  }
    
  if (empty($_POST["q_23"])) {
    $q_23err = "Απαιτούμενο πεδίο";
  } else {
    $q_23 = test_input($_POST["q_23"]);
  }

  if (empty($_POST["q_24"])) {
    $q_24err = "Απαιτούμενο πεδίο";
  } else {
    $q_24 = test_input($_POST["q_24"]);
  }

  if (empty($_POST["q_25"])) {
    $q_25err = "Απαιτούμενο πεδίο";
  } else {
    $q_25 = test_input($_POST["q_25"]);
  }
  if (empty($_POST["q_26"])) {
    $q_26err = "Απαιτούμενο πεδίο";
  } else {
    $q_26 = test_input($_POST["q_26"]);
  }
  
  if (empty($_POST["q_27"])) {
    $q_27err = "Απαιτούμενο πεδίο";
  } else {
    $q_27 = test_input($_POST["q_27"]);
  }
    
  if (empty($_POST["q_28"])) {
    $q_28err = "Απαιτούμενο πεδίο";
  } else {
    $q_28 = test_input($_POST["q_28"]);
  }

  if (empty($_POST["q_29"])) {
    $q_29err = "Απαιτούμενο πεδίο";
  } else {
    $q_29 = test_input($_POST["q_29"]);
  }

  if (empty($_POST["q_30"])) {
    $q_30err = "Απαιτούμενο πεδίο";
  } else {
    $q_30 = test_input($_POST["q_30"]);
  }
  
  if (empty($_POST["q_31"])) {
    $q_31err = "Απαιτούμενο πεδίο";
  } else {
    $q_31 = test_input($_POST["q_31"]);
  }
    
  if (empty($_POST["q_32"])) {
    $q_32err = "Απαιτούμενο πεδίο";
  } else {
    $q_32 = test_input($_POST["q_32"]);
  }

  if (empty($_POST["q_33"])) {
    $q_33err = "Απαιτούμενο πεδίο";
  } else {
    $q_33 = test_input($_POST["q_33"]);
  }

  if (empty($_POST["q_34"])) {
    $q_34err = "Απαιτούμενο πεδίο";
  } else {
    $q_34 = test_input($_POST["q_34"]);
  }
  
  if (empty($_POST["q_35"])) {
    $q_35err = "Απαιτούμενο πεδίο";
  } else {
    $q_35 = test_input($_POST["q_35"]);
  }
    
  if (empty($_POST["q_36"])) {
    $q_36err = "Απαιτούμενο πεδίο";
  } else {
    $q_36 = test_input($_POST["q_36"]);
  }

  if (empty($_POST["q_37"])) {
    $q_37err = "Απαιτούμενο πεδίο";
  } else {
    $q_37 = test_input($_POST["q_37"]);
  }

  if (empty($_POST["q_38"])) {
    $q_38err = "Απαιτούμενο πεδίο";
  } else {
    $q_38 = test_input($_POST["q_38"]);
  }
  if (empty($_POST["q_39"])) {
    $q_39err = "Απαιτούμενο πεδίο";
  } else {
    $q_39 = test_input($_POST["q_39"]);
  }
    
  if (empty($_POST["q_40"])) {
    $q_40err = "Απαιτούμενο πεδίο";
  } else {
    $q_40 = test_input($_POST["q_40"]);
  }

  if (empty($_POST["q_41"])) {
    $q_41err = "Απαιτούμενο πεδίο";
  } else {
    $q_41 = test_input($_POST["q_41"]);
  }
	
  if (empty($_POST["q_42"])) {
    $q_42err = "Απαιτούμενο πεδίο";
  } else {
    $q_42 = test_input($_POST["q_42"]);
  }
}	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include_once 'includes/dbh.inc.php';

$user_id = $_SESSION["user"];	

	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
	
if (isset($q_1, $q_2, $q_3, $q_4, $q_5, $q_6, $q_7, $q_8, $q_9, $q_10, $q_11, $q_12, $q_13, $q_14, $q_15, $q_16, $q_17, $q_18, $q_19, $q_20, $q_21, $q_22, $q_23, $q_24, $q_25, $q_26, $q_27, $q_28, $q_29, $q_30, $q_31, $q_32, $q_33, $q_34, $q_35, $q_36, $q_37, $q_38, $q_39, $q_40, $q_41, $q_42))	{
	
$sql = "INSERT INTO questionnaire (user_id, q_1, q_2, q_3, q_4, q_5, q_6, q_7, q_8, q_9, q_10, q_11, q_12, q_13, q_14, q_15, q_16, q_17, q_18, q_19, q_20, q_21, q_22, q_23, q_24, q_25, q_26, q_27, q_28, q_29, q_30, q_31, q_32, q_33, q_34, q_35, q_36, q_37, q_38, q_39, q_40, q_41, q_42)
    VALUES ('$user_id','$q_1', '$q_2', '$q_3', '$q_4', '$q_5', '$q_6', '$q_7', '$q_8', '$q_8', '$q_10', '$q_11', '$q_12', '$q_13', '$q_14', '$q_15', '$q_16', '$q_17', '$q_18', '$q_19', '$q_20', '$q_21', '$q_22', '$q_23', '$q_24', '$q_25', '$q_26', '$q_27', '$q_28', '$q_29', '$q_30', '$q_31', '$q_32', '$q_33', '$q_34', '$q_35', '$q_36', '$q_37', '$q_38', '$q_39', '$q_40', '$q_41', '$q_42');";
	
mysqli_query($conn, $sql);	
//echo "Success";
	
//echo $user_id, $q_1, $q_2, $q_3, $q_4, $q_5, $q_6, $q_7, $q_8, $q_9, $q_10, $q_11, $q_12, $q_13, $q_14, $q_15, $q_16, $q_17, $q_18, $q_19, $q_20, $q_21, $q_22, $q_23, $q_24, $q_25, $q_26, $q_27, $q_28, $q_29, $q_30, $q_31, $q_32, $q_33, $q_34, $q_35, $q_36, $q_37, $q_38, $q_39, $q_40, $q_41, $q_42;
	
header("Location: ../end.php?userinput=success");
	
}
else {
echo "<div style='display: table-cell;width:100vw;height:40px;background-color:#FF0800;text-align:center;vertical-align: middle;'>Συμπληρώστε τα απαιτούμενα πεδία και επαναυποβάλετε την φόρμα</div>";
}
}
?>
	
<body id="body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="evaluationform">
<div id="data">
	
	<label for="cars">1. Ξοδεύω πολύ τον ελεύθερο χρόνο μου κάνοντας δραστηριότητες που σχετίζονται με τη μουσική.</label>

<select multiple size="1" name="q_1" form="evaluationform" value=1 selected="selected">
	
		<option <?php if($q_1 == '1'){echo("selected");}?> value="1">Διαφωνώ</option>
		<option <?php if($q_1 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_1 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_1 == '4'){echo("selected");}?> value="4">Ούτε διαφωνώ ούτε συμφωνώ</option>
		<option <?php if($q_1 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_1 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_1 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
</select>
	<span class="error"> <?php echo $q_1err;?></span>
	<label for="cars">2. Μερικές φορές επιλέγω μουσική που μπορεί να προκαλέσει ρίγη στη σπονδυλική στήλη μου</label>
	<select multiple size="1" name="q_2" form="evaluationform">
		<option <?php if($q_2 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_2 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_2 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_2 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_2 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_2 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_2 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_2err;?></span>
	
		<label for="cars">3. Μου αρέσει να γράφω για θέματα σχετικά με μουσική, όπως για παράδειγμα σε blogs και φόρουμ.</label>
	<select multiple size="1" name="q_3" form="evaluationform">
		<option <?php if($q_3 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_3 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_3 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_3 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_3 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_3 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_3 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_3err;?></span>
	
		<label for="cars">4. Εάν κάποιος αρχίσει να τραγουδά ένα τραγούδι που δεν ξέρω, συνήθως μπορώ να συμμετάσχω.
</label>
	<select multiple size="1" name="q_4" form="evaluationform">
		<option <?php if($q_4 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_4 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_4 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_4 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_4 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_4 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_4 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_4err;?></span>
		<label for="cars">5. Είμαι σε θέση να κρίνω αν κάποιος είναι καλός τραγουδιστής ή όχι.
</label>
	<select multiple size="1" name="q_5" form="evaluationform">
		<option <?php if($q_5 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_5 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_5 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_5 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_5 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_5 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_5 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_5err;?></span>
		<label for="cars">6. Συνήθως ξέρω πότε ακούω ένα τραγούδι για πρώτη φορά</label>
	<select multiple size="1" name="q_6" form="evaluationform">
		<option <?php if($q_6 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_6 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_6 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_6 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_6 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_6 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_6 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_6err;?></span>
		<label for="cars">7. Μπορώ να τραγουδήσω ή να παίξω μουσική από τη μνήμη.</label>
	<select multiple size="1" name="q_7" form="evaluationform">
		<option <?php if($q_7 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_7 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_7 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_7 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_7 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_7 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_7 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_7err;?></span>
		<label for="cars">8. Με ενδιαφέρουν τα μουσικά στυλ που δεν είμαι εξοικειωμένος/η και θέλω να μάθω περισσότερα για αυτά.</label>
	<select multiple size="1" name="q_8" form="evaluationform">
		<option <?php if($q_8 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_8 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_8 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_8 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_8 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_8 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_8 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_8err;?></span>
		<label for="cars">9. Μουσικά έργα σπάνια μου προκαλούν συναισθήματα.</label>
	<select multiple size="1" name="q_9" form="evaluationform">
		<option <?php if($q_9 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_9 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_9 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_9 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_9 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_9 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_9 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_9err;?></span>
		<label for="cars">10. Μπορώ να πιάσω τις σωστές νότες όταν τραγουδάω μαζί με μια ηχογράφηση/ με το τραγούδι.
</label>
	<select multiple size="1" name="q_10" form="evaluationform">
 		<option <?php if($q_10 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_10 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_10 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_10 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_10 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_10 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_10 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_10err;?></span>
		<label for="cars">11. Δυσκολεύομαι να εντοπίσω λάθη στην ερμηνεία ενός τραγουδιού ακόμα κι αν γνωρίζω τη μελωδία.</label>
	<select multiple size="1" name="q_11" form="evaluationform">
 		<option <?php if($q_11 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_11 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_11 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_11 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_11 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_11 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_11 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_11err;?></span>
		<label for="cars">12. Μπορώ να συγκρίνω και να συζητήσω διαφορές μεταξύ δύο ερμηνειών ή εκδοχών του ίδιου μουσικού κομματιού.</label>
	<select multiple size="1" name="q_12" form="evaluationform">
 		<option <?php if($q_12 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_12 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_12 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_12 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_12 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_12 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_12 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_12err;?></span>
		<label for="cars">13. Έχω πρόβλημα να αναγνωρίσω ένα γνωστό τραγούδι όταν παίζεται με διαφορετικό τρόπο ή ερμηνεύεται από διαφορετικό τραγουδιστή.</label>
	<select multiple size="1" name="q_13" form="evaluationform">
 		<option <?php if($q_13 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_13 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_13 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_13 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_13 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_13 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_13 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_13err;?></span>
		<label for="cars">14. Δεν έχω δεχτεί ποτέ συγχαρητήρια για το ταλέντο μου ως μουσικός ερμηνευτής.</label>
	<select multiple size="1" name="q_14" form="evaluationform">
 		<option <?php if($q_14 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_14 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_14 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_14 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_14 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_14 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_14 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_14err;?></span>
		<label for="cars">15. Συχνά διαβάζω ή ψάχνω στο Διαδίκτυο για πράγματα που σχετίζονται με τη μουσική.
</label>
	<select multiple size="1" name="q_15" form="evaluationform">
 		<option <?php if($q_15 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_15 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_15 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_15 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_15 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_15 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_15 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_15err;?></span>
		<label for="cars">16. Συχνά επιλέγω μουσική για να με παρακινήσει ή να με ενθουσιάσει.</label>
	<select multiple size="1" name="q_16" form="evaluationform">
 		<option <?php if($q_16 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_16 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_16 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_16 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_16 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_16 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_16 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_16err;?></span>
		<label for="cars">17. Δεν μπορώ να τραγουδήσω αρμονικά όταν κάποιος τραγουδά μια οικεία μελωδία.</label>
	<select multiple size="1" name="q_17" form="evaluationform">
		<option <?php if($q_17 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_17 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_17 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_17 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_17 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_17 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_17 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_17err;?></span>
		<label for="cars">18. Μπορώ να καταλάβω πότε  κάποιος/α τραγουδά ή παίζει εκτός χρόνου με το ρυθμό.</label>
	<select multiple size="1" name="q_18" form="evaluationform">
	 	<option <?php if($q_18 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_18 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_18 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_18 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_18 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_18 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_18 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_18err;?></span>
			<label for="cars">19. Μπορώ να αναγνωρίσω τι κάνει ξεχωριστό  ένα συγκεκριμένο μουσικό κομμάτι.</label>
	<select multiple size="1" name="q_19" form="evaluationform">
 		<option <?php if($q_19 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_19 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_19 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_19 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_19 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_19 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_19 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_19err;?></span>
			<label for="cars">20. Μπορώ να μιλήσω για τα συναισθήματα που μου προκαλεί ένα κομμάτι μουσικής.</label>
	<select multiple size="1" name="q_20" form="evaluationform">
 		<option <?php if($q_20 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_20 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_20 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_20 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_20 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_20 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_20 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_20err;?></span>
			<label for="cars">21. Δεν ξοδεύω μεγάλο μέρος του διαθέσιμου εισοδήματός μου στη μουσική.</label>
	<select multiple size="1" name="q_21" form="evaluationform">
		<option <?php if($q_21 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_21 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_21 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_21 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_21 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_21 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_21 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_21err;?></span>
			<label for="cars">22. Μπορώ να καταλάβω πότε οι άνθρωποι τραγουδούν ή παίζουν φάλτσα.</label>
	<select multiple size="1" name="q_22" form="evaluationform">
		<option <?php if($q_22 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_22 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_22 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_22 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_22 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_22 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_22 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_22err;?></span>
			<label for="cars">23. Όταν τραγουδάω, δεν έχω ιδέα αν είμαι φάλτσος ή όχι.</label>
	<select multiple size="1" name="q_23" form="evaluationform">
		<option <?php if($q_23 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_23 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_23 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_23 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_23 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_23 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_23 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_23err;?></span>
			<label for="cars">24. Η μουσική είναι εθισμός για μένα - δεν θα μπορούσα να ζήσω χωρίς αυτήν.</label>
	<select multiple size="1" name="q_24" form="evaluationform">
		<option <?php if($q_24 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_24 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_24 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_24 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_24 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_24 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_24 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_24err;?></span>
			<label for="cars">25. Δεν μου αρέσει να τραγουδάω δημόσια γιατί φοβάμαι ότι θα τραγουδήσω λάθος νότες.</label>
	<select multiple size="1" name="q_25" form="evaluationform">
		<option <?php if($q_25 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_25 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_25 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_25 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_25 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_25 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_25 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_25err;?></span>
			<label for="cars">26. Όταν ακούω ένα κομμάτι μουσικής, συνήθως αναγνωρίζω το είδος του.</label>
	<select multiple size="1" name="q_26" form="evaluationform">
		<option <?php if($q_26 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_26 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_26 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_26 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_26 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_26 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_26 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_26err;?></span>
				<label for="cars">27. Δεν θεωρώ τον εαυτό μου μουσικό.</label>
	<select multiple size="1" name="q_27" form="evaluationform">
		<option <?php if($q_27 == '1'){echo("selected");}?> value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_27 == '2'){echo("selected");}?> value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_27 == '3'){echo("selected");}?> value="3">Διαφωνώ</option>
		<option <?php if($q_27 == '4'){echo("selected");}?> value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_27 == '5'){echo("selected");}?> value="5">Συμφωνώ</option>
		<option <?php if($q_27 == '6'){echo("selected");}?> value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_27 == '7'){echo("selected");}?> value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_27err;?></span>
				<label for="cars">28. Παρακολουθώ τη νέα μουσική που συναντώ (π.χ. νέους καλλιτέχνες ή ηχογραφήσεις)</label>
	<select multiple size="1" name="q_28" form="evaluationform">
		<option <?php if($q_28 == '1'){echo("selected");}?>value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_28 == '2'){echo("selected");}?>value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_28 == '3'){echo("selected");}?>value="3">Διαφωνώ</option>
		<option <?php if($q_28 == '4'){echo("selected");}?>value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_28 == '5'){echo("selected");}?>value="5">Συμφωνώ</option>
		<option <?php if($q_28 == '6'){echo("selected");}?>value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_28 == '7'){echo("selected");}?>value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_28err;?></span>
				<label for="cars">29. Αφού ακούσω ένα νέο τραγούδι δύο ή τρεις φορές, συνήθως μπορώ να το τραγουδήσω μόνος μου.</label>
	<select multiple size="1" name="q_29" form="evaluationform">
		<option <?php if($q_29 == '1'){echo("selected");}?>value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_29 == '2'){echo("selected");}?>value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_29 == '3'){echo("selected");}?>value="3">Διαφωνώ</option>
		<option <?php if($q_29 == '4'){echo("selected");}?>value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_29 == '5'){echo("selected");}?>value="5">Συμφωνώ</option>
		<option <?php if($q_29 == '6'){echo("selected");}?>value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_29 == '7'){echo("selected");}?>value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_29err;?></span>
				<label for="cars">30. Χρειάζεται να ακούσω μια νέα μελωδία μόνο μία φορά και μπορώ να το τραγουδήσω μερικές ώρες αργότερα.</label>
	<select multiple size="1" name="q_30" form="evaluationform">
		<option <?php if($q_30 == '1'){echo("selected");}?>value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_30 == '2'){echo("selected");}?>value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_30 == '3'){echo("selected");}?>value="3">Διαφωνώ</option>
		<option <?php if($q_30 == '4'){echo("selected");}?>value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_30 == '5'){echo("selected");}?>value="5">Συμφωνώ</option>
		<option <?php if($q_30 == '6'){echo("selected");}?>value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_30 == '7'){echo("selected");}?>value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_30err;?></span>
				<label for="cars">31. Η μουσική μπορεί να προκαλέσει αναμνήσεις που έχω από προηγούμενους ανθρώπους και μέρη.</label>
	<select multiple size="1" name="q_31" form="evaluationform">
		<option <?php if($q_31 == '1'){echo("selected");}?>value="1">Διαφωνώ απόλυτα</option>
		<option <?php if($q_31 == '2'){echo("selected");}?>value="2">Διαφωνώ πολύ</option>
		<option <?php if($q_31 == '3'){echo("selected");}?>value="3">Διαφωνώ</option>
		<option <?php if($q_31 == '4'){echo("selected");}?>value="4">Ούτε συμφωνώ ούτε διαφωνώ</option>
		<option <?php if($q_31 == '5'){echo("selected");}?>value="5">Συμφωνώ</option>
		<option <?php if($q_31 == '6'){echo("selected");}?>value="6">Συμφωνώ πολύ</option>
		<option <?php if($q_31 == '7'){echo("selected");}?>value="7">Συμφωνώ απόλυτα</option>
	</select>
	<span class="error"> <?php echo $q_31err;?></span>
				<p>32. Έχω ασχοληθεί σε τακτική, καθημερινή βάση με την πρακτική ενός μουσικού οργάνου (συμπεριλαμβανομένης της φωνής) για 	<select  name="q_32" form="evaluationform">
		<option <?php if($q_32 == '1'){echo("selected");}?>value="1">0</option>
		<option <?php if($q_32 == '2'){echo("selected");}?>value="2">1</option>
		<option <?php if($q_32 == '3'){echo("selected");}?>value="3">2</option>
		<option <?php if($q_32 == '4'){echo("selected");}?>value="4">3</option>
		<option <?php if($q_32 == '5'){echo("selected");}?>value="5">4-5</option>
		<option <?php if($q_32 == '6'){echo("selected");}?>value="6">6-9</option>
		<option <?php if($q_32 == '7'){echo("selected");}?>value="7">10 ή περισσότερα</option>
	</select> χρόνια</p>
<span class="error"> <?php echo $q_32err;?></span>
	
				<label for="cars">33. Στο αποκορύφωμα του ενδιαφέροντός μου, εξασκούμουν <select name="q_33" form="evaluationform">
		<option <?php if($q_33 == '1'){echo("selected");}?>value="1">0</option>
		<option <?php if($q_33 == '2'){echo("selected");}?>value="2">0,5</option>
		<option <?php if($q_33 == '3'){echo("selected");}?>value="3">1</option>
		<option <?php if($q_33 == '4'){echo("selected");}?>value="4">1,5</option>
		<option <?php if($q_33 == '5'){echo("selected");}?>value="5">2</option>
		<option <?php if($q_33 == '6'){echo("selected");}?>value="6">3-4</option>
		<option <?php if($q_33 == '7'){echo("selected");}?>value="7">5 ή περισσότερες</option>
	</select> ώρες την ημέρα στο κύριο όργανο μου.
					<span class="error"> <?php echo $q_33err;?></span>
</label>

	
				<P>34. Έχω παρακολουθήσει <select name="q_34" form="evaluationform">
		<option <?php if($q_34 == '1'){echo("selected");}?> value="1">0</option>
		<option <?php if($q_34 == '2'){echo("selected");}?> value="2">1</option>
		<option <?php if($q_34 == '3'){echo("selected");}?> value="3">2</option>
		<option <?php if($q_34 == '4'){echo("selected");}?> value="4">3</option>
		<option <?php if($q_34 == '5'){echo("selected");}?> value="5">4-6</option>
		<option <?php if($q_34 == '6'){echo("selected");}?> value="6">7-10</option>
					<option <?php if($q_33 == '11 ή περισσότερες'){echo("selected");}?> value="7">11 ή περισσότερες</option> </select>ζωντανές μουσικές εκδηλώσεις ως ακροατής τους τελευταίους δώδεκα μήνες (live-streaming).</p><span class="error"> <?php echo $q_34err;?></span>
	<p>35. Έχω επίσημη εκπαίδευση στη μουσική θεωρία για <select name="q_35" form="evaluationform">
		<option <?php if($q_35 == '1'){echo("selected");}?> value="1">0</option>
		<option <?php if($q_35 == '2'){echo("selected");}?> value="2">0,5</option>
		<option <?php if($q_35 == '3'){echo("selected");}?> value="3">1</option>
		<option <?php if($q_35 == '4'){echo("selected");}?> value="4">2</option>
		<option <?php if($q_35 == '5'){echo("selected");}?> value="5">3</option>
		<option <?php if($q_35 == '6'){echo("selected");}?> value="6">4-6</option>
		<option <?php if($q_35 == '7'){echo("selected");}?> value="7">7 ή περισσότερα</option>
	</select> χρόνια.<span class="error"> <?php echo $q_35err;?></span>
</p>	
	
				<p>36. Είχα <select name="q_36" form="evaluationform">
		<option <?php if($q_36 == '1'){echo("selected");}?> value="1">0</option>
		<option <?php if($q_36 == '2'){echo("selected");}?> value="2">0,5</option>
		<option <?php if($q_36 == '3'){echo("selected");}?> value="3">1</option>
		<option <?php if($q_36 == '4'){echo("selected");}?> value="4">2</option>
		<option <?php if($q_36 == '5'){echo("selected");}?> value="5">3-5</option>
		<option <?php if($q_36 == '6'){echo("selected");}?> value="6">6-9</option>
		<option <?php if($q_36 == '7'){echo("selected");}?> value="7">10 ή περισσότερα</option>
	</select> χρόνια επίσημης εκπαίδευσης σε ένα μουσικό όργανο (συμπεριλαμβανομένης της φωνής) κατά τη διάρκεια της ζωής μου.</p><span class="error"> <?php echo $q_36err;?></span>
	
	<p>37. Μπορώ να παίξω <select name="q_37" form="evaluationform">
		<option <?php if($q_37 == '1'){echo("selected");}?> value="1">0</option>
		<option <?php if($q_37 == '2'){echo("selected");}?> value="2">1</option>
		<option <?php if($q_37 == '3'){echo("selected");}?> value="3">2</option>
		<option <?php if($q_37 == '4'){echo("selected");}?> value="4">3</option>
		<option <?php if($q_37 == '5'){echo("selected");}?> value="5">4</option>
		<option <?php if($q_37 == '6'){echo("selected");}?> value="6">5</option>
		<option <?php if($q_37 == '7 ή περισσότερα'){echo("selected");}?> value="7">6 ή περισσότερα</option>
	</select> μουσικά όργανα.</p><span class="error"> <?php echo $q_37err;?></span>
	
	<p>38. Ακούω  συγκεντρωμένος/η μουσική για 	<select name="q_38" form="evaluationform">
		<option <?php if($q_38 == '1'){echo("selected");}?> value="1">0-15 λεπτά</option>
		<option <?php if($q_38 == '2'){echo("selected");}?> value="2">15-30 λεπτά</option>
		<option <?php if($q_38 == '3'){echo("selected");}?> value="3">30-60 λεπτά</option>
		<option <?php if($q_38 == '4'){echo("selected");}?> value="4">60-90 λεπτά</option>
		<option <?php if($q_38 == '5'){echo("selected");}?> value="5">2 ώρες</option>
		<option <?php if($q_38 == '6'){echo("selected");}?> value="6">2-3 ώρες</option>
		<option <?php if($q_38 == '7'){echo("selected");}?> value="7">4 ώρες ή περισσότερο</option>
	</select> την ημέρα.</p><span class="error"> <?php echo $q_38err;?></span>
	<p>39. Το όργανο που παίζω καλύτερα (συμπεριλαμβανομένης της φωνής) είναι <input style="width:auto;border-radius:0;" type="text" name="q_39" form="evaluationform"></p><span class="error"> <?php echo $q_39err;?></span>
	
	<p>Επαγγελματική κατάσταση 
		<select name="q_40" form="evaluationform">
		<option <?php if($q_40 == '1'){echo("selected");}?> value="1">Ακόμη στο σχολείο</option>
		<option <?php if($q_40 == '2'){echo("selected");}?> value="2">Στο πανεπιστήμιο</option>
		<option <?php if($q_40 == '3'){echo("selected");}?> value="3">Σε πλήρης απασχόλησης δουλειά</option>
		<option <?php if($q_40 == '4'){echo("selected");}?> value="4">Σε μερικής απασχόλησης δουλειά</option>
		<option <?php if($q_40 == '5'){echo("selected");}?> value="5">Αυτοαπασχολούμενος</option>
		<option <?php if($q_40 == '6'){echo("selected");}?> value="6">Οικιακά / γονέας πλήρους απασχόλησης</option>
		<option <?php if($q_40 == '7'){echo("selected");}?> value="7">Άνεργος/η</option>
		<option <?php if($q_40 == '8'){echo("selected");}?> value="8">Συνταξιούχος</option>
	</select>
		<span class="error"> <?php echo $q_40err;?></span>
	</p>
	<p>Ποιο είναι το μουσικό είδος που ακούτε κυρίως; (σημειώστε μόνο ένα κουτί) <select name="q_41" form="evaluationform">
		<option value="" disabled selected hidden></option>
		<option <?php if($q_41 == '1'){echo("selected");}?> value="1">Ροκ/Ποπ</option>
		<option <?php if($q_41 == '2'){echo("selected");}?> value="2">Τζαζ</option>
		<option <?php if($q_41 == '3'){echo("selected");}?> value="3">Κλασσική μουσική</option>
	</select>
	<span class="error">* <?php echo $q_41err;?></span>
	</p>
	<p>Ποιο είναι το εκπαιδευτικό σας επίπεδο;
		<select name="q_42" form="evaluationform">
		<option <?php if($q_42 == '1'){echo("selected");}?> value="1">Μαθητής/τριας</option>
		<option <?php if($q_42 == '2'){echo("selected");}?> value="2">Απόφοιτος/η λυκείου</option>
		<option <?php if($q_42 == '3'){echo("selected");}?> value="3">Φοιτητής/ρια</option>
		<option <?php if($q_42 == '4'){echo("selected");}?> value="4">Απόφοιτος/η πανεπιστημίου</option>
		<option <?php if($q_42 == '5'){echo("selected");}?> value="5">Μεταπτυχιακός/η φοιτητής/ρια</option>
		</select></p><span class="error"> <?php echo $q_42err;?></span>
</div>
  <input type="submit" name="submit" value="Submit">  

</form>
</body>

</htmal>
