<?php
      session_start();
      include "db_user.php";
      $email=	$_SESSION['email'];
      $q="select * from user where email='".$email."'";
      $rslt=$cn->query($q);
      $r=$rslt->fetch_assoc();
      $f=$r['fname'];
      $l=$r['lname'];
      $uid=$r['user_id'];
      $g=$r['gender'];
      $dob=$r['dob'];
      $email=$r['email'];
      ?>
<html lang="en">
  <head>
       <title>Craft Management</title>
       <link rel="stylesheet" href="headstyle.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
                  <ul class="menu-items">
                  <li><a href="bview.php">Back</a></li>
              
          </ul>
          <h1 class="logo">Craft Management</h1>
      </div>
  </nav>

  <style>

    

label{
    background:none;
    color:black;
    font-size: 15px;
    padding:10px;
}   
      
      th{

			width:150px;
			height:50px;
			font-size:25px;
			color:gray;
		}
		td{
			font-size:20px;
			color:gray;
		}
        </style>

  </head>   
  <form style="width:450px;height:520px;text-align:center;background:#E7E8F3;position:absolute;left:440px;top:70px;box-shadow: 0px 5px 10px 0px #aaa;">
        <h2 style="color:green;left:120px;top:10px;position:absolute;font-size:35px;">My Profile</h2><br>
        <hr style="border:1px solid gray;margin-bottom:25px;position:absolute;top:50px;width:450px;">
        <button ><img style="width:100px;border-radius:50%;position:absolute;top:70px;left:160px;" src="images/1682530252600.jpg"></button>
        <label style="position:absolute;top:200px;left:30px;"><b>User ID</b></label>
        <label style="position:absolute;top:225px;left:180px;"><b><?php echo $uid; ?></b></label>
        <label style="position:absolute;top:250px;left:30px;"><b>First name</b></label>
        <label style="position:absolute;top:275px;left:180px;"><b><?php echo $f; ?></b></label>
        <label style="position:absolute;top:300px;left:30px;"><b>Last name</b></label>
        <label style="position:absolute;top:325px;left:180px;"><b><?php echo $l; ?></b></label>
        <label style="position:absolute;top:350px;left:30px;"><b>Gender</b></label>
        <label style="position:absolute;top:375px;left:180px;"><b><?php echo $g; ?></b></label>
        <label style="position:absolute;top:400px;left:30px;"><b>Date of birth</b></label>
        <label style="position:absolute;top:425px;left:180px;"><b><?php echo $dob; ?></b></label>
        <label style="position:absolute;top:450px;left:30px;"><b>Email ID</b></label>
        <label style="position:absolute;top:475px;left:180px;"><b><?php echo $email; ?></b></label>
     
      </form>
  </body>
</html>
