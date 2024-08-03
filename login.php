<?php
session_start();
if (isset($_POST['email']) && isset($_POST['pass']))
{
	function validate($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
        return $data;
	}
	$email=validate($_POST['email']);
	$password=validate($_POST['pass']);
	
	if(empty($email)){
		header("Location: loginpage.php?error=email is required");
		exit();
	}
	else if(empty($password)){

		header("Location: loginpage.php?error=Password is required");
        exit();
	}
	else{
		@$cn=new mysqli('localhost','root','','user');
if(mysqli_connect_errno())
{
    echo"Could not connect";
    exit;
}

		$query="select * from admintab where email='".$email."' and password='".$password."'";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
if( $r['email'] == "plasmap2023@gmail.com" && $r['password']=='pp' )
{
	echo"<script>alert('login successful for admin ');</script>";
	echo"<script>window.location.href='aview.php';</script>"; 

}
$query="select * from user where email='".$email."' and password='".$password."' and status='true'";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
if($r)
{
	echo"<script>alert('login successful ');</script>";
	$_SESSION['email']=$email;
	echo"<script>window.location.href='users.html';</script>";
}
else
{
	echo"<script>alert('incorrect password or email');</script>";
	echo"<script>window.location.href='loginpage.php';</script>";
} 
}
}
else
{
	header("Location:loginpage.php?error");
}

?>