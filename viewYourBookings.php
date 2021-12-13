<?php

require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if (!isset($_SESSION['custUsername'])) {
    

    }
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8"> 
    </head> 
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
  <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">View Customer Bookings</h2>   
    

      <table>

<?php
    
echo "<table style='border: solid 2px black;'>"; // this brings the table to screen
    
echo "<tr><th>Booking id</th><th>Date Of Sailing</th><th>Sailing Route Day</th><th>Adult Passenger Count</th><th>Infant Passenger Count<th>Child Passenger Count</th><th>Teen Passenger Count</th><th>Wheelchair</th><th>Special Request</th></th></th> <th>Edit</th> <th>Delete</th></tr>"; // this brings the headings to screen

$count=1;
$mysqli_query="Select * from booking where bookingID='?'";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { ?>
    <tr><td><?php echo $row["bookingID"]; ?></td><td><?php echo $row["dateOfSailing"]; ?><td><?php echo $row["day"]; ?></td>
        <td><?php echo $row["adultPassengerCount"]; ?></td><td><?php echo $row["infantPassengerCount"]; ?></td><td><?php echo $row["childPassengerCount"]; ?></td><td><?php echo $row["teenPassengerCount"]; ?></td><td><?php echo $row["wheelchair"]; ?></td><td><?php echo $row["specialNeeds"]; ?></td></td><td >
            <a href="updateBooking.php?id=<?php echo $row["bookingID"]; ?>">Edit</a></td><td align="center"><a href="deleteBooking.php?id=<?php echo $row["bookingID"]; ?>">Delete</a></td></tr>
<?php  $count++; 
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
if(!confirm("Do you want to delete your booking?")){
    e.preventDefault();
}
}
</script>
    </body>
</html>

<?php // including the css for the footer
include 'footer.php'; 
?>