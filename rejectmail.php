<?php
include "db_user.php";
//session_start();
$id=$_REQUEST['id'];
 
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
    $id=$_REQUEST['id'];
    $query="select * from user where id='".$id."'";
    $rslt=$cn->query($query);
    while($r=$rslt->fetch_assoc())
    {
        $email=$r['email'];
        $pass=$r['password']; 
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'CRAFT WORLD';
    $mail->Body = 'Congratulations!
    Now you are a approved user in CRAFT WORLD.
    Use these crendentials to login.user email: '.$email.' user password:'.$pass;
    $mail->send();
    }
}    
    
    catch (Exception $e)
    {
        echo"<script>alert('error');
        window.location.href='userapprove.php';
        </script>";
    }

?>
