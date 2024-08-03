<?php
session_start();
include 'db_user.php';  
$pid=$_REQUEST['pid'];
$_SESSION['pid']=$pid;
$q1="select * from product where product_id='".$pid."'";
$rslt=$cn->query($q1);
$r=$rslt->fetch_assoc();
$id=$r['user_id'];
$cat=$r['category'];
$qty=$r['qty'];
$qry="UPDATE product SET `status`='true' WHERE product_id = '".$pid."'";
$r=$cn->query($qry);
  $query="select * from stock where category='".$cat."'";
  $rslt=mysqli_query($cn,$query);
  $r=$rslt->fetch_assoc();
	$avail=$r['available']+$qty;
  $total=$r['total']+$qty;
 $qry="UPDATE stock SET available = ".$avail.",total = ".$total."  where `category` = '".$cat."'";
  $rslt=mysqli_query($cn,$qry); 
 include 'C:\xampp\htdocs\craft\papprovemail.php';
?>