<html lang="en">
  <head>
  
    <title>Craft Management</title>
    <link rel="stylesheet" href="headstyle.css" />
    
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
          <ul class="menu-items">
          <li><a href="reg.php">Add</a></li>
              <li><a href="newsview1.php">News</a></li>
              <li><a href="productdetails.php">Product Details</a></li>
              <li><a href="home.html">home</a></li>           
          </ul>
          <h1 class="logo">Craft Management</h1>
      </div>
  </nav>
  </html>
<?php
include 'db_user.php';
session_start();
$pid=$_GET['pid'];
	$_SESSION['pid']=$pid;
   $query="select * from product where product_id='".$pid."'";
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
             <style>
                 .btn {
  display: inline-block;
  padding: 0.5em 1.5em;
  text-decoration: none;
  border-radius: 50px;
  cursor: pointer;
  outline: none;
  margin-top: 1em;
  text-transform: uppercase;
  font-weight: small;
  position:absolute;
  left:830px;
  top:400px;
}
.btn-primary {
  color: #fff;
  background: #16a083;
}

.btn-primary:hover {
  background: #117964;
  transition: background 0.3s ease-in-out;
}
                 </style>

           
       </head>
        <div class="craft-menu-item">
          <div class="craft-img">
            <img src="images/<?php echo $row['images'];?>" alt="" />
          </div><br>
         <p> <div class="craft-description">
            <h3 ><?php echo "Product ID:". $row['product_id']; ?></h3>
            <p><?php echo $row['pdesc'];?></p>
             <h3 ><?php echo "Product Quantity:". $row['qty']; ?></h3>

            <p class="craft-price">Price:<?php echo "Rs.". $row['price'];?></p>
           <br><br>
           <form action="modify.php" method="POST">
           <label><b>Enter quantity to modify</label>
           
<input style="
    display:block;
    border:2px solid;
     width:200px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;
     position:absolute;top:330px;" type="text" name="qty" id="qty">
</div>
 <input class='btn btn-primary' type="submit" value="MODIFY" ></input>

           </form>
          </div>
        </div>
        <div>

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

       
