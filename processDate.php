<?php
require( 'DB.php');      // this connects to database
require ('header.php');      // this brings the header css into script 

header ( "Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header ("Pragma: no-cache");
?>
<!DOCTYPE 
    html> 
    
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
</head>




<body>
<form id="form1" name="form1" method="post" action="test_calendar_value.php">
<table border="0" cellspacing="0" cellpadding="2">
<tr>
<td>Date of journey :</td>
<td><?php
$myCalendar = new calendar("date5", true, false);
$myCalendar->setIcon("calendar/images/iconCalendar.gif");
$myCalendar->setPath("calendar/");
$myCalendar->setYearInterval(2021, 2023);
$myCalendar->dateAllow('2008-05-13', '2010-03-01');
$myCalendar->setDateFormat('j F Y');
$myCalendar->writeScript();
?></td>
<td><input type="button" name="button" id="button" value="Journey date" onclick="javascript:alert(this.form.date5.value);" /></td>
</tr>
</table>
<p>
<?php
echo("<p>the date value from getDate() at construct time = ".$myCalendar->getDate()."</p>");
?>
<input type="submit" name="Submit" value="Submit" />
</p>
</form>
</body>
</html>

