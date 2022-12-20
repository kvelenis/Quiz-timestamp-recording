<?php 

include_once 'dbh.inc.php';

$user_id = $_SESSION["user"];
$arrayData = $_REQUEST['arrayData'];
$heardbefore = $_REQUEST['data'];
//echo $user_id;
//echo $arrayData;
$sql = "UPDATE users SET heardbefore_intro = '$heardbefore' WHERE user_id = $user_id;";
mysqli_query($conn, $sql);

for ($i=0; $i<count($arrayData); $i++) {
$sql = "INSERT INTO timestamp_intro_audio (user_id) VALUES ('$user_id')";
//echo $sql;
mysqli_query($conn, $sql);
}

$sql = "SELECT MIN(click_id) AS min FROM timestamp_intro_audio WHERE user_id = $user_id;";

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
for ($i=$lowestclickID; $i <= ($lowestclickID + count($arrayData)); $i++ ) {
  $sql = "UPDATE timestamp_intro_audio SET click_timestamp = $arrayData[$m] WHERE user_id= $user_id AND click_id = $i;";
  mysqli_query($conn, $sql);
  $m++;

  $sql = "UPDATE timestamp_intro_audio SET click_number = $n WHERE user_id= $user_id AND click_id = $i;";
  mysqli_query($conn, $sql);
  //echo "DONE ";
  $n++;
}

$sql = "SELECT MAX( user_id ) AS max FROM `users`;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$largestID = $row['max'];
//Create User Cookie
$cookie_name = "user";
$cookie_value = $largestID;

//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//echo $_COOKIE[$cookie_name];

$rand = rand(1,3);
$cookie2_name = "timeofappereance1";
$cookie3_name = "timeofappereance2";
$cookie4_name = "timeofappereance3";
if ($rand == 1) {
	
$cookie2_value = "1";
$cookie3_value = "0";
$cookie4_value = "0";
setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//header("Location: ../main.php?userinput=success");
echo "main";
}

elseif ($rand == 2) {
	
$cookie2_value = "0";
$cookie3_value = "1";
$cookie4_value = "0";
setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//header("Location: ../main2.php?userinput=success");
echo "main2";
}

elseif ($rand == 3) {
	
$cookie2_value = "0";
$cookie3_value = "0";
$cookie4_value = "1";
setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//header("Location: ../main3.php?userinput=success");
echo "main3";
};



?>


