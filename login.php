<?php
session_start();
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 

if(isset($_SESSION['custUsername'])){
  echo "Welcome " . $_SESSION['custUsername'];

  
}
    ?>

<!--styling the page title -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Login</h2>   
<div class="card"> 
    <p> Please fill in the text boxes </p>
    <form action="processLogin.php" method="post">
          

<input class="u-full-width" type="text" placeholder="Enter your username" name="custUsername"  required>
            <p></p>
    
   
    <input class="u-full-width" type="password" placeholder="Enter your password" name="password1" minlength="8" required>
            <p></p>
    
    <input class="button-primary" type="submit" value="Login">
        <p></p>
    
    <label>or register here:</label>
                   
    <a href="register.php" class="button-primary">Register</a>
                 
    </form>                         
    </div>
</div>
     
<?php // including the css for the footer
include'footer.php';