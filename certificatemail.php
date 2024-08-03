<?php
include "db_user.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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
    $query="select * from semreg where status='Yes'";
    $rslt=$cn->query($query);
    while($r=$rslt->fetch_assoc())
    {
    $mail->addAddress($r['email']);
    $mail->isHTML(true);
    $mail->Subject = 'CRAFT MANAGEMENT';
    $mail->Body = '<h1><b style="color:green;">Congratulations!</b></h1><br>
    <h2 style="color:black;">Claim here your seminar certificate '."<a href='localhost/craft/regcertificate.php'> claim </a>".'</h2>';
    $mail->send();
    }
    echo"<script>alert('email sent');
    window.location.href='generate.php';
    </script>";
 }  
    
    
    catch (Exception $e)
    {
        echo"<script>alert('Email is not sent because of network issue.Try again');
        window.location.href='generate.php';
        </script>";
    }

?>
