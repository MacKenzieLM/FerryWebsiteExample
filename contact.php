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
      <h2 class="h2">Contact Us</h2> 
        <div class="card">
      <p>Send a message using our contact form below.</p>
     
       <form action=processContact.php onsubmit="submitFunction()" method="post">
 
    
      <h3 class="h3findus">Where to find us</p></div>   
      
      <iframe class="imgmorar" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17397.98370152208!2d-5.
              840128477424495!3d56.970249663551655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
              1!3m3!1m2!1s0x488c02cb3c55c4fb%3A0xb9c0bd220bd49b01!2sMorar%2C%20Mallaig%2
              0PH40%204PA!5e0!3m2!1sen!2suk!4v1632671916112!5m2!1sen!2suk"
              width="600" height="450" style="border:0;" allowfullscreen="" 
              loading="lazy"></iframe>
    

<div class="container">
     <div class="card">
 
   
 


    <!-- form element which allows user to input data -->
    <!-- form action sends data to processContact.php for processing to database -->
  
   <form action=processContact.php onsubmit="submitFunction()" method="post">
 
    <label for="fullname">Full name</label>
    <input type="text" id="fullname" name="fullname" required=""> <p></p>

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required=""> <p></p>
    
   
    
    <label for="message">Message</label><p></p>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
    <p></p>
   
    
   <input type="submit" id="submitExample" value="Submit">
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   

</div>
 </div>
   
  </div>
  
    </div>

        
 
  
<!--   submit event-->
<script>

// change event    
document.getElementById("changeExample").addEventListener("change", changeFunction);    
function changeFunction(){
    var output = document.getElementById("changeEvent").value;
    document.getElementById("output").innerHTML = "You have chosen " + output;
} 
// submit event
document.getElementById("submitExample").addEventListener("submit", submitFunction);
function submitFunction(){
    alert("Your form was submitted");
}
</script>
    </body>
  </html>
  
<?php
include'footer.php';
