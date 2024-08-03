

<?php
session_start();
include "db_user.php";
$email=$_POST['email'];
  $pass=$_POST['pass'];
  if(empty($email)){
    header("Location:seminarregister.php?error=email is required");
    exit();
}
else if(empty($pass)){

    header("Location:seminarregister.php?error=Password is required");
    exit();
}
else{
    @$cn=new mysqli('localhost','root','','user');
if(mysqli_connect_errno())
{
echo"Could not connect";
exit;
}

    $query="select * from semreg where email='".$email."' and password='".$pass."'";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
if($r)
{
    $_SESSION['name']=$r['fname'];
   echo"<script>alert('joined for seminar ');</script>";
   $query="update semreg set status='Yes' where email='".$email."'";
   $rslt=$cn->query($query);
      if($rslt)
   {
  	echo"<script>window.location.href='semvideo.php';</script>"; 

   }
  
   
}
else
{
    echo"<script>alert('Incorrect email or password ');</script>";
	echo"<script>window.location.href='seminarcontent.php';</script>"; 

}
}
?>