<?php
session_start();
include 'db_user.php';
	$id=$_REQUEST['id'];
$q="delete from news where news_id='".$id."'";
$re=$cn->query($q);
     echo"<script>alert('news deleted');
    window.location.href='newsview.php';
    </script>";  
?>