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

<!--<div>
<img src="firstlibrary.jpeg" style="width:1250px;height:600px" alt="library"/></div>-->
<div id="title"> Room Booking System</div>
<table style="top:50%;left:50%;border:2px solid black;visibility:hidden" id="data1">
<?php
	$conn = mysqli_connect("localhost","root","","room_booking");   
	$sql="select * from room";   
	$res=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($res);
	while($rows=mysqli_fetch_array($res))
		{
			
			echo '<tr>';
			echo '<td>' .$rows['room_type']. '</td>';
			echo '<td>' .$rows['room_no']. '</td>';
			echo '<td>' .$rows['book']. '</td>';
			echo '<td>' .$rows['amount']. '</td>';
			echo '</tr>';
		}
	
	?>
</table>
<table style="top:50%;left:50%;border:2px solid black;visibility:hidden" id="data2">
<?php
	$sql="select * from reservation";   
	$res=mysqli_query($conn,$sql);
	$idrowcount=mysqli_num_rows($res);
	while($rows=mysqli_fetch_array($res))
		{
			
			echo '<tr>';
			echo '<td>' .$rows['id']. '</td>';
			echo '</tr>';
			
		}
 ?>
 </table>
<!-- Load an icon library 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

<!-- The sidebar onchange="this.form.submit() -->
<div class="sidebar">
  
  <a href="reservation.php" class="active">Reservation</a>
  <a href="rooms.php">Manage Rooms</a>
  <a href="staff.php">Manage Staff</a>
  <a href="complaint.php">Manage Complaints</a>
  <a href="login.php"> Logout</a>
</div>

<div style="top:15%;left:18%;background-color:#E0E0E0;width:40%;height:60%;border-radius:5px">

<div class="title1">
	
		<span class="st">Room Details</span>
	
</div>
<div style="width:90%;left:20%;top:20%">
<form name="Form1" action="addreservation.php"  method="post">
<label for="roomtype" >Room Type</label><br/>
<select name="roomtype" id="roomtype" onchange="getroom();">
  <option value="">select</option>
  <option value="Single">Single</option>
  <option value="Double">Double</option>
  <option value="Triple">Triple</option> 
  <option value="Family">Family</option>
  <option value="King sized">King sized</option>
  <option value="Mini-Suit">Mini-Suit</option>
</select><br/></p>

<label for="checkindate" >Check In Date</label><br/>
<input type="date" name="checkindate" id="checkindate" /><br/>
<label for="td" >Total Days</label><br/>
<input type="text" readonly="readonly" name="td" id="td" /><br/>
<label for="price" >Price</label><br/>
<input type="text" readonly="readonly" name="price" id="price" /><br/>
<label for="ta" >Total Amount</label><br/>
<input type="text" readonly="readonly" name="ta" id="ta" /><br/>

<input type="text" style="visibility:hidden" readonly="readonly" name="cid" id="cid" value="" /><br/>

<div style="left:40%;top:0px;">
<label for="roomno" >Room No</label><br/>
<select name="roomno" id="roomno">
  <option value="">select</option>

</select>
<br/></p>
<label for="checkoutdate" >Check Out Date</label><br/>
<input type="date" onchange="ddate()" name="checkoutdate" id="checkoutdate" /><br/></p>

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
<div style="width:40%;left:20%">
<input style="width:100%" type="submit" name="submit" value="Submit" /></div>

</div>
</div>
</div>
</form>
<script>
var fa;
var rc='<?php echo $rowcount; ?>';
var idrc='<?php echo $idrowcount; ?>';
var rl=document.getElementById("data1").rows.length;
var rcl=document.getElementById("data1").rows[0].cells.length;
	//alert("rl " + rl);
	var rt=new Array();
	var rn=new Array();
	var rb=new Array();
	var ra=new Array();
	for(i=0;i<rc;i++)
	{
		
		rt[i]=document.getElementById("data1").rows[i].cells[0].innerHTML;
		rn[i]=document.getElementById("data1").rows[i].cells[1].innerHTML;
		rb[i]=document.getElementById("data1").rows[i].cells[2].innerHTML;
		ra[i]=document.getElementById("data1").rows[i].cells[3].innerHTML;
		//alert(ra[i]);
	}
	
	//var lid=document.getElementById("data2").rows[idrc].cells[0].innerHTML;
	//alert(idrc);
	var a=(idrc);
	document.getElementById("cid").value=(a);
var l=rt.length;
function getroom()
{
	document.getElementById('roomno').innerText = null;
	var x1 = document.getElementById("roomno");
	var rm=document.getElementById("roomtype").value;
	alert("Called "+rm);
	
		for(var i=0;i<l;i++)
		{
			if(rm==rt[i])
			{
					if(rb[i]!="booked")
					{
						fa=ra[i];
						//alert(fa);
						var option = document.createElement("option");
						option.text = rn[i];
						x1.add(option);
					}
				
			}
		}
	
	
}
function ddate()
{
	
	var date1 = new Date(document.getElementById("checkindate").value);
var date2 = new Date(document.getElementById("checkoutdate").value);
  //alert(date1);
  //alert(date2);
// To calculate the time difference of two dates
var Difference_In_Time = date2.getTime() - date1.getTime();
  
// To calculate the no. of days between two dates
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
//alert(Difference_In_Days);
document.getElementById("td").value=Difference_In_Days;
var rt2=document.getElementById("roomtype").value;
document.getElementById("price").value=fa;
document.getElementById("ta").value=(fa*Difference_In_Days);
}
</script>
</body>