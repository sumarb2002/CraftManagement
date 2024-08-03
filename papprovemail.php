<?php
include "db_user.php";
session_start();
$pid=$_SESSION['pid'];
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 $mail = new PHPMailer(true);
 try
{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'plasmap2023@gmail.com';
    $mail->Password = 'zriypknlmxloclnz';
    $mail->SMTPSecure = 'tls';
    $mail->Port =587;
    $mail->setFrom('plasmap2023@gmail.com');
    $query1="select * from product where product_id='".$pid."'";
    $rslt1=$cn->query($query1);
    $r1=$rslt1->fetch_assoc();
    $uid=$r1['user_id'];
    $query2="select * from user where user_id='".$uid."'";
    $rslt2=$cn->query($query2);
    $r2=$rslt2->fetch_assoc();
     $email=$r2['email'];
     $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'CRAFT MANAGEMENT';
    $mail->Body = '<h1><b style="color:green;">Congratulations!</b></h1><br>
   <h2>Your product with product id<b style:"color:red;"> '.$pid.'</b> is  approved</h2> ';
    $mail->send();
    echo"<script>alert('product $pid is approved');
    window.location.href='productapprove.php';
    </script>";
       
 }  
    
    
    catch (Exception $e)
    {
        echo"<script>alert('Email is not sent because of network issue.but product is approved');
        window.location.href='productapprove.php';
        </script>";
    }

?>
