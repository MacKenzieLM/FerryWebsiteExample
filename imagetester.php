<?php
session_start();    // this makes a new session
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
   
</style>
</head>
<body>


    


 <!--styling the page title -->   
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Sail from Morar</h2>
      <p>We sail to the Islands of Eigg, Muck and Rum from Morar.  </p>
           
    <h3 class="h3sail">Sailing Routes</h3>
    
   <img class="imgroute" src="routes.png" alt="Sailing routes" style="width:90%"> 
  
      <h3>Adult Fares</h3>
      <p> Return adult fares from Morar to:</p>
  
   <p>Island of Eigg &nbsp;&emsp;&emsp;&emsp;&emsp;£18.00</p>
   <p>Island of Muck &emsp;&emsp;&emsp;&emsp;£19.00</p>
   <p>Island of Rum &nbsp;&emsp;&emsp;&emsp;&emsp;£24.00</p>
      <h3>Child Fares (all Islands)</h3>
      <p>Return childrens' fares from Eigg to:</p>
      <p>2 years and under &nbsp;&emsp;&emsp;&emsp;Free</p>
           <p>3 - 10 years &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;£10.00</p>
      <p>11-16 years&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;£13.00</p>
      <br>
  

   </div>  
    </div>
 </div>
</div>
     
    </body>
</html>


<!-- including footer PHP in a file -->
<?php
include 'footer.php';
?>
