<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	   $id = $_GET['id'];
	   $rn3 = $_GET['rn3'];
	   
	    $sql="select * from reservation where id='".$id."' && status='checked-out'";   
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{  
			$rowcount=mysqli_num_rows($res);	
			if($rowcount==0)
			{
				$sql="update reservation set status='checked-out' where id='".$id."'";   
				$res=mysqli_query($conn,$sql);
				
				if($res)
				{
					$sql="update room set book='',cid='' where room_no='".$rn3."'";   
				   $res=mysqli_query($conn,$sql);
		            
					echo '<script>alert("Checked-out")</script>';
					echo '<script>window.location.href="rooms.php";</script>';
				}
				else
				{
					echo mysqli_error($conn);
				}
			} 
			else{
				echo '<script>alert("Already checked-out")</script>';
					echo '<script>window.location.href="rooms.php";</script>';
			}
		
	    }
	
	
?>