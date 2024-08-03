<html lang="en">
  <head>
  
    <title>Craft Management</title>
    
	<link rel="stylesheet" href="headstyle.css" />
    <style>
        
        th{
			width:150px;
			height:50px;
			font-size:25px;
			color:whitesmoke;
		}
		td{
			font-size:20px;
			color:whitesmoke;
		}
        </style>

  </head>
  
    
  </html>
  <?php
include "db_user.php";
session_start();

$qty=$_POST['qty'];
$pid=$_SESSION['pid'];
$query="select * from productap where pid='".$pid."'";
$rslt=mysqli_query($cn,$query);
$r=$rslt->fetch_assoc();
$cat=$r['category'];
if($qty>$r['qty'])
{
    echo "quantity is more";
}
else
{
    $q=$r['qty']-$qty;
    $avail=$r['available']-$qty;
    $sold=$r['sold']+$qty;
    $query="update productap set  available=".$avail." where category='".$cat."'";
    $rslt=mysqli_query($cn,$query);
    $query="update productap set qty=".$q.",sold=".$sold." where pid='".$pid."'";
    $rslt=mysqli_query($cn,$query);
   
        
   $query="select * from productap where pid='".$pid."'";
   $rslt=mysqli_query($cn,$query);
   $check=mysqli_num_rows($rslt);

   if($check)
   {
       while($row=mysqli_fetch_assoc($rslt))
       {
        
           ?>
       <html>
       <form style="width:500px;text-align:center;border:5px solid black;height:500px;background:#666;position:absolute;left:350px;top:50px;">
        <h2 style="color:whitesmoke;left:100px;top:10px;position:absolute;font-size:35px;">Craft Management</h2>
        <table border='2' cellpadding='3' cellspacing='0' style="position:absolute;left:50px;top:150px;width:80%;background:#555">
<tr><th>User ID</th><th><?php echo  $row['id']; ?></th></tr>
<tr><th>Product ID</th><th><?php echo  $row['pid']; ?></th></tr>
<tr><th>Category</th><th><?php echo  $row['category']; ?></th></tr>
<tr><th>Quantity</th><th><?php echo $qty ?></th></tr>
<tr><th>Paid Amount</th><th>1200</th></tr>
       </table>

       </form>
        </html>
        <?php
       }
    }
}

?>

       
