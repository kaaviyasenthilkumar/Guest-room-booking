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
  <a href="staff.php" class="active">Manage Staff</a>
  <a href="complaint.php"  >Manage Complaints</a>
  <a href="login.php"> Logout</a>
</div>

<div style="top:15%;left:18%;background-color:#E0E0E0;width:80%;height:60%;border-radius:5px;height:200%">

<div class="title1" style="height:3%">
	
		<span class="st">Staff Details</span>
	
</div>
<div style="top:4%;left:2%">
<a onclick="document.getElementById('formbar1').style.display='block';"><input type="button" value="Add staff" /></a></div>

<div style="width:90%;left:13%;top:5%;">

                            
                                <div style="width:90%">
                                    <table id="myTable" style="width:90%" class="table table-bordered table-striped">
                                        
                                            <tr>
                                                <th>Name</th>
                                               
                                                <th>Role</th> 
												<th>Phone</th>
												<th>Salary</th>
												
												<th>Action</th>
												
                                            </tr>
                                        
                                        <tbody>
                                    <?php 
                                    $conn = mysqli_connect("localhost","root","","room_booking");
                                    
                                  $sql1 = "SELECT * FROM  `staff`";
                                   $result1 = $conn->query($sql1);
								   $rowcount=mysqli_num_rows($result1);
                                   while($row = $result1->fetch_assoc()) { 
                                
                                 
                                      ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['role']; ?></td>
												<td><?php echo $row['phone']; ?></td>
												<td><?php echo $row['salary']; ?></td>
                                                <td style="width:20%"> 
                                                <a href="editstaff.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-primary" >Edit</button></a> 
                                                <a href="deletestaff.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" >Delete</button></a>
                                               
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                           
</div>
</div>

<script>

</script>
<?php 
                                    $conn = mysqli_connect("localhost","root","","room_booking");
                                    $id = $_GET['id'];
                                  $sql1 = "SELECT * FROM  `staff` WHERE id='".$id."'";
                                   $result1 = $conn->query($sql1);
								   $rowcount=mysqli_num_rows($result1);
                                   while($row = $result1->fetch_assoc()) { 
                                
                                 
                                      ?>
<div id="formbar1" style="z-index:1;left:20%;top:10%;width:55%;height:80%;background-color:white;border-radius:10px;border:4px solid grey;">
<div style="left:10%;top:5%;width:70%;height:90%;background-color:white;border-radius:30px">
<form name="form1" onsubmit="return emptyValidation()" action="editstaffphp.php"  method="post" >
<h1>Staff details</h1>
<p>   
<input style="visibility:hidden" id="staffid" name="staffid" value="<?php echo $id ?>"></input></br></p>
<label class="lab" style="padding-right:20px;" for="staffname" >Staff Name   :</label></br>
<input id="staffname" value="<?php echo $row['name']; ?>" type="text" name="staffname"></input></br></p>
<label class="lab" style="padding-right:20px;" for="staffrole" >Role   :</label></br>
<input id="staffrole" value="<?php echo $row['role']; ?>" type="text" name="staffrole"></input></br></p>
<label class="lab" style="padding-right:20px;" for="staffphone" >Phone   :</label></br>
<input id="staffphone" value="<?php echo $row['phone']; ?>" type="text" name="staffphone"></input></br></p>
<label class="lab" style="padding-right:20px;" for="staffsalary" >Salary    :</label></br>
<input id="staffsalary" value="<?php echo $row['salary']; ?>" type="text" name="staffsalary"></input></br></p>
<div style="left:100%;top:60%"><input type="submit" id="submit" name="submit" value="Submit"></input></br></br><a href="staff.php"><input onclick="document.getElementById('formbar1').style.display='none'" type="button" id="cancel" name="cancel" value="Cancel"></input></a></div>
</form>
<?php } ?>
</div>
</div>
</body>