<?php
session_start();
include 'db_user.php';
$pid=$_REQUEST['pid'];
$_SESSION['pid']=$pid;
$q="delete from product where product_id='".$pid."'";
$re=$cn->query($q);
if($re)
{
   // include 'C:\xampp\htdocs\craft\prejectmail.php';
   echo"<script>alert('product  $pid  rejected.');
    window.location.href='productapprove.php';
     </script>";   
}
else
{
    echo"<script>alert('error in rejection');
    window.location.href='aview.php';
    </script>";
}

?>