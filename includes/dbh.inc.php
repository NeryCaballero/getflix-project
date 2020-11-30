<?php 

$serverName ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName="sweatish_db"; // Variable should match the name of our database in phpMyAdmin

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);     // Built-in function allowing connexion between MySQL and the client system.


//condition for connection error handling
// die() function prints a message and exits the current script.

if(!$conn){                                                     // IF No Connection
    die("Connection failed : " . mysqli_connect_error());       // echo "connection failed message + error details.
}