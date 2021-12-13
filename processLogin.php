<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 

if(isset($_SESSION['Login'])){
  
}
// if user has logged in then they get a welcome message// to start the user working with a session to prevent access to sertain pages

?>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Hello there!</h2>   
     
        
        <?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $custUsername = test_input($_POST['custUsername']);
    $hash= test_input($_POST['password1']);
    
    $query = mysqli_query($conn, "SELECT * FROM register WHERE custUsername = '$custUsername'");
   $rows = mysqli_fetch_assoc($query);//returns data from the database
    $row = mysqli_num_rows($query);
    
    if(password_verify($hash,$rows['password'])&& $row==1){
       // $_SESSION['custUsername'] = $rows['custUsername']; //this sets the variable in the database
    
     //  if ($row !== null && $row['custUsername'] == $custUsername && $row['password'] == $password) {
   // echo "Login succesfull!"; 
    
   
            if ($rows['usertype'] == 'user'|| ($rows['usertype'] == 'commercial')){
                 echo "Welcome $custUsername. Enjoy browsing.";
                 
            }
                else{
                      echo "Username or Password is invalid";
    }
}

    
    }

 
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
      <br> <br>    
     <div class="card">
  <br> <br>
    <a href="login.php" class="button-primary">Login</a>
    <br>
    <br> 
    <a href="register2.php" class="button-primary">Register here</a>
    <br>
    

 

</div>
  </div>
 </div> 
</div>
<?php // including the css for the footer
include 'footer.php'; 
?>