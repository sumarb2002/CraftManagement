<html lang="en">
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
          
              <li><a href="reg.php">Back</a></li>
              <li><a href="home.html">Home</a></li>
          </ul>
          <h1 class="logo" style="position:absolute;left:30px;">Craft Management</h1>
      </div>
  </nav>
  </html>
<?php
session_start();
include 'db_user.php';
$uid=$_SESSION['uid'];
   $query="select * from product where user_id='".$uid."'";
   $rslt=mysqli_query($cn,$query);
   $check=mysqli_num_rows($rslt);
   ?>
   <html>
       <br><br><br><br>
           <section id="craft-menu">
      <h2 class="craft-menu-heading"></h2>
      <div class="craft-menu-container container">
    </html>
    <?php
   if($check)
   {
       while($row=mysqli_fetch_assoc($rslt))
       {
        
           ?>
       <html>
         <head>
           
       </head>
        <div class="craft-menu-item">
          <div class="craft-img">
            <img src="images/<?php echo $row['images'];?>" alt="" />
          </div>
          <div class="craft-description">
           <h3 ><?php echo "Product ID:". $row['product_id']; ?></h3>
        <p><?php echo "Category:". $row['category'];?> </p>
            <p><?php echo $row['pdesc'];?> </p>
            <p><?php echo "Quantity:". $row['qty'];?> </p>
            <p class="craft-price">Price:<?php echo "Rs.". $row['price'];?></p>
            <?php echo "<a class='btn btn-primary' href='product.php?pid=".$row['product_id']."'>MODIFY</a>";?>
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
       
