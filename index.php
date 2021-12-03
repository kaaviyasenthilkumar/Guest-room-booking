<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Room Booking System</title>
<style>

</style>
<link rel="stylesheet" href="style.css"/>
<script>
function emptyValidation() {
      var formFieldname = document.forms["Form1"]["prono"].value;
	  var formFieldpassword = document.forms["Form1"]["proname"].value;
	  var formFieldempid = document.forms["Form1"]["empid"].value;
      if (formFieldname == "" || formFieldpassword == "" || formFieldempid == "") 
	  {
         alert("All information must be filled out");
         return false;
      }
	  
}
function uemptyValidation() {
      var formFieldname = document.forms["Form2"]["uprono"].value;
	  var formFieldpassword = document.forms["Form2"]["uproname"].value;
	  var formFieldempid = document.forms["Form2"]["uempid"].value;
      if (formFieldname == "" || formFieldpassword == "" || formFieldempid == "") 
	  {
         alert("All information must be filled out");
         return false;
      }
	  
}

</script>
</head>
<body style="background-color:#606060">
<img src="hotelroom2.jpg" style="width:100%;height:70% "/>
<!--<div>
<img src="firstlibrary.jpeg" style="width:1250px;height:600px" alt="library"/></div>-->
<div id="title"> Room Booking System</div>



<!-- Load an icon library 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

<!-- The sidebar -->
<div class="sidebar">
  <a href="adminpage.php" class="active">Dashboard</a>
  <a href="adminemployee.php">Reservation</a>
  <a href="admindepartment.php">Manage Rooms</a>
  <a href="adminproject.php">Manage Staff</a>
  <a href="adminsalary.php">Manage Complaints</a>
  <a href="adminoremployee.php"> Logout</a>
</div>

<div>


<br/>
<br> 
</div>

</body>