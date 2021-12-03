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
function getroom()
{
	var rm=document.getElementById("roomtype").value;
	alert("Called "+rm);
	if(rm=="Single")
	{
		
	}
	
}
</script>

</head>
<body style="background-color:#606060">

<!--<div>
<img src="firstlibrary.jpeg" style="width:1250px;height:600px" alt="library"/></div>-->
<div id="title"> Room Booking System</div>

<?php
if((isset($_POST['submit']))) 
	{
	   $rt = $_POST['roomtype'];
		$conn = mysqli_connect("localhost","root","","room_booking");   
		$sql="select * from room where room_type='".$rt."'";   
	    $res=mysqli_query($conn,$sql);
		$rowcount=mysqli_num_rows($res);
	    while($rows=mysqli_fetch_array($res))
		{
			//$t=$m.$n;			
			/*$bd[n]=$rows['book_id'];
			$bt[n]=$rows['book_title'];
			$ba[n]=$rows['book_author'];
			$bc[n]=$rows['book_cost'];
			$bq[n]=$rows['book_quantity'];*/
			//echo 'ar["'.$n.'"]="'.$rows['id'].'"' ;
			echo '<tr>';
			echo '<td>' .$rows['room_type']. '</td>';
			echo '<td>' .$rows['room_no']. '</td>';
			echo '<td>' .$rows['book']. '</td>';
			echo '</tr>';
		}
	}
?>


<!-- Load an icon library 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

<!-- The sidebar -->
<div class="sidebar">
  <a href="adminpage.php" > Dashboard</a>
  <a href="adminemployee.php" class="active">Reservation</a>
  <a href="admindepartment.php">Manage Rooms</a>
  <a href="adminproject.php">Manage Staff</a>
  <a href="adminsalary.php">Manage Complaints</a>
  <a href="adminoremployee.php"> Logout</a>
</div>

<div style="top:15%;left:18%;background-color:#E0E0E0;width:40%;height:60%;border-radius:5px">

<div class="title1">
	
		<span class="st">Room Details</span>
	
</div>
<div style="width:90%;left:20%;top:20%">
<form method="post" action="reservation2.php">
<label for="roomtype" >Room Type</label><br/>
<select name="roomtype" id="roomtype" onchange="this.form.submit()">
  <option value="Single">Single</option>
  <option value="Double">Double</option>
  <option value="Triple">Triple</option>
  <option value="Family">Family</option>
  <option value="King sized">King sized</option>
  <option value="Mini-Suit">Mini-Suit</option>
</select><br/></p>
</form>
<label for="checkindate" >Check In Date</label><br/>
<input type="date" name="checkindate" id="checkindate" />
<div ><p>Total Days:</p></div><br/><br/>
<div ><p>Price:</p></div><br/></p>
<div ><p>Total Amount:</p></div>
<div style="left:40%;top:0px;">
<label for="roomno" >Room No</label><br/>
<select name="roomno" id="roomno">
  <option value="">select</option>

</select>
<br/></p>
<label for="checkoutdate" >Check Out Date</label><br/>
<input type="date" name="checkoutdate" id="checkoutdate" /><br/></p>

</div>
</div>
</div>
<div style="top:15%;left:59%;background-color:#E0E0E0;width:40%;height:60%;border-radius:5px">
<div class="title1">
	
		<span class="st">Customer Details</span>
	
</div>
<div style="width:90%;left:20%;top:20%">
<label for="cname" >Name</label><br/>
<input type="text" name="cname" id="cname" /></br>
<label for="cphone" >Phone</label><br/>
<input type="text" name="cphone" id="cphone" /></br>
<label for="cmail" >Mail</label><br/>
<input type="mail" name="cmail" id="cmail" /></br>
<label for="caddress" >Address</label><br/>
<input type="text" name="caddress" id="caddress" /></br>
<br/></p>


</div>
</div>
</div>
<script>
var rc='<?php echo $rowcount; ?>';
var rl=document.getElementById("data1").rows.length;
var rcl=document.getElementById("data1").rows[1].cells.length;
	//alert("rl " + rl);
	var rt=new Array();
	for(i=0;i<rc;i++)
	{
		
		rt[i]=document.getElementById("data1").rows[i].cells[0].innerHTML;
		alert(rt[i]);
	}
var l=rt.length;
</script>
</body>