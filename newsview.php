<html lang="en">
  <head>
   
    <title>Craft Management</title>
   
    <link rel="stylesheet" href="headstyle.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
           <ul class="menu-items">
          <li><a href="addnews.php">Addnews</a></li>
          <li><a href="deletenews.php">Deletenews</a></li>
              <li><a href="aview.php">Back</a></li>  
              <li><a href="home.html">Home</a></li>      
          </ul>
          <h1 class="logo">Craft Management</h1>
      </div>
  </nav>
</body>
  </html>
  <?php
session_start();
$db = mysqli_connect("localhost", "root", "", "user"); 
      $query="select * from news";
      $rslt=mysqli_query($db,$query);
      $check=mysqli_num_rows($rslt);
      ?>
      <html>
          <br><br><br><br>
            <h2 class="craft-menu-heading">News</h2>
         <div class="craft-menu-container container"><br>
        </html>
       <?php
      if($check)
      {
          while($row=mysqli_fetch_assoc($rslt))
          {
           ?>
          <html>
           <form action="" method="POST">  
           <div class="craft-menu-item" style="border:2px solid white;background:#F5F0F2;"><br>
             <div class="craft-img">
               <img style="border-radius:0px;padding:20px;" src="images/<?php echo $row['news_image'];?>" alt="" />
             </div>
             <div class="craft-description">
               <p>
            
               <?php echo $row['news_content'];?>
               </p>
              
              </div>
           </div>
       </form>
           </html>
           <?php
          }
       }
   ?>
    <html>
         </form>
       </body>
       </html>
