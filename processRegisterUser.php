<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 



$stmt=$conn->prepare("INSERT INTO register(custForename,custSurname,address1,address2,town,postcode,number,email,custUsername,password)VALUES(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssisss",$custForename,$custSurname,$address1,$address2,$town,$postcode,$number,$email,$custUsername,$password);
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
$custForename = $_POST['custForename'];
$custSurname = $_POST['custSurname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$town = $_POST['town'];
$postcode = $_POST['postcode'];
$number = $_POST['number'];
$email = $_POST['email'];
$custUsername = $_POST['custUsername'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];


 // checks if username already exists
     $sql = "SELECT * FROM register WHERE custUsername='$custUsername'";
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
$sql = "INSERT INTO register(custForename,custSurname,address1,address2,town,postcode,number,email,custUsername,password)VALUES 
('$custForename','$custSurname','$address1','$address2','$town','$postcode','$number','$email','$custUsername','$hash')";          
  $result = mysqli_query($conn, $sql); 
  
 //$reg->execute();
echo '<br>Welcome!<br>';
$stmt=$conn->prepare("SELECT customerID FROM register WHERE custUsername = ?");
$stmt->bind_param("s",$custUsername);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($customerID);
$stmt->fetch();
echo '<br>Your customer ID is: '.$customerID.'<br><br>';
echo 'You can now log in with your username ('.$custUsername.') and password!';
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