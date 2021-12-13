<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if(!isset($_SESSION['custUsername'])){

}


$stmt=$conn->prepare("UPDATE register SET custForename=?,custSurname=?,address1=?,address2=?,town=?,postcode=?,number=?,email=?,custUsername=?,password=? where customerID=?");
$stmt->bind_param("ssssssisssi",$custForename,$custSurname,$address1,$address2,$town,$postcode,$number,$email,$custUsername,$hash,$customerID);
//$stmt->execute();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $customerID=$_POST["customerID"];
   
    $custForename=test_input($_POST["custForename"]);
    $custSurname=test_input($_POST["custSurname"]);
    $address1=test_input($_POST["address1"]);
    $address2=test_input($_POST["address2"]);
    $town=test_input($_POST["town"]);
    $postcode=test_input($_POST["postcode"]);
    $number=test_input($_POST["number"]);
    $email=test_input($_POST["email"]); 
    $custUsername=test_input($_POST["custUsername"]);
    $password=test_input($_POST["password"]);
    $stmt->execute();
    
    if($stmt->affected_rows>0){
        header("Location:viewCustomerDetails.php");
    }else{
        echo "something went wrong";
       }
}else{
     $customerID = (isset($_POST['customerID']) ? $_POST['customerID'] : '');
   // $customerID = $_GET["customerID"];
    $sql="SELECT * FROM register ";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
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

<!-- starting the html -->
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
 <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Update User Details</h2>   
      <div class="card">
      <p> Please update your details in the boxes below and press update.</p>
   
<div class="container">
<div class="card">
<div class="row">
     
    <!-- form element which allows user to input data -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
   
 <input type="hidden" name="customerID" value="<?php echo $customerID;?>">

        <table>
               <tr><td>First Name:</td>
                <td><input type="text" name="custForename" value="<?php echo $row["custForename"];?>" required></td></tr>
                      
             <tr><td>Last Name:</td>
                <td><input type="text" name="custSurname" value="<?php echo $row["custSurname"];?>" required></td></tr>
                              
             <tr><td>Address 1:</td>
                <td><input type="text"  name="address1" value="<?php echo $row["address1"];?>" required></td></tr>
                 
             <tr><td>Address 2:</td>
                 <td><input type="text"  name="address2" value="<?php echo $row["address2"];?>" required></td></tr>
                    
             <tr><td>Town:</td>
                 <td><input type="text"  name="town" value="<?php echo $row["town"];?>" required></td></tr>
                     
             <tr><td>Postcode:</td>
                 <td><input type="text" name="postcode" value="<?php echo $row["postcode"];?>" required></td></tr>
                
             <tr><td>Contact Number:</td>
                 <td><input type="text" name="number" value="<?php echo $row["number"];?>" required></td></tr>
                     
             <tr><td>Email:</td>
                 <td><input type="text" name="email" value="<?php echo $row["email"];?>" required></td></tr>
                 
              <tr><td>Username:</td>
                  <td><input type="text" name="custUsername" value="<?php echo $row["custUsername"];?>" required></td></tr>
          
              <tr><td>Enter Password:</td>
<!--                <td><input type="password" name="password" value="<?php echo $row["password"];?>" required></td>-->
              <td> <input type="password" name="password"  required></td></tr>
           
        </table><br>
    <input type="submit" name="submit" value="edit"> 
<!--   <a href="view.php" name="update"type="submit"input class="button-primary">update</a>
    <input class="button-primary" name="submit" type="submit" value="Edit"> -->
</form>
    </div>
  </div>
 </div>  
 </div>
</div>
</div>
</html>

<!-- including footer PHP in a file -->
<?php

require 'footer.php';
?>
