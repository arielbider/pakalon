<?php

// MySQL
// include 'db_connection.php';
// $conn = openConn();
// // echo "Connected Successfully";
//
// $shipur = $_GET["shipur"];
// $shimur = $_GET["shimur"];
// $class = $_GET["class"];
// $unique_id = $_GET["unique_id"];
// $name = $_GET["name"];
//
// $results = $conn->query("SELECT class from points where unique_id='".$unique_id."' and class=".$class);
//
// if($results->num_rows > 0){
//     $results = $conn->query("UPDATE points SET unique_id='".$unique_id."', name='".$name."', class='".$class."', shipur='".$shipur."', shimur='".$shimur."' WHERE unique_id='".$unique_id."' and class='".$class."'");
// } else {
//   $results = $conn->query("INSERT INTO points(unique_id, name, class, shipur) VALUES ('".$unique_id."','".$name."','".$class."','".$shipur."')");
// }

include 'db_connection.php';
$conn = openConn();
// echo "Connected Successfully";

$shipur = $_GET["shipur"];
$shimur = $_GET["shimur"];
$class = $_GET["class"];
$unique_id = $_GET["unique_id"];
$name = $_GET["name"];

$results = pg_query_params('SELECT class FROM points WHERE unique_id=$1 AND class=$2', array($unique_id, $class));

if(pg_num_rows($results) > 0){
  $updateResult = pg_query_params('UPDATE points SET shipur=$3, shimur=$4 WHERE unique_id=$1 AND class=$2', array($unique_id, $class, $shipur, $shimur));
} else {
  $insertResult = pg_query_params('INSERT INTO points(unique_id, name, class, shipur) VALUES ($1, $2, $3, $4)', array($unique_id, $name, $class, $shipur));
}

?>
