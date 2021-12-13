<?php
// starts user session
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 

// prepared statement and bind parameter to insert into database
$stmt=$conn->prepare("INSERT INTO commreg(coName,coAddress1,coAddress2,coTown,coPostcode,coContNum,coEmail,coPassword)VALUES(?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssiss",$coName,$coAddress1,$coAddress2,$coTown,$coPostcode,$coContNum,$coEmail,$coPassword);
//$stmt->execute();
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
      <h2 class="h2">Confirmation of Register</h2>   
    
      <br>
    
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$coName = $_POST['coName'];
$coAddress1 = $_POST['coAddress1'];
$coAddress2 = $_POST['coAddress2'];
$coTown = $_POST['coTown'];
$coPostcode = $_POST['coPostcode'];
$coContNum = $_POST['coContNum'];
$coEmail = $_POST['coEmail'];
$coPassword1 = $_POST['coPassword1'];
$coPassword2 = $_POST['coPassword2'];


 // checks if username already exists
   //  $sql = "SELECT * FROM commreg WHERE coUsername='$coUsername'";
   //  $results = mysqli_query($conn,$sql);?>

<div class="container">
<div class="row">
  <div class="leftcolumn">
  <div class="card" > 
      
     <?php 
    //if(mysqli_num_rows($results)>0){
     //   echo "Sorry, username already taken, try again.";
       // } 
        //    else{
    
      // sanitise information-->
  if($coPassword1 == $coPassword2)  
  {
     $hash = password_hash($coPassword1, PASSWORD_DEFAULT); 
   
   // echo "Congratulations $custUsername, you have signed up!  Your customer ID is $customerID.";
 
   //Insert to Mysqli Query 
    //use the sanitised inputs  
$sql = "INSERT INTO commreg(coName,coAddress1,coAddress2,coTown,coPostcode,coContNum,coEmail,coPassword1)VALUES 
('$coName','$coAddress1','$coAddress2','$coTown','$coPostcode','$coContNum','$coEmail','$hash')";          
  $result = mysqli_query($conn, $sql); 
  
 //$reg->execute();
echo '<br>Done!<br>';
$stmt=$conn->prepare("SELECT comRegId FROM commreg WHERE coName = ?");
$stmt->bind_param("s",$coName);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($comRegId);
$stmt->fetch();
echo '<br>Your company customer ID is: '.$comRegId.'<br><br>';
echo 'You can now log in with your company name ('.$coName.') and password!';
 } 
  
 
        else{
              echo 'Sorry, check your details and try again.';
               } 
       
   }  



// security measures to test the user's input
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="container">
<div class="row">
  <div class="leftcolumn">
    <div class="card">  
         <br><!-- comment -->
         <br>
         <a href="register.php" class="button-primary">Back to register</a><br><br>
 <a href="login.php" class="button-primary">Here to login</a>
         <br>
         <br>
        
         <br> 
         <br>
         </div>
           </div>
       </div>
 </div>
    </div>
  </div>
     </div>
 </div>
         <?php

// close database connection
 $conn->close();   


include'footer.php';