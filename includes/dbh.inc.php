<?php

session_start();

//write here the prerequisite values
$dbServername = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_errno()) {
  echo mysqli_connect_error();
  exit;
} else {
  echo "Connected successfully";
}
?>
