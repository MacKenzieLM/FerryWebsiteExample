<?php

require( 'DB.php');      // this connects to database
//require ('header.php');      // this brings the header css into script 

$bookingID=$_REQUEST['bookingID'];
$query = "DELETE FROM booking WHERE bookingID=$bookingID"; 
$result = mysqli_query($conn,$query);
header("Location: viewYourBookings.php"); 
?>

