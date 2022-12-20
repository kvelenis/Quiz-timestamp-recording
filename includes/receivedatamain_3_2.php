<?php

include_once 'dbh.inc.php';

$user_id = $_SESSION["user"];
$arrayData = $_REQUEST['arrayData10'];
$heardbefore = $_REQUEST['data'];

echo $heardbefore;
echo count($arrayData);

for ($i=0; $i<count($arrayData); $i++) {
$sql = "INSERT INTO timestamp_3_2 (user_id) VALUES ('$user_id')";
//echo $sql;
mysqli_query($conn, $sql);
}



$sql = "SELECT MIN(click_id) AS min FROM timestamp_3_2 WHERE user_id = $user_id;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$lowestclickID = $row['min'];


//echo $arrayData[0];
//echo $lowestclickID;
echo $lowestclickID;
//echo $row[1];
//echo $arrayData[0];
$m = 0;
$n = 1;
for ($i=$lowestclickID; $i<=($lowestclickID + count($arrayData)); $i++ ) {
  $sql = "UPDATE timestamp_3_2 SET click_timestamp = $arrayData[$m] WHERE user_id= $user_id AND click_id = $i;";
  mysqli_query($conn, $sql);
  $m++;

  $sql = "UPDATE timestamp_3_2 SET click_number = $n WHERE user_id= $user_id AND click_id = $i;";
  mysqli_query($conn, $sql);
  echo "DONE ";
  $n++;
}


//echo $sql;

//foreach($arrayData as $data)
//{
    //echo $data;
//    $sql = "UPDATE first_sample_timestamp SET timestamp = $data WHERE user_id= $user_id;";

//    mysqli_query($conn, $sql);

//}
