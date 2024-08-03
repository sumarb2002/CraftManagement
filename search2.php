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
include 'db_user.php';
$email=$_SESSION['email'];
$_SESSION['email']=$email;
$cat=$_POST['cat'];
   $query="select * from product where category='".$cat."'and status='true'";
   $rslt=mysqli_query($cn,$query);
   $check=mysqli_num_rows($rslt);
   ?>
   <html>
       <br><br><br><br>
           <section id="craft-menu">
      <h2 class="craft-menu-heading">Craft Selling Products</h2>
      <div class="craft-menu-container container">
    </html>
    <?php
   if($check)
   {
       while($row=mysqli_fetch_assoc($rslt))
       {
        
           ?>
       <html>
        <div class="craft-menu-item">
          <div class="craft-img">
            <img src="images/<?php echo $row['images'];?>" alt="" />
          </div>
          <div class="craft-description">
            <h3 ><?php echo "Product ID:". $row['product_id']; ?></h3>
            <h3 ><?php echo "User ID:". $row['user_id']; ?></h3>
            <h3 ><?php echo "Category:". $row['category']; ?></h3>
            <p>
            <?php echo $row['pdesc'];?>
            </p>
            <p><?php echo "Quantity:". $row['qty'];?> </p>
            <p class="craft-price" style="color:red";>Price:<?php echo "Rs.". $row['price'];?></p>
          <?php echo "<th><a class='btn btn-primary' href='buy.php?pid=".$row['product_id']."'>Buy</a></th>";?>
      
          </div>
        </div>
        </html>
        <?php
       }
    }
?>
<html>
   </section>            
   </form>
</body>
</html>
       