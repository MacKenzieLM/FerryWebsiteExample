<?php

$servername = "localhost";
#$servername = "comp-server.uhi.ac.uk";
$username = "root";
#$db_username="19016480";
$password = "";
#$db_password="sql19016480";     
$database = "ferry";

// create connection
#$conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if(!$conn){
 die("Database connection failed: " . mysqli_connect_error());

}
