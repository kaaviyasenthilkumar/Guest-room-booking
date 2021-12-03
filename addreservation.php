<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	if((isset($_POST['submit']))) 
	{
	   $id = $_POST['cid'];
	   $roomtype = $_POST['roomtype'];
	   $roomno = $_POST['roomno'];
	   $checkin = $_POST['checkindate'];
	   $checkout = $_POST['checkoutdate'];
	   $td = $_POST['td'];
	   $price = $_POST['price'];
	   $ta= $_POST['ta'];
	    $book="booked";
       $name = $_POST['cname'];
	   $phone = $_POST['cphone'];
       $email = $_POST['cmail'];
	   $address = $_POST['caddress'];
				$sql="insert into reservation(id,room_type,room_no,checkindate,checkoutdate,total_days,price,total_amount,name,phone,mail,address,status) values('".$id."','".$roomtype."','".$roomno."','".$checkin."','".$checkout."','".$td."','".$price."','".$ta."','".$name."','".$phone."','".$email."','".$address."','checked-in')";   
				$res=mysqli_query($conn,$sql);
				
				if($res)
				{
					$sql="update room set book='".$book."',cid='".$id."' where room_no='".$roomno."'";   
				    $res=mysqli_query($conn,$sql);
					
					echo '<script>alert("Added Success")</script>';
					echo '<script>window.location.href="reservation.php";</script>';
				}
				else
				{
					echo mysqli_error($conn);
				}
			    
		
	   
	}
else{
echo "Error";
}	
?>