<?php
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if(isset($_POST['submit_row']))
{
$stmt=$conn->prepare("INSERT INTO passenger(passengerForename,passengerSurname,passengerAge,passengerContNum,wheelchair,specialNeeds)VALUES(?,?,?,?,?,?)");
$stmt->bind_param("ssiiis",$passengerForename,$passengerSurname,$passengerAge,$passengerContNum,$wheelchair,$specialNeeds);  

if($_SERVER["REQUEST_METHOD"]=="POST"){
 $passengerForename=$_POST['passengerForename'];
 $passengerSurname=$_POST['passengerSurname'];
 $passengerAge=$_POST['passengerAge'];
 $passengerContNum=$_POST['passengerContNum'];
 $wheelchair=$_POST['wheelchair'];
 $specialNeeds=$_POST['specialNeeds'];
 
 for($i=0;$i<count($passengerForename);$i++)
 {
  if($passengerForename[$i]!="" && $passengerSurname[$i]!="" && $passengerAge[$i]!="" && $passengerContNum[$i]!="" && $wheelchair[$i]!=""&& $specialNeedseeds[$i]!="")
  {
   mysqli_query($conn,"insert into passenger values('$passengerForename[$i]','$passengerSurname[$i]','$passengerAge[$i]','$passengerContNum[$i]','$wheelchair[$i]','$specialNeeds[$i]')");	 
  }



echo "<h2>Your Booking:</h2>";
echo "$passengerForename"; $passengerSurname;
echo "<br>";
echo $passengerAge;
echo "<br>";
echo $passengerContNum;
echo "<br>";
echo $wheelchair;
echo "<br>";
echo $specialneeds;
 }
}
}
