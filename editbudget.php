<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	if((isset($_POST['submit']))) 
	{
	   $id = $_POST['budid'];
       $budget = $_POST['budget'];
	   
	   
	    
				$sql="update complaint set budget='".$budget."' where id = '".$id."'";   
				$res=mysqli_query($conn,$sql);
				if($res)
				{
		    
					echo '<script>alert("Updated Success")</script>';
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