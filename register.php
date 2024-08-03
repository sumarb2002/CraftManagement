<?php
if (isset($_POST['fname']) && isset($_POST['password']))
{
	function validate($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
        return $data;
	}

	$fname=validate($_POST['fname']);
	$lname=validate($_POST['lname']);
	$dob=$_POST['date1'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$password=validate($_POST['password']);
	$rpassword=$_POST['rpassword'];

	if(empty($fname))
	{
		header("Location: registerpage.php?error=User first name is required");
		exit();
	}
	
	else if(empty($lname))
	{
		header("Location: registerpage.php?error=User last name is required");
		exit();
	}
	
	else if(empty($dob))
	{
		header("Location: registerpage.php?error=User date of birth is required");
		exit();
	}
	
	else if(empty($gender))
	{
		header("Location: registerpage.php?error=select the gender");
		exit();
	}
	else if(empty($email))
	{
		header("Location: registerpage.php?error=User email is required");
		exit();
	}
	else if(empty($password)){

		header("Location: registerpage.php?error=Password is required");
        exit();
	}
	else if($password!=$rpassword)
	{
		header("Location: registerpage.php?error=Passwords must match ");
	}
	else
	{ 
		@$cn=new mysqli('localhost','root','','user');
		if(mysqli_connect_errno())
		{
			echo"Could not connect";
			exit;
		}
		
		if( $email == "plasmap2023@gmail.com")
{
	echo"<script>alert('email already exists');</script>";
	echo"<script>window.location.href='registerpage.php';</script>"; 

}
else
{
		$query="select * from user";
		$rslt=$cn->query($query);
		$flag=0;
		while($r=$rslt->fetch_assoc())
		{
			if($r['email']==$email)
			{
				$flag=1;
			}
		}
	if($flag==0)
	{ 
		$query="insert into user(fname,lname,dob,gender,email,password,rpassword) values('".$fname."','".$lname."','".$dob."','".$gender."','".$email."','".$password."','".$rpassword."')";
		$rslt=$cn->query($query);
		if($rslt)
		 {
		include 'C:\xampp\htdocs\craft\sendmail.php';
		echo"<script>window.location.href='loginpage.php';</script>";
		
		  }
		else
	  {
		echo"<script>alert('error occured');</script>";
		echo"<script>window.location.href='registerpage.php';</script>";
	  }
	}
	else
	{
		echo"<script>alert('user with this email id alraedy exists');</script>";
		echo"<script>window.location.href='registerpage.php';</script>";
	}
	}
 }
}

?>