<?php
session_start();    // this makes a new session
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    

 <!--styling the page title -->   
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Welcome to Alba Wildlife Cruises</h2>
      
 <div class="rightcolumn">
    <div class="card">
      <img class="" src="images/boat.png" alt="boat" >
     
    </div>
      </div>
        <div class="card">
              <!-- Introduction to website -->
      <p>Welcome to our website.  Here you will find information about our services.</p>
    
      <p>We sail from Morar or Eigg to selected destinations - please see our sailing</p> 
      <p>routes for more details.</p>  
      
      </div>
  </div>

   
  
  
</div>
      
<?php
include'footer.php';
