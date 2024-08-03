<?php
session_start();
include "db_user.php";
$pid=$_SESSION['pid'];
$q=$_POST['qty']; 
    $query="select * from product where product_id='".$pid."'";
    $rslt=mysqli_query($cn,$query);
    $r=$rslt->fetch_assoc();
    $cat=$r['category'];
    $s=$r['qty']+$q;
    if($s<0)
    {
      echo "<script>alert('enter valid quantity');
      window.location.href='productdetails.php'</script>";
    }
    else
    {
      if($r['status']=="false")
      {
        $qry="UPDATE product SET qty = ".$s." where  product_id='".$pid."'";
        $rslt=mysqli_query($cn,$qry);
        echo "<script>alert('quantity updated successfully');
        window.location.href='productdetails.php'</script>";
      }
      else
      {
    $query1="select * from stock where category='".$cat."'";
    $rslt=mysqli_query($cn,$query1);
    $r1=$rslt->fetch_assoc(); 
    $avail=$r1['available']+$q;
    $total=$r1['total']+$q;
    $qry="UPDATE stock SET available=".$avail.",total=".$total." where  category='".$cat."'";
    $rslt=mysqli_query($cn,$qry);
    $qry="UPDATE product SET qty = ".$s." where  product_id='".$pid."'";
    $rslt=mysqli_query($cn,$qry);
    echo "<script>alert('quantity updated successfully');
   window.location.href='productdetails.php'</script>";
      }
    }

?>
