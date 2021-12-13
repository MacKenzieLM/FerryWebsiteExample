<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 


  

    ?>

<!--styling the page title -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Admin Login</h2>   
<div class="card"> 
    <p> Please fill in the text boxes </p>
    <form action="processAdminLogin.php" method="post">
          

<input class="u-full-width" type="text" placeholder="Enter your staff username" name="staffUsername"  required>
            <p></p>
    
   
    <input class="u-full-width" type="password" placeholder="Enter your password" name="password1" minlength="8" required>
            <p></p>
    
    <input class="button-primary" type="submit" name="adminLogin" value="Login">
        <p></p>
    
    <label>or register here:</label>
                   
    <a href="register.php" class="button-primary">Register</a>
                 
    </form>                         
    </div>
</div>
     
<?php
include'footer.php';