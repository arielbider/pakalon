<?php

// MySQL
// include 'db_connection.php';
// $conn = openConn();
// // echo "Connected Successfully";
//
// $classExists = true;
// $classNumber = 0;
// $name = $_GET["name"];
//
// while($classExists){
//   $digits = 7;
//   $classNumber = rand(pow(10, $digits-1), pow(10, $digits)-1);
//   $results = $conn->query("SELECT * from classes where class=".$classNumber);
//   if($results->num_rows == 0){
//     $classExists = false;
//   }
// }
//
// $conn->query("INSERT INTO classes(class, creator_name) VALUES ('".$classNumber."', '".$name."')");
// echo $classNumber;

include 'db_connection.php';
$conn = openConn();
// echo "Connected Successfully";

$classExists = true;
$classNumber = 0;
$name = $_GET["name"];

while($classExists){
  $digits = 7;
  $classNumber = rand(pow(10, $digits-1), pow(10, $digits)-1);
  $results = pg_query_params('SELECT * FROM classes WHERE class=$1', array($classNumber));
  if(pg_num_rows($results) == 0){
    $classExists = false;
  }
}

pg_query_params('INSERT INTO classes(class, creator_name) VALUES ($1, $2)', array($classNumber, $name));
echo $classNumber;

?>
