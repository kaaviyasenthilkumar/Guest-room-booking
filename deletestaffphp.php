<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	   $id = $_GET['id'];
	   
	    
				$sql="delete from staff where id='".$id."'";   
				$res=mysqli_query($conn,$sql);
				if($res)
				{
		    
					echo '<script>alert("Deleted Success")</script>';
					echo '<script>window.location.href="staff.php";</script>';
				}
				else
				{
					echo mysqli_error($conn);
				}
			
	   
		
	
?>