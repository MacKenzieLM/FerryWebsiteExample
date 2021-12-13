
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<style>

 * {
  box-sizing: border-box;
}    
/* Style the body */    
body {
margin:0;
font-family:Arial;
background-color: #fff;
position:relative;

}
.add_item_button{
    
}
.imgeigg{
    float: right;
   margin-right: -250px;
   margin-bottom: 20px
 }

.imgmorar{
    float: right;
   margin-right: -250px;
   margin-bottom: 20px
 }
 
 .imgrum{
    float: right;
   margin-right: -250px;
   margin-bottom: 20px
 }
 
 .imgmuck{
    float: right;
   margin-right: -250px;
   margin-bottom: 20px
 }
 .imgboat{
     
     
 }
   
 .h3findus{
     text-align: right;
     padding: 0px;
     margin-right: 20px;
     
 }
 .imgroute{
   float: right;
   margin-right: -250px;
    
 }
 .h3sail{
     text-align: right;
     padding: 0px;
     margin-right: 20px;
 }
 
 .col-md-push-9{
    left: 75%;
 }

 @media screen and (max-width: 767px){
.table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px
    solid #000;
}
 }
 .table-responsive {
    min-height: .01%;
    overflow-x: auto;
}

.button-info {
    background-color: #379ACE;
  color: black;
  padding: 3px 20px;
   border: 1px solid #000;
  border-radius: 4px;
  cursor: pointer;
   font-size: 17px;
    }

    .button-success {
    color: #000;
    background-color: #5cb85c;
    border-color: #4cae4c;
     padding: 2px 12px;
   border: 1px solid #000;
  border-radius: 4px;
  cursor: pointer;
   font-size: 14px;
}
.button-danger {
    color: #000;
    background-color: #d9534f;
    border-color: #d43f3a;
}
 .form {
    display: block;
    margin-top: 0em;
    margin-bottom: 1em;
}
/* Right column */
.rightcolumn {
  float: right;
  width: 25%;
  background-color: #fff;
  padding-left: 10px;
}

/* input config */
input[type=submit] {
  background-color: #379ACE;
  color: black;
  padding: 8px 20px;
   border: 1px solid #000;
  border-radius: 4px;
  cursor: pointer;
   font-size: 17px;
 
}

/* submit hover */
input[type=submit]:hover {
  background-color: #bdb8ad;
  color: #000;
}

/* Add a card effect for articles */
.card {
  background-color: #fff;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Header/Logo Title */
.header {
  padding: 15px;
  height: 100px;
  text-align: left;
  font-family: 'Arial';
  background: #379ACE;
  color: black;
   
    }

/* header 1 size */
.header h1 {
  font-size: 1.6rem;
  margin: 18px;
  margin-left: 20px;
}

.logo{
  width:20%;
  height:auto;
  float:left;
  
 } 

/* header 2 font */
.h2 {
font-family: 'Arial';
font-size: 1.4rem;
margin:10px;
}

/* Create two unequal columns that floats next to each other 
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
} 

/*topnav colour*/
.topnav {
  overflow: hidden;
  background-color: #bdb8ad;
}
/*topnav colour on hover*/
.topnav a {
  float: left;
  display: block;
  background-color: #bdb8ad;
  color: #000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
/*the colour of font changing on hover*/
.active {
  background-color: #000;
  color: #bdb8ad;
}

.topnav .icon {
  display: none;
}
.imgmorar{
    float: right;
   margin-right: -250px;
 }
 .imgtime{
   max-width: 100%;
   height: auto;
     
 }
  
 .h3findus{
     text-align: right;
     padding: 0px;
     margin-right: 20px;
     
 }
 .imgroute{
   float: right;
  
    
 }
 .h3sail{
     text-align: center;
     padding: 0px;
     margin-right: 20px;
 }
 

/*Makes the media take up the available page width*/
img, object, embed, video {
      max-width:100%;
}

/*dropdown menu*/
.dropdown {
 color: #000;  
 float: left;
  overflow: hidden;
}
/*dropdown menu button format*/
.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  background-color: #bdb8ad;
  color: #000;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  
  
}
/* dropdown content colour*/
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000;
 color: #bdb8ad;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 
}
/* dropdown button on active*/
.dropdown-content a {
  float: none;
  color: black;
  background-color: #000;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
   color: #bdb8ad;
}
/*dropbown menu colour active*/
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #bdb8ad;
  color: #000;
}
/*dropdown content colour on hover*/
.dropdown-content a:hover {
  background-color: #bdb8ad;
  color: #000;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #000;
  color: #bdb8ad;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/*responsive format - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}
/*responsive format - when the screen is less than 600px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  /*topnav responsive*/
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  /*dropdown responsiveness*/
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
  ul.topnav li.right {float: right;}
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>
     <div class="logo"></div>
    <!-- responsive header sizing -->
<div class="header">
     <img src="logo.fw.png" alt="Alba logo" style="float:left;width:6%">
     <h1 class="h1"> &ensp; Alba Wildlife Cruises</h1>

 
</div>
    
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
 
  
  <div class="dropdown">
    <button class="dropbtn">Sailing Routes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="morar.php">Sail from Morar</a>
       <a href="eigg.php">Sail From Eigg</a>
   
    
    </div>
  </div>
 
  <a href="book.php">Book Cruise</a>
  <a href="contact.php">Contact</a>
  <a href="aboutus.php">About Us</a>
 
 
  <div class="dropdown">
    <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="viewYourBookings.php">View Bookings</a>
       <a href="updateBooking.php">Update Booking</a> 
       <a href="deleteBooking.php">Delete Booking</a>
    
    </div>
  </div> 
   <div class="topnav-right"> 
       <a href="userRegistration.php">Register</a>
       
       <div class="dropdown">
       <button class="dropbtn">Login
          <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="login.php">Login</a>
       <a href="adminLogin.php">Admin Login</a> 
    </div>
       </div>
    <a href="logout.php" onclick="alertFunction()">Logout</a>
   
 </div>
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
   
</div>

<div style="padding-left:16px">
  <h2></h2>
 
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// alert pop up event
document ("logout");
function alertFunction(){
    alert("You have now logged out");
}
</script>


</body>
</html>
