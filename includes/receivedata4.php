<?php

include_once 'dbh.inc.php';

$user_id = $_SESSION["user"];
$arrayData = $_REQUEST['arrayData4'];
//echo count($arrayData);
//echo "FUCKKKK";
//echo $user_id;
//echo count($arrayData);

for ($i=0; $i<count($arrayData); $i++) {
$sql = "INSERT INTO timestamp_1_4 (user_id) VALUES ('$user_id');";
//echo $sql;
mysqli_query($conn, $sql);
}



$sql = "SELECT MIN(click_id) AS min FROM timestamp_1_4 WHERE user_id = $user_id;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$lowestclickID = $row['min'];


//echo $arrayData[0];
//echo $lowestclickID;
//echo $lowestclickID;
//echo $row[1];
//echo $arrayData[0];
$m = 0;
$n = 1;
for ($i=$lowestclickID; $i<($lowestclickID + count($arrayData)); $i++ ) {
  $sql = "UPDATE timestamp_1_4 SET click_timestamp = $arrayData[$m] WHERE user_id= $user_id AND click_id = $i;";
  mysqli_query($conn, $sql);
  $m++;

  $sql = "UPDATE timestamp_1_4 SET click_number = $n WHERE user_id= $user_id AND click_id = $i;";
  mysqli_query($conn, $sql);
  //echo "DONE ";
  $n++;
}
//echo $user_id;
if($user_id % 2 == 0){ 
 	$cookie2_name = "timeofappereance1";
	$cookie3_name = "timeofappereance2";
	$cookie4_name = "timeofappereance3";

	$cookie2_value = "1";
	setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	//echo $_COOKIE["timeofappereance1"];
	//echo $_COOKIE["timeofappereance2"];
	//echo $_COOKIE["timeofappereance3"];



	if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 1 && $_COOKIE["timeofappereance3"] == 0) {
		$cookie2_value = "1";	
		$cookie3_value = "1";
		$cookie4_value = "1";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		echo "main3";
	}	

	else if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 0 && $_COOKIE["timeofappereance3"] == 1)  {
		$cookie2_value = "1";	
		$cookie3_value = "1";
		$cookie4_value = "1";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		echo "main2";
	}

	else if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 1 && $_COOKIE["timeofappereance3"] == 1) {

		echo "end";
	}

	else if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 0 && $_COOKIE["timeofappereance3"] == 0) { 

		$rand = rand(2,3);
		if ($rand == 2) {
		$cookie2_value = "1";
		$cookie3_value = "1";
		$cookie4_value = "0";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		//header("Location: ../main2.php?userinput=success");
		echo "main2";
		}

		elseif ($rand == 3) {
		$cookie2_value = "1";
		$cookie3_value = "0";
		$cookie4_value = "1";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		//header("Location: ../main3.php?userinput=success");
		echo "main3";

		}

	}
    } 
else{ 
	$cookie2_name = "timeofappereance1";
	$cookie3_name = "timeofappereance2";
	$cookie4_name = "timeofappereance3";

	$cookie2_value = "1";
	setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	//echo $_COOKIE["timeofappereance1"];
	//echo $_COOKIE["timeofappereance2"];
	//echo $_COOKIE["timeofappereance3"];



	if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 1 && $_COOKIE["timeofappereance3"] == 0) {
		$cookie2_value = "1";	
		$cookie3_value = "1";
		$cookie4_value = "1";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		echo "mainm3";
	}	

	else if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 0 && $_COOKIE["timeofappereance3"] == 1)  {
		$cookie2_value = "1";	
		$cookie3_value = "1";
		$cookie4_value = "1";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		echo "mainm2";
	}

	else if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 1 && $_COOKIE["timeofappereance3"] == 1) {

		echo "end";
	}

	else if ($_COOKIE["timeofappereance1"] == 1 && $_COOKIE["timeofappereance2"] == 0 && $_COOKIE["timeofappereance3"] == 0) { 

		$rand = rand(2,3);
		if ($rand == 2) {
		$cookie2_value = "1";
		$cookie3_value = "1";
		$cookie4_value = "0";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		//header("Location: ../main2.php?userinput=success");
		echo "mainm2";
		}

		elseif ($rand == 3) {
		$cookie2_value = "1";
		$cookie3_value = "0";
		$cookie4_value = "1";
		setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		//header("Location: ../main3.php?userinput=success");
		echo "mainm3";

		}

	}
 
    } 

//echo $sql;

//foreach($arrayData as $data)
//{
    //echo $data;
//    $sql = "UPDATE first_sample_timestamp SET timestamp = $data WHERE user_id= $user_id;";

//    mysqli_query($conn, $sql);

//}
