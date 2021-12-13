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
    <style>
 
  .column {
  float: left;
  width: 25.0%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
 
  margin: 8px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<!--styling the page title -->   
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">About Us</h2>
        <div class="card">
          
      <p>We are your crew who'll look after you when you travel with us.  We are all trained first aiders as well as <p>experienced sailors; your safety is our priority whilst you travel.</p>    
 
     
      </div>
  </div>
</div>
  </div><!-- comment -->

    

<div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Bob</h2>
        <p>Skipper</p>
        <p>lorem ipsum ipsum lorem.</p>
       
        </div>
    </div>
  </div>
 

  <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Bill</h2>
        <p class="title">Skipper</p>
        <p>lorem ipsum ipsum lorem.</p>
     
      </div>
    </div>
  </div>
    
    <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Brian</h2>
        <p>Crew</p>
        <p>lorem ipsum ipsum lorem.</p>
     
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Bert</h2>
        <p>Crew</p>
        <p>lorem ipsum ipsum lorem.</p>
    
      </div>
    </div>
  </div>


</body>
</html>
    
    
<?php
include'footer.php';


