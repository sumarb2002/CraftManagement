  <html lang="en">
  <head>
  <title>Craft Management</title>
 <link rel="stylesheet" href="headstyle.css" />
  </head>
  <body>  
    <nav class="navbar">
      <div class="navbar-container container">
           <div>
              
          </div> 
          <ul class="menu-items">
              <li><a href="reg.php">Add</a></li>
              <li><a href="reg.php">Back</a></li>
              <li><a href="home.html">home</a></li>
          </ul>
          <h1 class="logo" style="position:absolute;left:50px;">Craft Management</h1>
      </div>
  </nav>
  </html>
  <?php
include "db_user.php";
session_start();
error_reporting(0);
$msg = "";
$category=$_POST['cat'];
$pprice=$_POST['price'];
$ppdesc=$_POST['pdesc'];
$qty=$_POST['qty'];
if (isset($_POST['upload']))
 {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;
    $uid=$_SESSION['uid'];
    $_SESSION['uid']=$uid;   
	$sqll="INSERT INTO product(user_id,category,price,pdesc,qty,images) VALUES ('$uid','$category','$pprice','$ppdesc','$qty','$filename')";
	$r=mysqli_query($cn,$sqll);
  //$s="UPDATE stock SET available=".$qty.",total=".$qty." where  category='".$category."'";
 // $s1=mysqli_query($cn,$s);
  echo"<script>alert('product added successfully');</script>";  


    
   $query="select * from product where user_id='".$uid."'";
   
   $rslt=mysqli_query($cn,$query);
   $check=mysqli_num_rows($rslt);
   if($check)
   {
    ?>
   <html>
       <br><br><br><br>
           <section id="craft-menu">
      <h2 class="craft-menu-heading">Craft Selling Products</h2>
      <div class="craft-menu-container container">
    </html>
    <?php
      
       while($row=mysqli_fetch_assoc($rslt))
       {
        

           ?>
       <html>
        <div class="craft-menu-item">
          <div class="craft-img">
            <img src="images/<?php echo $row['images'];?>" alt="" />
          </div>
          <div class="craft-description">
           <h2 ><?php echo "category:".$row['category'];?></h2>
            <h3 ><?php echo "Product ID:". $row['product_id']; ?></h3>
            <h3 ><?php echo "User ID:". $row['user_id']; ?></h3>
            
           <!--  <?php $_SESSION['id']=$row['id'];  ?> -->
            <p>
            <?php echo $row['pdesc'];?>
            </p>
            <p><?php echo "Quantity:". $row['qty'];?> </p>
            <p class="craft-price" style="color:red";>Price:<?php echo "Rs.". $row['price'];?></p>
               
          </div>
        </div>
        </html>
          
       <?php
       }
      }
    }

   

?>
<html>
        
        </section>
                
                
           </form>
    </body>
    </html>
           