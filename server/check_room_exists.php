<?php

// MySQL
// include 'db_connection.php';
// $conn = openConn();
// // echo "Connected Successfully";
//
// $classNumber = $_GET["classId"];
//
// $results = $conn->query("SELECT * from classes where class=".$classNumber);
// if($results->num_rows == 0){
//   echo false;
// } else {
//   echo true;
// }

include 'db_connection.php';
$conn = openConn();
// echo "Connected Successfully";

$classNumber = $_GET["classId"];

$results =  pg_query_params($conn, 'SELECT * FROM classes WHERE class=$1', array($classNumber));
if(pg_num_rows($results) == 0){
  echo false;
} else {
  echo true;
}
?>
