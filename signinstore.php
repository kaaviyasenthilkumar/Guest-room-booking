<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	if(isset($_POST['submit']))
	{
	   $fname = $_POST['fname'];
       $phone = $_POST['Fphone'];
	   $email = $_POST['Femail'];
	   $password = $_POST['Fpassword'];
	   $sql='select * from admin where fname="'.$fname.'" && password = "'.$password.'"';
	   $res = mysqli_query($conn, $sql);
	   $rowcount=mysqli_num_rows($res);	  
       	 
		if($rowcount==0)
		{
			$sql="insert into admin(fname,phone,email,password) values('".$fname."',".$phone.",'".$email."','".$password."')";
	   
			$res=mysqli_query($conn,$sql);
			if($res)
			{
				echo '<script>alert("Registered")</script>';
				echo '<script>window.location.href="reservation.php";</script>';
			
			}
			else{
				echo '<script>alert("Cannot add")</script>';
				echo '<script>window.location.href="signin.php";</script>';
			}
		}	
		else{
			echo '<script>alert("Already signed in")</script>';
			echo '<script>window.location.href="signin.php";</script>';
		}
		/*$s="SELECT * FROM user";
	    $result=mysqli_query($conn,$s);
		while($rows=mysqli_fetch_array($result))
		{
			$names=$rows['name'];
			$phones=$rows['phone'];
			$emails=$rows['email'];
			$passwords=$rows['password'];
		}*/
	}
	else
	{
		echo "Program is'nt run";
	}
	
?>
