<?php
$servername = "135.181.138.97";
$database = "ldamwujn_admin";
$username = "ldamwujn_test";
$password = "gShQ)&3WZHeE";
 
// Create connection
 
$con = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$con) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}

?>