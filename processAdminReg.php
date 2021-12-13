<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 

$stmt=$conn->prepare("INSERT INTO staff(staffForename,staffSurname,staffUsername,password)VALUES(?,?,?,?)");
$stmt->bind_param("ssss",$staffForename,$staffSurname,$staffUsername,$password);
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
$staffForename = $_POST['staffForename'];
$staffSurname = $_POST['staffSurname'];
$staffUsername = $_POST['staffUsername'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
 

 // checks if username already exists
     $sql = "SELECT * FROM staff WHERE staffUsername='$staffUsername'";
     $results = mysqli_query($conn,$sql);?>

<div class="container">
<div class="row">
  <div class="leftcolumn">
  <div class="card" > 
      
     <?php 
    if(mysqli_num_rows($results)>0){
        echo "Sorry, username already taken, try again.";
        } 
            else{
    
      // sanitise information-->
  if($password1 == $password2)  
  {
     $hash = password_hash($password1, PASSWORD_DEFAULT); 
   
   // echo "Congratulations $custUsername, you have signed up!  Your customer ID is $customerID.";
 
   //Insert to Mysqli Query 
    //use the sanitised inputs  
$sql = "INSERT INTO staff(staffForename,staffSurname,staffUsername,password)VALUES 
('$staffForename','$staffSurname','$staffUsername','$hash')";          
  $result = mysqli_query($conn, $sql); 
  
 //$reg->execute();
echo '<br>Welcome!<br>';
$stmt=$conn->prepare("SELECT staffID FROM staff WHERE staffUsername = ?");
$stmt->bind_param("s",$staffUsername);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($staffID);
$stmt->fetch();
echo '<br>Your staff ID is: '.$staffID.'<br><br>';
echo 'You can now log in with your username ('.$staffUsername.') and password!';
 } 
  
 
        else{
              echo 'Sorry, check your details and try again.';
               } 
       
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
         <a href="adminRegistration.php" class="button-primary">Back to register</a><br><br>
 <a href="adminLogin.php" class="button-primary">Here to login</a>
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
