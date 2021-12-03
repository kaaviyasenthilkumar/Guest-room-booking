<?php
    $conn = mysqli_connect("localhost","root","","room_booking");
	if((isset($_POST['submit']))) 
	{
	   $id = $_POST['staffid'];
       $name = $_POST['staffname'];
	   $role = $_POST['staffrole'];
	   $phone = $_POST['staffphone'];
       $salary = $_POST['staffsalary'];
	   
	    
				$sql="insert into staff(id,name,role,phone,salary) values('".$id."','".$name."','".$role."','".$phone."','".$salary."')";   
				$res=mysqli_query($conn,$sql);
				if($res)
				{
		    
					echo '<script>alert("Added Success")</script>';
					echo '<script>window.location.href="staff.php";</script>';
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