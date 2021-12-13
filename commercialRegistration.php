
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
      <h2 class="h2">Commercial business register</h2> 


          <div class="card">
      <p> Please register for a commercial account by filling in the text boxes and clicking 'Register'.</p>
         
 <form action="processRegisterComm.php" method="POST" onsubmit="return matchPassword(this)" >
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
  
                      
     <br><input type="text" placeholder="Company Name" name="coName"><br>
     <br><input type="text" placeholder="Address 1" name="coAddress1"><br>
     <br><input type="text" placeholder="Address 2" name="coAddress2"><br>
     <br><input type="text" placeholder="Town" name="coTown"><br>
     <br><input type="text" placeholder="Postcode" name="coPostcode"><br>
     <br><input type="text" placeholder="Contact number" name="coContNum"><br>
     <br><input type="text" placeholder="Email" name="coEmail"><br>
     <br><input type="password" id="coPassword1" placeholder="Password of min 8 chars" name="coPassword1" minlength="8" required><br>
     <br><input type="password" id="coPassword2" placeholder="Confirm password" name="coPassword2" minlength="8" required><br>
     <br>
     
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
    var coPassword1 = document.getElementById("coPassword1").value;
    var coPassword2 = document.getElementById("coPassword2").value;
    if(coPassword1!=coPassword2)
    {
        alert("Passwords do not match");
    }else{
        alert("Passwords match"); // something is back to front
        header("Location: commercialRegistration.php"); // but proper alerts are on pages
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

