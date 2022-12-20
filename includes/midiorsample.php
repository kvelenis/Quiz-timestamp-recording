<?php
include_once 'dbh.inc.php';

$sql = "INSERT INTO users (user_age, user_gender, user_educationlevel, user_country, user_musicpreferences)
    VALUES (0, 0, 0, 0, 0);"; 

mysqli_query($conn, $sql);

$sql = "SELECT MAX( user_id ) AS max FROM `users`;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$largestID = $row['max'];

$cookie_name = "user";
$cookie_value = $largestID;
$_SESSION["user"] = $largestID;
//echo $_SESSION["user"];
//echo  $largestID;
//setcookie($cookie_name, $largestID, time() + (86400 * 30), "/", $_SERVER['HTTP_HOST']); // 86400 = 1 day
//echo $_COOKIE["user"];
//echo $user_id = $cookie_value;

//echo $largestID;
check($largestID, $conn);
function check($user_id, $conn){ 
    if($user_id % 2 == 0){ 
		$sql = "UPDATE users SET audioormidi = 0 WHERE user_id = $user_id;";
		mysqli_query($conn, $sql);
	
        echo "even";  
    } 
    else{ 
		$sql = "UPDATE users SET audioormidi = 1 WHERE user_id = $user_id;";
		mysqli_query($conn, $sql);

        echo "odd"; 
    } 
} 






?>