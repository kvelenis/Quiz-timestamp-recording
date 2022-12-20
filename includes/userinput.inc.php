<?php

include_once 'dbh.inc.php';

$age = $_POST['age'];
$gender = $_POST['gender'];
$educationLevel = $_POST['educationLevel'];
$country = $_POST['country'];
$musicPreferences = $_POST['musicPreferences'];

$sql = "INSERT INTO users (user_age, user_gender, user_educationlevel, user_country, user_musicpreferences)
    VALUES ('$age', '$gender', '$educationLevel', '$country', '$musicPreferences');";

mysqli_query($conn, $sql);


$sql = "SELECT MAX( user_id ) AS max FROM `users`;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$largestID = $row['max'];
echo $largestID;



//Create Cookie
$cookie_name = "user";
$cookie_value = $largestID;

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

echo $_COOKIE[$cookie_name];

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

header("Location: ../main.php?userinput=success");
}

elseif ($rand == 2) {
	
$cookie2_value = "0";
$cookie3_value = "1";
$cookie4_value = "0";
setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day

header("Location: ../main2.php?userinput=success");
//echo "second time";
}

elseif ($rand == 3) {
	
$cookie2_value = "0";
$cookie3_value = "0";
$cookie4_value = "1";
setcookie($cookie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie4_name, $cookie4_value, time() + (86400 * 30), "/"); // 86400 = 1 day

header("Location: ../main3.php?userinput=success");
//echo "third time";
};



?>
