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
            
              <li><a href="home.html">home</a></li>
          </ul>
          <h1 class="logo" style="position:absolute;left:50px;">Craft Management</h1>
      </div>
  </nav>
</body>
  </html>
  <?php
session_start();
//include 'db_user.php';
error_reporting(0);
 




// If upload button is clicked ...



    $db = mysqli_connect("localhost", "root", "", "user");
 

    // Get all the submitted data from the form

   
 

    // Execute query

   
	
    
    //display message

        
 

    // Now let's move the uploaded image into the folder: image

   //if (move_uploaded_file($tempname, $folder)) {

   //     echo "<h3>  Image uploaded successfully!</h3>";

   // } else {

   //     echo "<h3>  Failed to upload image!</h3>";

   // }
   


   
   
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
           $_SESSION['news_id']=$row['news_id'];
              ?>
          <html>
           <form action="ndel.php" method="POST">  
           <div class="craft-menu-item" style="border:2px solid white;background:#F5F0F2;"><br>
             <div class="craft-img">
               <img style="border-radius:0px;padding:20px;" src="images/<?php echo $row['news_image'];?>" alt="" />
             </div>
             <div class="craft-description">
               <p>
            
               <?php echo $row['news_content'];?>
               </p>
<!-- <input class="btn btn-primary" type="submit" value="delete">
 -->              
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
