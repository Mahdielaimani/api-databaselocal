<?php

// echo"Hello";

// $var = $_GET["name"]; // name est le nom de request 
// echo "<br/>";
// echo $var;
// print_r($_GET);
// $name=$_POST["name"];
// echo $name;
// print_r($_POST);

// to conncet with database

include "connect.php";

$stmt =$con->prepare("SELECT * FROM users"); //in prepare i write requet SQL way bach atji data
$stmt->execute();
$users =$stmt->fetchAll(PDO::FETCH_ASSOC);
 // fetch for one user - fecthColumn for one Column -fetchAll for //
//  echo "<pre>";
// print_r($users);
// echo "</pre>";

// $count =$stmt->rowCount(); // to verifeier if fetch data work 
// echo $count;

//fetch katjib data
echo json_encode($users); // haka an9der nconnecte my code php to any langauge // this page api