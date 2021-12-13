<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if(!isset($_SESSION['custUsername'])){

}
 
$stmt=$conn->prepare("UPDATE booking SET dateOfSailing=?,day=?,adultPassengerCount=?,infantPassengerCount=?,childPassengerCount=?,teenPassengerCount=?,wheelchair=?,"
           . "passengerForename=?,passengerSurname=?,passengerAge=?,passengerContNum=?,specialNeeds=? WHERE bookingID=?");
$stmt->bind_param("ssiiiiississi",$dateOfSailing,$day,$adultPassengerCount,$infantPassengerCount,$childPassengerCount,$teenPassengerCount,$wheelchair,
        $passengerForename,$passengerSurname,$passengerAge,$passengerContNum,$specialNeeds,$bookingID);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $bookingID=test_input($_POST['bookingID']);
    $dateOfSailing=test_input($_POST['dateOfSailing']);
    $day=test_input($_POST['day']);
    $adultPassengerCount=test_input($_POST['adultPassengerCount']);
    $infantPassengerCount=test_input($_POST['infantPassengerCount']);
     $childPassengerCount=test_input($_POST['childPassengerCount']);
    $teenPassengerCount=test_input($_POST['teenPassengerCount']);
    $wheelchair=test_input($_POST['wheelchair']);
       $passengerForename=test_input($_POST['passengerForename']);
    $passengerSurname=test_input($_POST['passengerSurname']);
    $passengerAge=test_input($_POST['passengerAge']);
    $passengerContNum=test_input($_POST['passengerContNum']);
    $specialNeeds=test_input($_POST['specialNeeds']);
    $stmt->execute();
    
    if($stmt->affected_rows>0){
        header("Location:updateBooking.php");
    }else{
        echo "something went wrong";
// $count=1;
$query="Select * from booking where bookingID='$bookingID'";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<!doctype html> 
<tr><td><?php echo $row["bookingID"]; ?><td><?php echo $row["custUsername"]; ?><td ><a href="updateBooking.php?id=<?php echo $row["bookingID"]; ?>">Edit</a></td><td align="center"><a href="deleteBooking.php?id=<?php echo $row["bookingID"]; ?>">Delete</a></td></tr>
<?php  $count++; 

}
     
  
        if($result == $mysqli_query){
    }
    while($row = $result->fetch_assoc()){
        $bookingID = $_POST["bookingID"];
       $sql="SELECT * FROM booking WHERE ";
       
    }
    }
}




    
    
  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$stmt->close();
$conn->close();       
 ?>  



<!DOCTYPE html>
<html>
    <head>
         
    <body>
     
<!--styling the initial wording -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Update Booking</h2> 
      
 <p> Please update your details in the boxes below and press update.</p>
  </div>
  </div>
 </div>  
<div class="container">
<div class="card">
<div class="row">
     
    <!-- form element which allows user to input data -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
   
 <input type="hidden" name="bookingID" value="<?php echo $bookingID;?>">
          
     <form name="booking" action="processBookingundertest.php" method="post">
          
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script>
       $(function() {
               $("#calendar").datepicker({ dateFormat: "yy MM, dd" }).val();
       });
   </script>  


    
  Click for calendar in text-box: <input type="text" name="calendar" id="calendar" size="30"/>       
   

        <br>
        <br>
     <label for="changeEvent">Select day return and route:</label>
    <select id="changeExample" name="day">
        <option value="route">Select day return and route</option>
      
        <option value="Monday">Monday - Morar to Eigg and Muck</option>
        <option value="Tuesday">Tuesday - Morar to Eigg and Rum</option>
        <option value="Wednesday">Wednesday - Morar to Eigg and Muck</option>
        <option value="Thursday">Thursday - Morar to Rum only</option>
        <option value="Friday">Friday - Morar to Eigg and Muck</option>
        <option value="Saturday">Saturday - Morar to Eigg and Rum</option>
        <option value="Sunday">Sunday - Morar to Eigg and Muck</option>
    </select>
<br><br>
 
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
 </form>
    </body>     
    </div>
  </div>
        <script>  
//gets all the elements with the class name confirmDelete
        var elements = document.getElementsByClassName("confirmDelete");
        
        for(var i = 0; i < elements.length; i++){
//        for each instance, add an event listener
//        listen for click, activate confirmDelete function,
elements[i].addEventListener("click", confirmDelete);
}

function confirmDelete(e){
// prompt the user if they want to cancel, stop the navigation
if(!confirm("Do you want to delete this booking?")){
    e.preventDefault();
}
}



</script>
<?php
include'footer.php';

