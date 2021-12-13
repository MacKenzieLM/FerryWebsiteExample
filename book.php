<?php

session_start();
if(!isset($_SESSION['custUsername'])){

}

require 'header.php';
include 'DB.php';

?>

<!doctype html>
    <head>
    <link type="text/css" rel="stylesheet"/>
  <style>
    
  .buttonBook {
    background-color: #379ACE;
  color: black;
  padding: 1px 10px;
   border: 1px solid #000;
  border-radius: 4px;
  cursor: pointer;
   font-size: 17px;
    }  
  /* submit hover */
input[type=submit]:hover {
  background-color: #bdb8ad;
  color: #000;
}    

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #000;
  text-align: left;
  padding: 8px;
  background-color: #fff;
}

tr:nth-child(even) {
  background-color: #dddddd;
}  
    
 </style>   
  </head>


  <div class="container">
    <div class="card">
      <h2 class="h2">Book Cruise</h2> 
      <div class="card">
<body>  
    
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
    
    
    
      <form name="booking" action="processBooking.php" method="post">
        
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script>
       $(function() {
               $("#dateOfSailing").datepicker({ dateFormat: "yy MM, dd" }).val();
       });
   </script> 
    Click for calendar in text-box: <input type="text" id="dateOfSailing" name="dateOfSailing"  size="30"/>       
    <br>
    <br>
    <label for="changeEvent">Select day return and route:</label>
    <select id="changeExample" name="day">
        <option value="">Select day return and route</option>
      
        <option value="Monday">Monday - Morar to Eigg and Muck 11am - 17.30pm</option>
        <option value="Tuesday">Tuesday - Morar to Eigg and Rum 11am - 17.30pm</option>
        <option value="Wednesday">Wednesday - Morar to Eigg and Muck 11am - 17.30pm</option>
        <option value="Thursday">Thursday - Morar to Rum only 11am - 17.50pm</option>
        <option value="Friday">Friday - Morar to Eigg and Muck 11am - 17.30pm</option>
        <option value="Saturday">Saturday - Morar to Eigg and Rum 11am - 17.30pm</option>
        <option value="Sunday">Sunday - Morar to Eigg and Muck 11am - 17.30pm</option>
    </select>
<br><br>
 <label for="bookedBy">Booked by:</label>
<input type="text" id="bookedBy" name="bookedBy" placeholder="Please enter full name"  />
      <br><br>
      <label for="changeEvent">Select number of passengers (17 years and over):</label>
  
  <select id="changeEvent" name="adultPassengerCount">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
 </select>

     
 
 <br><br>
      <label for="changeEvent">Select number of infant passengers aged 2 years and under:</label>
  
   <select id="changeEvent" name="infantPassengerCount">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
 </select>

 

 <br><br>
      <label for="changeEvent">Select number of child passengers (ages 3-10):</label>
  
    <select id="changeEvent" name="childPassengerCount">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
 </select>
  
   <br><br>
      <label for="changeEvent">Select number of teen passengers (ages 11-16):</label>
  
     <select id="changeEvent" name="teenPassengerCount">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
 </select> 

     
    <br><br>
      <label for="changeEvent">Does any passenger use a wheelchair? (Max accommodate 1 user):</label>
    <select id="changeEvent" name="wheelchair">
      <option value="0">0</option>
       <option value="1">1</option>   
    </select>  
      
     <br />
	<br />
	
	<form name="add_name" id="add_name" method="post">
	<div class="table-responsive">
	<table id="dynamicAdd">
	<tr>
	<td><input type="text" name="passengerForename" placeholder="Enter forename" class="form-control name_list" /></td>
        <td><input type="text" name="passengerSurname" placeholder="Enter surname" class="form-control name_list" /></td>
	 <td><input type="number" name="passengerAge" placeholder="Enter age" class="form-control name_list" /></td>
          <td><input type="text" name="passengerContNum" placeholder="Enter contact number" class="form-control name_list" /></td>
 
       
        <td><label>Enter special requirements here:</label> 
            <textarea name="specialNeeds" placeholder="Enter special requirements" class="form-control name_list"> </textarea>
       <td><br><!-- comment --> 
      
           <button type="button" name="add" id="add" class="btn btn-success">Add another passenger</button></td>
	</tr>
	</table>
	</div>
	</body>
     	<script>
$(document).ready(function(){

     var i=1;
     $('#add').click(function(){
         i++;
	$('#dynamicAdd').append('<tr id="row'+i+'"><td><input type="text" name="passengerForename[]" placeholder="Enter forename" class="form-control name_list" /></td>\n\
<td><input type="text" name="passengerSurname[]" placeholder="Enter surname" class="form-control name_list" /></td>\n\
<td><input type="number" name="passengerAge[]" placeholder="Enter age" class="form-control name_list" /></td>\n\
<td><input type="text" name="passengerContNum[]" placeholder="Enter contact number" class="form-control name_list" /></td>\n\
\n\ <td><label>Enter special requirements here:</label>\n\
\n\ <textarea name="specialNeeds[]" placeholder="Enter special requirements" class="form-control name_list"</td> </textarea>\n\
\n\
\n\
<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

});
	
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
	$('#row'+button_id+'').remove();
	});
});
</script>
 <br> 
   <input type="submit" id="loginbtn" name="submit"/> 
  </body> 
     </div>
   
  </div>
      </div>


<?php
include'footer.php';

