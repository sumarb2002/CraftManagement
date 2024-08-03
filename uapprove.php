<?php
session_start();
include 'db_user.php';
	$id=$_GET['user_id'];
	$_SESSION['user_id']=$id;
	$qry="UPDATE user SET `status`='true' WHERE user_id = '".$id."'";
	$rslt=$cn->query($qry);
//$r=$rslt->fetch_assoc(); 
include 'C:\xampp\htdocs\craft\uapprovemail.php';
	echo"<script>alert('user ".$id." approved');
    window.location.href='userapprove.php';
    </script>";
?>