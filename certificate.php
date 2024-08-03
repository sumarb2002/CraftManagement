<?php
session_start();
include "db_user.php";
$query="select topic from admintab ";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
$topic=$r['topic'];
//$email=$_SESSION['email'];
$name=$_SESSION['name'];
//$topic=$_SESSION['topic'];
?>
<!DOCTYPE html>
<head>
       <title>Craft Management</title>
       <link rel="stylesheet" href="headstyle.css" />
  </head>
<body>
<nav class="navbar">
      <div class="navbar-container container">
         
          <div >
             
          </div>
          <ul class="menu-items">         
              <li><a href="home.html">Home</a></li>               
          </ul>
          <h1 class="logo" style="position:absolute;left:30px;">Craft Management</h1>
      </div>
  </nav><br><br><br><br>
    <form style="left:250px;align-self:center;position:absolute;background:wheat;">
        <div style="width:800px;height:500px;padding:20px;text-align:center;background:green;">
        <div style="width:750px;height:450px;padding:20px;text-align:center;background:white;border-radius:10%;">
        <img src="images/logo.jpg" style="width:100px;">
        <div>
        <span style="font-size:50px;font-weight:bold">Certificate for participating in seminar</span>
</div>
        <br><br>
        <span style="font-size:25px;"><i>This is to certify that <b><?php echo $_SESSION['name']; ?></b></i></span>
        <span style="font-size:25px;"><i>has attended the seminar</i></span><br/><br/>
        <span style="font-size:25px;"><i>on the topic of <b><?php echo $topic; ?></b> </i></span><br/><br/>
        <span style="font-size:30px;">conducted by  <b>CRAFT MANAGEMENT</b>.</span><br/><br/>
</div>
</div>
</form>
</body>
</html>