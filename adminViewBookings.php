<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if(!isset($_SESSION['custUsername'])){
    
}
require 'header.php';
include 'DB.php';
?>
 
<!DOCTYPE html>
<html>
    <head>
         
   
    <style>      
    table { 
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    
    td, th {
    border: 2px solid #000;
    text-align: left;
    padding: 8px;
    }

    
    </style>  
    <body>  
<!--styling the initial wording -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Admin View Bookings</h2> 
      
    
 


    
  
      <table>

<?php
    
echo "<table style='border: solid 2px black;'>"; // this brings the table to screen
    
echo "<tr><th>Booking ID</th><th>Date of travel</th><th>Route day</th><th>Adult tickets</th><th>Infant tickets</th> "
. "<th>Child tickets</th><th>Teen tickets</th><th>Wheel chair</th><th>Pass- enger forename</th>"
    . "<th>Pass- enger surname</th><th>Pass- enger Age</th><th>Pass- enger contact number</th><th>Special Require- ments</th>"    
        . "<th>Edit</th> <th>Delete</th></tr>"; // this brings the headings to screen



$count=1;
$mysqli_query="Select * from booking ";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { ?>
    <tr><td><?php echo $row["bookingID"]; ?></td><td><?php echo $row["dateOfSailing"];?></td><td><?php echo $row["day"];?></td><td><?php echo $row["adultPassengerCount"];?></td>
       <td><?php echo $row["infantPassengerCount"]; ?></td><td><?php echo $row["childPassengerCount"];?></td><td><?php echo $row["day"];?></td><td><?php echo $row["adultPassengerCount"];?></td> 
       <td><?php echo $row["passengerForename"]; ?></td><td><?php echo $row["passengerSurname"];?></td><td><?php echo $row["passengerAge"];?></td><td><?php echo $row["passengerContNum"];?></td> 
        <td><?php echo $row["specialNeeds"];?></td> 
       <td><a href="updateBooking.php?id=<?php echo $row["bookingID"]; ?>">Edit</a></td><td align="center"><a href="deleteBooking.php?id=<?php echo $row["bookingID"]; ?>">Delete</a></td></tr>

        <?php
        $count++; 
} ?>
      </table>
  </div>
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
    </body>
</html>

<?php // including the css for the footer
include 'footer.php'; 
?>
      
      
    