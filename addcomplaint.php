<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	if((isset($_POST['submit']))) 
	{
	   $id = $_POST['comid'];
       $name = $_POST['comname'];
	   $type= $_POST['comtype'];
	   $complaint = $_POST['complaint'];
       $comdate = $_POST['comdate'];
	   
	    
				$sql="insert into complaint(id,name,type,complaint,date) values('".$id."','".$name."','".$type."','".$complaint."','".$comdate."')";   
				$res=mysqli_query($conn,$sql);
				if($res)
				{
		    
					echo '<script>alert("Added Success")</script>';
					echo '<script>window.location.href="complaint.php";</script>';
				}
				else
				{
					echo mysqli_error($conn);
				}
			
	   
		
	}
	else{
		 echo "Program isnt run";
	}
?>