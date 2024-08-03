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
              <li><a href="home.html">home</a></li>  
          </ul>
          <h1 class="logo">Craft Management</h1>
      </div>
  </nav>
  </html>
<?php
session_start();
include "db_user.php";
$email=$_SESSION['email'];
$_SESSION['email']=$email;
$pid=$_SESSION['pid'];
$q=$_POST['qty'];
$query="select * from product where product_id='".$pid."'";
$rslt=$cn->query($query);
$r1=$rslt->fetch_assoc();
$id=$r1['user_id'];
$cat=$r1['category'];
$qty=$r1['qty']-$q;
$p=$r1['price'];
$t=$q*$p;
$gt=$t+60;
if($qty<0||$q<0)
{
    echo "<script>alert('enter valid quantity');
    window.location.href='bview.php'</script>";
}
else
{
    $qry="UPDATE product SET qty = ".$qty." where  product_id='".$pid."'";
    $rslt=mysqli_query($cn,$qry);   
$query="select * from stock where category='".$cat."'";
$rslt=$cn->query($query);
$r2=$rslt->fetch_assoc();
$avail=$r2['available']-$q;
$sold=$r2['sold']+$q;
$qry="UPDATE stock SET available = ".$avail.",sold = ".$sold."  where `category` = '".$cat."'";
$rslt=mysqli_query($cn,$qry); 
$query="select * from user where email='".$email."'";
$rslt=$cn->query($query);
$r=$rslt->fetch_assoc();
}
?>

<html lang="en">
  <head>
  
    <title>Craft Management</title>
    
    <style>
        
        th{
			width:250px;
			height:20px;
			font-size:15px;
			color:black;
		}
		td{
			font-size:20px;
			color:whitesmoke;
		}
        </style>

  </head>
  
    
  </html>
<html>
    <body style="background:#e5e2e2;"><br>
    <form style="width:600px;text-align:center;height:560px;background: white;position:absolute;left:470px;top:80px;">
     <h2 style="color:black;left:30px;top:30px;position:absolute;font-size:35px;"><b>Craft Management</b></h2>
     <hr style="width:550px;height:5px;left:25px;top:100px;position:absolute;background:grey;">
     
<h3 style="position:absolute;top:120px;left:70px;">Billing Information</h3><h3 style="position:absolute;top:120px;left:370px;">Shipping Information</h3></th></tr>

<h4 style="position:absolute;top:140px;left:70px;">Company</h4><h4 style="position:absolute;top:140px;left:370px;">Name</h4></th></tr>
<label style="position:absolute;top:160px;left:70px;">craft management</label><label style="position:absolute;top:160px;left:370px;"><?php echo $r['fname']?></label>
<h4 style="position:absolute;top:180px;left:70px;">Email</h4> <h4 style="position:absolute;top:180px;left:370px;">Email</h4>
<label style="position:absolute;top:200px;left:70px;">plasmap2023@gmail.com</label><label style="position:absolute;top:200px;left:370px;"><?php echo $r['email']?></label>
<hr style="width:550px;height:2px;left:25px;top:250px;position:absolute;background:grey;">

<h3 style="position:absolute;top:260px;left:70px;">Products</h3>
<table border="0" style="position:absolute;top:300px;left:25px;width:550px;">
    <tr style="background:grey;height:30px;"><th>Category</th><th>Quantity</th><th>Unit Price</th></tr>
    <tr><th><?php echo $cat?></th><th><?php echo $q?></th><th><?php echo $p?></th></tr>
</table>
<hr style="width:550px;height:0px;left:25px;top:360px;position:absolute;background:grey;">
<table border="0" style="position:absolute;top:370px;left:25px;width:550px;">
    <tr><th></th><th>SubTotal</th><th>Rs.<?php echo $t?></th></tr>
    <tr><th></th><th>Shipping</th><th>Rs.60</th></tr>
    <tr><th></th><th>Tax</th><th>Rs.0</th></tr>
</table>
<hr style="width:550px;height:2px;left:25px;top:440px;position:absolute;background:grey;">
<table border="0" style="position:absolute;top:450px;left:25px;width:550px;">
    <tr><th></th><th><h4 style="font-size:20px;">Grand Total</h4></th><th><h4 style="font-size:20px;">Rs.<?php echo $gt?></h4></th></tr>
    
</table>
<hr style="width:550px;height:2px;left:25px;top:490px;position:absolute;background:grey;">
<h4 style="font-size:30px;left:150px;top:500px;position:absolute;">Thank You,Buy Again.</h4>
    </form>
</body>
     </html>