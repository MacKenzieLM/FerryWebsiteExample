<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if(!isset($_SESSION['custUsername'])){

}

   
?>
<div class="row">
  <div class="leftcolumn">
  <div class="card">

  <div class="col-md-push-9">
                
    <h2>Your Booking</h2>  
   
        
        <?php             
$stmt=$conn->prepare("INSERT INTO booking(dateOfSailing,day,adultPassengerCount,"
        . "infantPassengerCount,childPassengerCount,teenPassengerCount,"
        . "wheelchair,passengerForename,passengerSurname,passengerAge,"
        . "passengerContNum,specialNeeds)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssiiiiississ",$dateOfSailing,$day,$adultPassengerCount,
        $infantPassengerCount,$childPassengerCount,$teenPassengerCount,$wheelchair,
        $passengerForename,$passengerSurname,$passengerAge,$passengerContNum,$specialNeeds);  

if($_SERVER["REQUEST_METHOD"]=="POST"){
   $dateOfSailing=$_POST['dateOfSailing'];
    $day=$_POST['day'];
    $adultPassengerCount=$_POST['adultPassengerCount'];
    $infantPassengerCount=$_POST['infantPassengerCount'];
     $childPassengerCount=$_POST['childPassengerCount'];
    $teenPassengerCount=$_POST['teenPassengerCount'];
    $wheelchair=$_POST['wheelchair'];
       $passengerForename=$_POST['passengerForename'];
    $passengerSurname=$_POST['passengerSurname'];
    $passengerAge=$_POST['passengerAge'];
    $passengerContNum=$_POST['passengerContNum'];
    $specialNeeds=$_POST['specialNeeds'];
    
    
    
   $sql = "Insert into booking(dateOfSailing,day,adultPassengerCount,infantPassengerCount,childPassengerCount,teenPassengerCount,wheelchair,"
           . "passengerForename,passengerSurname,passengerAge,passengerContNum,specialNeeds)values"
           . "'$dateOfSailing','$day','$adultPassengerCount','$infantPassengerCount','$childPassengerCount','$teenPassengerCount','$wheelchair',"
           . "'$passengerForename','$passengerSurname','$passengerAge','$passengerContNum','$specialNeeds')";
   $result = mysqli_query($conn, $sql);
  
  ?>   <table> 
   


    
echo "<table style='border: solid 2px black;'>"; // this brings the table to screen
    
echo "<tr><th>Booking id</th><th>Date Of Sailing</th><th>Sailing Route Day</th><th>Adult Passenger Count</th><th>Infant Passenger Count<th>Child Passenger Count</th><th>Teen Passenger Count</th><th>Wheelchair</th>
 <tr><th>Passenger Forename</th><th>Passenger Surname</th><th>Passenger Age</th><th>Passenger Contact Number</th><th>Special Request</th></th></th><th>Edit</th> <th>Delete</th></tr>"; // this brings the headings to screen
<?php
$count=1;
$mysqli_query="Select * from booking where bookingID='?'";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { ?>
    <tr><td><?php echo $row["bookingID"]; ?></td><td><?php echo $row["dateOfSailing"]; ?><td><?php echo $row["day"]; ?></td>
        <td><?php echo $row["adultPassengerCount"]; ?></td><td><?php echo $row["infantPassengerCount"]; ?></td><td><?php echo $row["childPassengerCount"]; ?></td><td><?php echo $row["teenPassengerCount"]; ?></td><td><?php echo $row["wheelchair"]; ?></td>
       <td><?php echo $row["passengerForename"]; ?></td><td><?php echo $row["passengerSurname"]; ?></td> <td><?php echo $row["passengerAge"]; ?></td><td><?php echo $row["passengerContNum"]; ?></td><td><?php echo $row["specialNeeds"]; ?></td>
            <a href="updateBooking.php?id=<?php echo $row["bookingID"]; ?>">Edit</a></td><td align="center"><a href="deleteBooking.php?id=<?php echo $row["bookingID"]; ?>">Delete</a></td></tr>
<?php  $count++; 
}} ?>
   
   
   
                              
 
   

