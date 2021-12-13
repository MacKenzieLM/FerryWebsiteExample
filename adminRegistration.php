<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
?>

  <!DOCTYPE html>
<html>
    <head>
         
    <body>
     
<!--styling the initial wording -->

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Admin registration</h2> 


          <div class="card">
      <p> Admin account will be approved soon.</p>
         
 <form action="processAdminReg.php" method="POST" onsubmit="return matchPassword(this)" >
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
  
                                   
     
     <br><input type="text" placeholder="Staff forename" name="staffForename"><br>
     <br><input type="text" placeholder="Staff surname" name="staffSurname"><br>
    
     <br><input id="keyEvent" type="text" placeholder="Username (without spaces)" name="staffUsername" required><br> 
     <br><input type="password" id="password1" placeholder="Password of min 8 chars" name="password1" minlength="8" required><br>
     <br><input type="password" id="password2" placeholder="Confirm password" name="password2" minlength="8" required><br>
     <br>
     
           
            <br>
            <table>
        <tr>
            <td id="matching"></td>
        <tr>
    </table>
            <input type="submit" value="Register">
        </form> 
  
 
  
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
        header("Location: adminRegistration.php"); // but proper alerts are on pages
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





