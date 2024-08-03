<?php
session_start();
include "db_user.php";
$query="select topic from admintab ";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
$topic=$r['topic'];
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<body>
    <form style="left:200px;align-self:center;position:absolute;background:wheat;">
        <div style="width:800px;height:400px;padding:20px;text-align:center;border:10px solid #787878;">
        <div style="width:750px;height:350px;padding:20px;text-align:center;border:5px solid #787878;">
        <span style="font-size:50px;font-weight:bold">Certificate for conducting seminar</span>
        <br><br>
        <span style="font-size:25px;"><i>This is to certify that</i></span>
        <br><br>
        <span style="font-size:30px"><b> <?php echo $_SESSION['name']; ?></b></span><br/><br/>
        <span style="font-size:25px;"><i>has attended the seminar</i></span><br/><br/>
        <span style="font-size:25px;"><i>on the topic  <?php echo $topic; ?> </i></span><br/><br/>
        <span style="font-size:30px;">conducted by the plasmap company.</span><br/><br/>
</div>
</div>
</form>
    </body>
</html>