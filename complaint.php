<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Room Booking System</title>
<style>
td{
	padding:5px;
	
}
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

<div class="sidebar">
  
  <a href="reservation.php" >Reservation</a>
  <a href="rooms.php" >Manage Rooms</a>
  <a href="staff.php">Manage Staff</a>
  <a href="complaint.php"  class="active">Manage Complaints</a>
  <a href="login.php"> Logout</a>
</div>

<div style="top:15%;left:18%;background-color:#E0E0E0;width:80%;height:60%;border-radius:5px;height:200%">

<div class="title1" style="height:3%">
	
		<span class="st">Compliant Details</span>
	
</div>
<div style="top:4%;left:2%">
<a onclick="document.getElementById('formbar1').style.display='block';"><input type="button" value="Add Complaint" /></a></div>

<div style="width:90%;left:13%;top:5%;">

                            
                                <div style="width:90%">
                                    <table id="myTable" style="width:90%" class="table table-bordered table-striped">
                                        
                                            <tr>
											    <th>ID</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Complaint</th> 
												<th>Date</th>
												<th>Resolve</th>
												<th>Budget</th>
												
                                            </tr>
                                        
                                        <tbody>
                                    <?php 
                                    $conn = mysqli_connect("localhost","root","","room_booking");
                                    
                                  $sql1 = "SELECT * FROM  `complaint`";
                                   $result1 = $conn->query($sql1);
								   $rowcount=mysqli_num_rows($result1);
                                   while($row = $result1->fetch_assoc()) { 
                                
                                 
                                      ?>
                                            <tr>
											    <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['type']; ?></td>
												<td><?php echo $row['complaint']; ?></td>
												<td><?php echo $row['date']; ?></td>
												
                                                <td style="width:20%"> 
                                                <a onclick="document.getElementById('budid').value=<?=$row['id'];?>;document.getElementById('formbar2').style.display='block'"><button  type="button" class="btn btn-xs btn-primary" >Solve</button></a> 
                                               
                                                </td>
												<td><?php echo $row['budget']; ?></td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                           
</div>
</div>

<script>

</script>
<div id="formbar1" style="z-index:1;display:none;left:20%;top:10%;width:55%;height:80%;background-color:white;border-radius:10px;border:4px solid grey;">
<div style="left:10%;top:5%;width:70%;height:90%;background-color:white;border-radius:30px">
<form name="form1" onsubmit="return emptyValidation()" action="addcomplaint.php"  method="post" >
<h1>Complaint details</h1>
<p>   
<input style="visibility:hidden" id="comid" name="comid" value="<?php echo $rowcount ?>"></input></br></p>
<label class="lab" style="padding-right:20px;" for="comname" >Complaint Name   :</label></br>
<input id="comname" type="text" name="comname"></input></br></p>
<label class="lab" style="padding-right:20px;" for="comtype" >Complaint Type   :</label></br>
<input id="comtype" type="text" name="comtype"></input></br></p>
<label class="lab" style="padding-right:20px;" for="complaint" >Complaint   :</label></br>
<input id="complaint" type="text" name="complaint"></input></br></p>
<label class="lab" style="padding-right:20px;" for="comdate" >Date    :</label></br>
<input id="comdate" type="date" name="comdate"></input></br></p>
<div style="left:100%;top:60%"><input type="submit" id="submit" name="submit" value="Submit"></input></br></br><input onclick="document.getElementById('formbar1').style.display='none'" type="button" id="cancel" name="cancel" value="Cancel"></input></div>
</form>
</div>
</div>
<div id="formbar2" style="z-index:1;display:none;left:20%;top:10%;width:55%;height:80%;background-color:white;border-radius:10px;border:4px solid grey;">
<div style="left:10%;top:5%;width:70%;height:90%;background-color:white;border-radius:30px">
<form name="form2" onsubmit="return emptyValidation()" action="editbudget.php"  method="post" >
<h1>Budget details</h1>
<p>   
<input style="visibility:hidden" id="budid" name="budid" value="<?php echo $rowcount ?>"></input></br></p>
<label class="lab" style="padding-right:20px;" for="budget" >Budget   :</label></br>
<input id="budget" type="text" name="budget"></input></br></p>

<div style="left:100%;top:60%"><input type="submit" id="submit" name="submit" value="Submit"></input></br></br><input onclick="document.getElementById('formbar2').style.display='none'" type="button" id="cancel" name="cancel" value="Cancel"></input></div>
</form>
</div>
</div>
</body>