<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$serverName ="localhost:3306";
$dbUsername ="debian-sys-maint";
$dbPassword ="1bCc3jsz7FwLmkia";
$dbName="sweatish_db"; // Variable should match the name of our database in phpMyAdmin

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);     // Built-in function allowing connexion between MySQL and the client system.


//condition for connection error handling
// die() function prints a message and exits the current script.

if(!$conn){                                                     // IF No Connection
    die("Connection failed : " . mysqli_connect_error());       // echo "connection failed message + error details.
}