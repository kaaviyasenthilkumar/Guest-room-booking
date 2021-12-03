<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	if((isset($_POST['submit']))) 
	{
	   $id = $_POST['cid'];
	   $rn3 = $_POST['rn3'];
	   $roomtype = $_POST['roomtype'];
	   $roomno = $_POST['roomno'];
	   $checkin = $_POST['checkindate'];
	   $checkout = $_POST['checkoutdate'];
	   $td = $_POST['td'];
	   $price = $_POST['price'];
	   $ta= $_POST['ta'];
	    $book="booked";
		$nb="";
       $name = $_POST['cname'];
	   $phone = $_POST['cphone'];
       $email = $_POST['cmail'];
	   $address = $_POST['caddress'];
	   $sql="select * from reservation where id='".$id."' && status='checked-out'";   
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{  
			$rowcount=mysqli_num_rows($res);	
			if($rowcount==0)
			{
	            $sql="update reservationset status='checked-out' where room_no='".$rn3."'";   
				   $res=mysqli_query($conn,$sql);
				$sql="update reservation set room_type='".$roomtype."',room_no ='".$roomno."' ,checkindate ='".$checkin."',checkoutdate='".$checkout."',total_days='".$td."',price='".$price."',total_amount='".$ta."',name='".$name."',phone='".$phone."',mail='".$email."',address='".$address."',status='checked-in' where id='".$id."'";   
				$res=mysqli_query($conn,$sql);
				
				if($res)
				{
					$sql="update room set book='".$nb."',cid='' where room_no='".$rn3."'";   
				   $res=mysqli_query($conn,$sql);
				   
					$sql="update room set book='".$book."',cid='".$id."' where room_no='".$roomno."'";   
				   $res=mysqli_query($conn,$sql);
		            
					echo '<script>alert("Added Success")</script>';
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
else{
echo "Error";
}	
?>