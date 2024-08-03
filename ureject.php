<?php
session_start();
include 'db_user.php';
	$id=$_REQUEST['user_id'];
	$_SESSION['user_id']=$id;
$q="delete from user where user_id='".$id."'";
$re=$cn->query($q);
//include 'C:\xampp\htdocs\craft\urejectmail.php';
      echo"<script>alert('user  $id rejected.');
    window.location.href='userapprove.php';
    </script>"; 
/*}
else
{
    echo"<script>alert('error in rejection');
    window.location.href='userapprove.php';
    </script>";
}*/

?>