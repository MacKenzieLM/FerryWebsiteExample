<?php

require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 
if (!isset($_SESSION['custUsername'])) {
    

    }
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8"> 
    </head> 
        <style>      
    table { 
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    
    td, th {
    border: 2px solid #000;
    text-align: left;
    padding: 8px;
    }

    
    </style>
    
    <body>
  <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">View Customer details</h2>   
    

      <table>

<?php
    
echo "<table style='border: solid 2px black;'>"; // this brings the table to screen
    
echo "<tr><th>Customer Id</th> <th>Forename</th><th>Surname</th><th>Address1</th><th>Address2</th><th>Town<th>Postcode</th><th>Number<th>Email</th><th>Username</th></th></th> <th>Edit</th> <th>Delete</th></tr>"; // this brings the headings to screen

$count=1;
$mysqli_query="Select * from register where customerID = '$customerID' ";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { ?>
    <tr><td><?php echo $row["customerID"]; ?></td><td><?php echo $row["custForename"]; ?><td><?php echo $row["custSurname"]; ?></td>
        <td><?php echo $row["address1"]; ?></td><td><?php echo $row["address2"]; ?></td><td><?php echo $row["town"]; ?></td><td><?php echo $row["postcode"]; ?></td><td><?php echo $row["number"]; ?></td><td><?php echo $row["email"]; ?></td><td><?php echo $row["custUsername"]; ?></td></td><td >
            <a href="updateDetails.php?id=<?php echo $row["customerID"]; ?>">Edit</a></td><td align="center"><a href="deleteBooking.php?id=<?php echo $row["customerID"]; ?>">Delete</a></td></tr>
<?php  $count++; 
} ?>
      </table>
  </div>
  </div>
 </div> 
        
        <script>  
//gets all the elements with the class name confirmDelete
        var elements = document.getElementsByClassName("confirmDelete");
        
        for(var i = 0; i < elements.length; i++){
//        for each instance, add an event listener
//        listen for click, activate confirmDelete function,
elements[i].addEventListener("click", confirmDelete);
}

function confirmDelete(e){
// prompt the user if they want to cancel, stop the navigation
if(!confirm("Do you want to delete your account?")){
    e.preventDefault();
}
}
</script>
    </body>
</html>

<?php // including the css for the footer
include 'footer.php'; 
?>