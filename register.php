<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
?>

<!DOCTYPE html>
<html>
    <head>
  </head>       
    <body>
     
<!--styling the initial wording -->

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Register</h2>  
     
            <div class="card">
      <p>Choose category of registration.</p>
    <script language="javascript">
    function redirect(){

    switch(document.getElementById('category').value)
    {
        case "adminRegistration":
        window.location="../Ferry/adminRegistration.php";
        break;
        
        case "userRegistration":
        window.location="../Ferry/userRegistration.php";
        break;
        
        case "commercialRegistration":
        window.location="../Ferry/commercialRegistration.php";
        break;

}
}

</script>

    <SELECT id="category" NAME="section" onChange="redirect();">
    <Option value="">Select Section</option>
    <!--<Option value="adminRegistration">Admin Registration</option>-->
    <Option value="userRegistration">User Registration</option>
    <Option value="commercialRegistration">Commercial Registration</option>

    </SELECT>

</body>
</html>  
               
 
  
    <p>Already a member? <a href="login.php" class="button-primary">Login Here</a></p>
    
   </div>
 </div>
  </div>
 </div>

 <script>  
 // user validation - check the passwords match
 function matchPassword(){
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;
    if(password1!=password2)
    {
        alert("Passwords do not match");
    }else{
        alert("Passwords match"); // something is back to front
        header("Location: register2.php"); // but proper alerts are on pages
    }
    }
     
  // key event to check spaces in username input
  document.getElementById("keyEvent").addEventListener("keydown", keyFunction);
  function keyFunction(ev){
      var x = ev.keyCode;
      if(x===32){
          alert("Username cannot contain a space");
          ev.preventDefault();
      }
  }
  
      
  </script> 
   
  </body> 
  </html>

<?php
include'footer.php';

