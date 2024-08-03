  <?php
  $db = mysqli_connect("localhost", "root", "", "user");
  $query="select * from admintab;";
  $rslt=mysqli_query($db,$query);
  $check=mysqli_num_rows($rslt);
  if($check)
   {   
       while($row=mysqli_fetch_assoc($rslt))
       {
  ?>
  <html>
      <head>
            <link rel="stylesheet" href="styles.css" />
      </head>
           
      <video autoplay loop muted src="IMAGES/<?php echo $row['content'];?>" style="position:fixed;left:-120px;top:0px;bottom:0px;min-width:90%;max-height:100%;">
       
      </video>   
      </html>
      <?php
       }
      }
      ?> 
       </body>
       <a href='home.html' class="btn btn-primary" style="position:absolute;left:1300px;bottom:350px;background:blue;width:100px;">LEAVE</a><br><br> 
       </html>