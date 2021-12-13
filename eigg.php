<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
?>

<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="css/style.css" rel="stylesheet"/>
  <style>
    
  
 </style>   
  </head>
         
    <body>
   
<!--styling the initial wording -->
<div class="container">
 
    <div class="card">
      <h2 class="h2">Sail from Eigg</h2>   
        <div class="card">
      <p>We sail to the Islands of Muck and Rum from Eigg.  </p>
       <table>
  <tr>
    <th>Monday<br>Eigg and Muck<br> 20th May-21st Oct</th>
    <th>Tuesday<br>Eigg and Rum<br> 20th May-21st Oct</th>
    <th>Wednesday<br>Eigg and Muck<br> 20th May-21st Oct</th>
    <th>Thursday<br>Rum<br> 20th May-21st Oct</th>
    <th>Friday<br>Eigg and Muck<br> 20th May-21st Oct</th>
    <th>Saturday<br>Eigg and Rum<br> Jun, Jul & Aug only</th>
    <th>Sunday<br>Eigg and Muck<br> Jun, Jul & Aug only</th>
  </tr>
  <tr>
    <td>Morar dep 11.00<br>Eigg arr 12.00<br>Eigg dep 12.30<br>Muck arr 13.30<br>Muck dep 15.30<br>Eigg arr 16.00<br>Eigg dep 16.30<br>Morar arr 17.30</td>
    
    <td>Morar dep 11.00<br>Eigg arr 12.00<br>Eigg dep 12.30<br>Rum arr 13.30<br>Rum dep 15.30<br>Eigg arr 16.00<br>Eigg dep 16.30<br>Morar arr 17.30</td>
    
       <td>Morar dep 11.00<br>Eigg arr 12.00<br>Eigg dep 12.30<br>Muck arr 13.30<br>Muck dep 15.30<br>Eigg arr 16.00<br>Eigg dep 16.30<br>Morar arr 17.30</td>
       
         <td>Morar dep 11.00<br>Rum arr 12.45<br>Rum dep 15.45<br>Morar arr 17.30</td> 
    
     <td>Morar dep 11.00<br>Eigg arr 12.00<br>Eigg dep 12.30<br>Muck arr 13.30<br>Muck dep 15.30<br>Eigg arr 16.00<br>Eigg dep 16.30<br>Morar arr 17.30</td> 
     
        <td>Morar dep 11.00<br>Eigg arr 12.00<br>Eigg dep 12.30<br>Rum arr 13.30<br>Rum dep 15.30<br>Eigg arr 16.00<br>Eigg dep 16.30<br>Morar arr 17.30</td>
        
          <td>Morar dep 11.00<br>Eigg arr 12.00<br>Eigg dep 12.30<br>Muck arr 13.30<br>Muck dep 15.30<br>Eigg arr 16.00<br>Eigg dep 16.30<br>Morar arr 17.30</td> 
   
  </tr>
  <tr>
    <td><b>Time Ashore</b><br>4.5 hours on Eigg<br>OR<br>2.5 hours on Muck</td>
    <td><b>Time Ashore</b><br>5 hours on Eigg<br>OR<br>2 hours on Rum</td>
      <td><b>Time Ashore</b><br>4.5 hours on Eigg<br>OR<br>2.5 hours on Muck</td>
        <td><b>Time Ashore</b><br>3 hours on Rum
          <td><b>Time Ashore</b><br>4.5 hours on Eigg<br>OR<br>2.5 hours on Muck</td>
           <td><b>Time Ashore</b><br>5 hours on Eigg<br>OR<br>2 hours on Rum</td>
                  
      <td><b>Time Ashore</b><br>4.5 hours on Eigg<br>OR<br>2.5 hours on Muck</td>       
   </table>
    <br>
    <br>  
      <h3 class="h3sail">Sailing Routes</h3>
    
   <img class="imgroute" src="images/redoneroutes.png" alt="Sailing routes" style="width:90%"> 
      <h3>Adult Fares</h3>
      <p> Return adult fares from Eigg to:</p>
   <!-- comment -->
   <p>Island of Muck &emsp;&emsp;&emsp;&emsp;£10.00</p>
   <p>Island of Rum &nbsp;&emsp;&emsp;&emsp;&emsp;£16.00</p>
      <h3>Child Fares (all Islands)</h3>
      <p>Return childrens' fares from Eigg to:</p>
      <p>2 years and under &nbsp;&emsp;&emsp;&emsp;Free</p>
           <p>3 - 10 years &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;£10.00</p>
      <p>11-16 years&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;£13.00</p>
     
      <p>(Single fares are available on request)</p>
        <p><a href="book.php">BOOK HERE </a> (please register and/or login)</p>
       <br>
      
      <p><a href="morarguide.php">Morar at a glance</a></p>
      <p><a href="eiggguide.php">Eigg at a glance</a></p>
      <p><a href="muckguide.php">Muck at a glance</a></p>
    </div>
  </div>
 </div> 


<?php
include'footer.php';