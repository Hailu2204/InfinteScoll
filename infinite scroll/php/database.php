<?php 


$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "is";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName );

if (!$conn){
    die("Database connection Failed");
}

?>