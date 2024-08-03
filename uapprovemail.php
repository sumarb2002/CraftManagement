<?php
include "db_user.php";
session_start();
$id=$_SESSION['user_id'];
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
    $id=$_SESSION['user_id'];
    $query="select * from user where user_id='".$id."'";
    $rslt=$cn->query($query);
    while($r=$rslt->fetch_assoc())
    {
        $email=$r['email'];
        $pass=$r['password']; 
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'CRAFT MANAGEMENT';
    $mail->Body ='<h1><b style="color:green;">Congratulations!</b></h1><br>
    <h4>Now you are a approved user in CRAFT MANAGEMENT.</h4><br>
    <h2> Use these crendentials to login.</h2><br><h3><b style="color:red;"> user email: '.$email.'<br>
    user password:</b><b style="color:blue;">'.$pass;
    $mail->send();
    }
}    
    
    catch (Exception $e)
    {
        echo"<script>alert('Email is not sent because of network issue.');</script>";
    }
?>
