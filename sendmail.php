<?php
include "db_user.php";
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
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = 'CRAFT MANAGEMENT';
    $mail->Body = "<h1 style='color:green;'><b>THANK YOU FOR REGISTRATION.</b></h1>
    <br><h4>YOU WILL BE INFORMED FURTHER ABOUT YOUR LOGIN PROCESS</h4></html>";
    $mail->send();
    
    echo"<script>alert('registartion successful');
    window.location.href='registerpage.php';
    </script>";
 }  
    
    
    catch (Exception $e)
    {   echo"<script>alert('Email is not sent because of network issue.But registration is successful.');
        window.location.href='registerpage.php';
        </script>";
    }

?>
