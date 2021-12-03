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


<div id="title"> Room Booking System</div>


<div class="sidebar">
  
  <a href="reservation.php" >Reservation</a>
  <a href="rooms.php" class="active">Manage Rooms</a>
  <a href="staff.php">Manage Staff</a>
  <a href="complaint.php">Manage Complaints</a>
  <a href="login.php"> Logout</a>
</div>

<div style="top:15%;left:18%;background-color:#E0E0E0;width:80%;height:60%;border-radius:5px;height:200%">

<div class="title1" style="height:3%">
	
		<span class="st">Room Details</span>
	
</div>
<div style="width:90%;left:15%;top:5%;">

                            
                                <div style="width:90%">
                                    <table id="myTable" style="width:90%" class="table table-bordered table-striped">
                                        
                                            <tr>
                                                <th>Name</th>
                                               
                                                <th>Room Type</th> 
												<th>Room No</th>
												<th>Check-In Date</th>
												<th>Check-Out Date</th>
												<th>Total Amount</th>
												<th>Status</th>
												<th>Action</th>
												
                                            </tr>
                                        
                                        <tbody>
                                    <?php 
                                    $conn = mysqli_connect("localhost","root","","room_booking");
                                    
                                  $sql1 = "SELECT * FROM  `reservation`";
                                   $result1 = $conn->query($sql1);
                                   while($row = $result1->fetch_assoc()) { 
                                
                                 
                                      ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['room_type']; ?></td>
												<td><?php echo $row['room_no']; ?></td>
												
												<td><?php echo $row['checkindate']; ?></td>
												<td><?php echo $row['checkoutdate']; ?></td>
												<td><?php echo $row['total_amount']; ?></td>
												<td style="width:15%"><?php echo $row['status']; ?></td>
                                                <td style="width:20%"> 
                                                <a href="editreservation.php?id=<?=$row['id'];?>&&rn3=<?=$row['room_no'];?>"><button type="button" class="btn btn-xs btn-primary" >Edit</button></a> 
                                                <a href="deletereservationphp.php?id=<?=$row['id'];?>&&rn3=<?=$row['room_no'];?>"><button type="button" class="btn btn-xs btn-danger" >Delete</button></a>
                                               
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
</body>