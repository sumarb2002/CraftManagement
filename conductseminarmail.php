<?php
include "db_user.php";
  //$file=$_POST['uploadfile'];
 
    $filename = $_FILES["uploadfile"]["name"];

    $tempname = $_FILES["uploadfile"]["tmp_name"];

    $folder = "./image/" . $filename;
    $db = mysqli_connect("localhost", "root", "", "user");
    //$query="select * from admintab;";
  //$rslt=mysqli_query($db,$query);
  //$check=mysqli_num_rows($rslt);
  //if($check)
  // {
      // while($row=mysqli_fetch_assoc($rslt))
      // {
       // "update admintab set topic='".$topic."' where fname='plasma'";
      $qry="UPDATE admintab SET content = '".$filename."' WHERE fname = 'plasma'";
    $rslt=	mysqli_query($db,$qry);
    //echo"<script>alert('Seminar conducted successfully');</script>";

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
    $query="select * from semreg";
    $rslt=$cn->query($query);
    while($r=$rslt->fetch_assoc())
    {
    $mail->addAddress($r['email']);
    $mail->isHTML(true);
    $mail->Subject = 'CRAFT MANAGEMENT';
    $mail->Body = '<h2>Seminar is about to start.</h2><br>
    <h2><b style="color:green;">Kindly '."<a href='localhost/craft/seminarcontent.php'>click here</a>".' to join</b></h2>';
    $mail->send();
    }
    echo"<script>alert('email sent');
    window.location.href='conductseminar.php';
    </script>";
 }  
    
    
    catch (Exception $e)
    {
        echo"<script>alert('Email is not sent because of network issue.Try again');
        window.location.href='conductseminar.php';
        </script>";
    }

?>
