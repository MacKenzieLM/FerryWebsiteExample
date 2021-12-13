<?php
 session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 

$stmt = $conn->prepare("INSERT INTO contactform (fullname,email,message) VALUES 
        (?,?,?)");
$stmt->bind_param("sss",$fullname,$email,$message);

// inserts contact data into the database
if($_SERVER["REQUEST_METHOD"]==="POST"){

    $fullname = test_input($_POST['fullname']);
    $email = test_input($_POST['email']);
    
    $message = test_input($_POST['message']);
    $stmt->execute();
   
}
// security measures to test the user's input
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
      <h2 class="h2">Contact form confirmation</h2>  
      <div class="card">
      <p> Thank you for contacting us.  We'll be in touch shortly.</p>
  </div>
  </div>
 </div>  
    </div> 
 <div class="container">
     <div class="card">
     </div>       
 </div>
 <!-- including footer PHP in a file -->
<?php
include 'footer.php' 
?>
  
