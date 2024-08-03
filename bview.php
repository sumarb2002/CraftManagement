<html lang="en">
  <head>
  
    <title>Craft Management</title>
    <link rel="stylesheet" href="headstyle.css" />
    <style>
       .sel
        {
            width:30%;
            padding:15px;
            margin:5px 0 22px 0;
            display:inline-block;
            border:none;
            background:white;
            position:absolute;
            left:400px;

        }
      </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
   
         
          <ul class="menu-items">
          <li><a href="purchase.php">Purchase</a></li>
              <li><a href="newsview2.php">News</a></li>
              <li><a href="pro2.php">Profile</a></li>
              <li><a href="home.html">home</a></li>    
               </ul>
          <h1 class="logo">Craft Management</h1>
          <form class="sel" action="search2.php" method="POST" style="background:none;" >


          <div >
                
                <select  name="cat" style="width:230px;position:absolute;left:150px;top:8px;">
                <option>clay pottery</option>
               <option>wood carving</option>
               <option>weaving</option>
               <option>bamboo handicraft</option>
               <option>jewellary</option>
               <option>jute handicraft</option>
               <option>leather handicraft</option>
               <option>embroidary</option>
               <option>paper craft</option>
               <option>woolen</option>
               </select>
               <input class="btn btn-primary" style="position:absolute;left:390px;top:-10px;" type="submit" value="search" >
          </div>                                                                                                                                                                                                                    
         
</form>
      </div>
  </nav>
  </html>
<?php
session_start();
$email=$_SESSION['email'];
$_SESSION['email']=$email;

$db = mysqli_connect("localhost", "root", "", "user");

   $query="select * from product where status='true';";
   $rslt=mysqli_query($db,$query);
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
            <h2 class="craft-titile"><?php echo $row['category'];?></h2>
            <h3 ><?php echo "Product ID:". $row['product_id']; ?></h3>
            <p>
            <?php echo $row['pdesc'];?>
            </p>
            <p><?php echo "Quantity:". $row['qty'];?> </p>
            <p class="craft-price">Price:<?php echo "Rs.". $row['price'];?></p>
           
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
       