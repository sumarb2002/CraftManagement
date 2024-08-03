<?php
session_start();
include "db_user.php";
$email=$_POST['email'];
  $pass=$_POST['pass'];
  if(empty($email)){
    header("Location:regcertificate.php?error=email is required");
    exit();
}
else if(empty($pass)){

    header("Location:regcertificate.php?error=Password is required");
    exit();
}
else{
    @$cn=new mysqli('localhost','root','','user');
if(mysqli_connect_errno())
{
echo"Could not connect";
exit;
}

    $query="select * from semreg where email='".$email."' and password='".$pass."' and status='Yes'";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
if($r)
{
    $_SESSION['name']=$r['name'];
    $_SESSION['email']=$r['email'];  
    $s="delete from semreg where email='".$r['email']."'";
    $rslt=$cn->query($s);
    echo"<script>window.location.href='certificate.php';</script>";  
}
else
{
    echo"<script>alert('Incorrect email or password ');</script>";
	echo"<script>window.location.href='regcertificate.php';</script>"; 

}
}
?>