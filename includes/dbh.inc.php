<?php 

$serverName ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName="sweatish_db"; // should match name in phpmyadmin

$conn =mysqli_connect($serverName,$dbUsername, $dbPassword,$dbName);// build-in function alllowing connexion btw Mysql and the client system


//condition for connexion error handling
if(!$conn){

}