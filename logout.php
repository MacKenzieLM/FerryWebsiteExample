<?php
session_start();
 session_unset();
 session_destroy();

 require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
?>


<!--styling the page title -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Log out</h2>
      <div class="card" >
    
    <p>You are now logged out.</p>


    </div>  
  </div>  
</div>

<script>
// alert pop up event
document ("logout");
function alertFunction(){
    alert("You have now logged out");
}
</script>

<?php
include'footer.php';