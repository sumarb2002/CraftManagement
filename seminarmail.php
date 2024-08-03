<?php
session_start();
include "db_user.php";
  $topic=$_POST['topic'];
  $SESSION['topic']=$_POST['topic'];
    $date=$_POST['date1'];
    $time=$_POST['time']; 

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
    $qry="UPDATE admintab set topic = '".$topic."' WHERE fname = 'plasma'";
    $rslt=	mysqli_query($cn,$qry);
    $query="select * from user where status='true'";
    $rslt=$cn->query($query);
    while($r=$rslt->fetch_assoc())
    {
    $mail->addAddress($r['email']);
    $mail->isHTML(true);
    $mail->Subject = 'CRAFT MANAGEMENT';
    $mail->Body = '<h1><b style="color:green:">Heartly welcome to all.</b></h1>
    <h3>CRAFT MANAGEMENT is conducting a seminar regarding " '.$topic.' "on date '.$date.' at time '.$time.' .</h3><br>
    <h2>Click here to  '."<a href='localhost/craft/seminarregister.php'>register</a></h2>";
    $mail->send();
    }
    echo"<script>alert('email sent');
    window.location.href='seminar.php';
    </script>";
 }  
    
    
    catch (Exception $e)
    {
        echo"<script>alert('Email is not sent because of network issue.Try again');
        window.location.href='seminar.php';
        </script>";
    } 

?>
 Heartly welcome to all. 
