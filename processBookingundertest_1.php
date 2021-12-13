<?php
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if(!isset($_SESSION['custUsername'])){

if(isset($_POST['submit'])){
}
}
      
$stmt=$conn->prepare("INSERT INTO booking(dateOfSailing,day,adultPassengerCount,infantPassengerCount,childPassengerCount,teenPassengerCount,"
        . "wheelchair,passengerForename,passengerSurname,passengerAge,passengerContNum,specialNeeds)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssiiiiississ",$dateOfSailing,$day,$adultPassengerCount,$infantPassengerCount,$childPassengerCount,$teenPassengerCount,$wheelchair,
        $passengerForename,$passengerSurname,$passengerAge,$passengerContNum,$specialNeeds);  
 


?>
<!DOCTYPE html>
<html>
    <head>
         
    <body>    
<!--styling the initial wording -->
<div class="container">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Your Booking</h2> 
        <div class="card">
     
          
 
<?php



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
           . "'$dateOfSailing',$day','$adultPassengerCount','$infantPassengerCount','$childPassengerCount','$teenPassengerCount','$wheelchair',"
           ."'$passengerForename','$passengerSurname','$passengerAge','$passengerContNum','$specialNeeds')";
            $result = mysqli_query( $sql); 
    
    //$count=1;
$mysqli_query="Select * from booking ";
$result = mysqli_query($conn,$mysqli_query);

while($row = mysqli_fetch_assoc($result)) { ?>

Booking ID: <?php    $row["bookingID"];?><br>
Date of travel:   <?php echo $row["dateOfSailing"]; ?><br>
Day route:        <?php echo $row["day"]; ?><br>
No of adult tickets: <?php echo $row["adultPassengerCount"]; ?> <br>   
No of infant tickets:           <?php echo $row["infantPassengerCount"]; ?><br>
No of child tickets:        <?php echo $row["childPassengerCount"]; ?><br>
No of teen tickets:       <?php echo $row["teenPassengerCount"]; ?> <br>   
Wheelchair user:      <?php echo $row["wheelchair"]; ?><br>
Passenger name:        <?php echo $row["passengerForename"].' '.$row["passengerSurname"]; ?><br>
Passenger age:           <?php echo $row["passengerAge"]; ?><br>
Special requirements:        <?php echo $row["specialNeeds"]; ?><br>
Booked on:  <?php echo $row["timestamp"]; ?><br> <br>    
    
  <?php          
      
}
}


                      



?>
       
           </div> 
        </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
include'footer.php';
