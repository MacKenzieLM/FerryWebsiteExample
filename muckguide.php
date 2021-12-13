<?php
session_start();    // this makes a new session
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    

 <!--styling the page title -->   
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Muck at a glance</h2>
      <br>
        <div class="card">
       <img class="imgmuck" src="images/muck.jpg" alt="Muck" style="width:90%"> 
      <p> Click the link to go to Isle of Muck's tourist web page where you'll find further information.</p>
    
      
      <p><a href="http://www.isleofmuck.com/">Isle of Muck</a></p>
      <p><a href="morar.php">Back to 'Sail from Morar'</a></p>
           
    </div>
  </div>
</div>
<?php
include'footer.php';