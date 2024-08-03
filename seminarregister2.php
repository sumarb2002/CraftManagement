<?php
include "db_user.php";
$email=$_POST['email'];
  $pass=$_POST['pass'];
  if(empty($email))
  {
    header("Location:seminarregister.php?error=email is required");
    exit();
}
else if(empty($pass))
{
    header("Location:seminarregister.php?error=Password is required");
    exit();
}
else
{
    @$cn=new mysqli('localhost','root','','user');
if(mysqli_connect_errno())
{
echo"Could not connect";
exit;
}
$query="select * from user where email='".$email."' and password='".$pass."' and status='true'";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
if($r)
{
    $query1="select * from semreg where email='".$email."' and password='".$pass."'";
$rslt1=$cn->query($query1);
$r1=$rslt1->fetch_assoc();
if($r1)
{
    echo"<script>alert('You have already registered for seminar ');</script>";
	echo"<script>window.location.href='seminarregister.php';</script>"; 
}
   
else
{
    $name=$r['fname'];
    $query="insert into semreg(name,email,password) values('".$name."','".$email."','".$pass."')";
    $rslt=$cn->query($query);
    if($rslt)
    {
    echo"<script>alert('Seminar registration successful ');</script>";
	echo"<script>window.location.href='seminarregister.php';</script>"; 
    }
    else
    {
        echo"<script>alert('error in registration ');</script>";
        echo"<script>window.location.href='seminarregister.php';</script>"; 

    }
}

}
else
{
    echo"<script>alert('Incorrect email or password ');</script>";
	echo"<script>window.location.href='seminarregister.php';</script>"; 

}
}
?>