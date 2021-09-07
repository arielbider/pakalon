<?php

// MySQL
// include 'db_connection.php';
// $conn = openConn();
// // echo "Connected Successfully";
//
// $classNumber = $_GET["class"];
//
// $results = $conn->query("SELECT * from points where class=".$classNumber);
//
// //Initialize array variable
// $dbdata = array();
//
// //Fetch into associative array
// while ($row = $results->fetch_assoc())  {
//   $dbdata[]=$row;
// }
//
// //Print array in JSON format
// echo json_encode($dbdata);

include 'db_connection.php';
$conn = openConn();
// echo "Connected Successfully";

$classNumber = $_GET["class"];

$results = pg_query_params('SELECT * FROM points WHERE class=$1', array($classNumber));

//Initialize array variable
$dbdata = array();

//Fetch into associative array
while ($row = pg_fetch_assoc($results))  {
  $dbdata[]=$row;
}

//Print array in JSON format
echo json_encode($dbdata);

?>
