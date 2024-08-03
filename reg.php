    
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
              <li><a href="newsview1.php">News</a></li>
              <li><a href="pro1.php">Profile</a></li>
              <li><a href="productdetails.php">Product Details</a></li>
              <li><a href="home.html">home</a></li>
          </ul>
          <h1 class="logo" style="position:absolute;left:50px;">Craft Management</h1>
      </div>
  </nav>
  </html>
   
     <html>

     <style type="text/css">
        *{
            text-align:center;
        }
       * {
            box-sizing:border-box
        }
        .lbl
        {
            font-size:20px;
        font-family:sans-serif;
        }

        .sel
        {
            width:100%;
            padding:15px;
            margin:5px 0 22px 0;
            display:inline-block;
            border:none;
            background:white;

        }
        .container
        {
            padding:16px;
        }
        input[type=text],input[type=password],input[type=number],input[type=email],input[type=file],input[type=submit]
        {
            width:100%;
            padding:15px;
            margin:5px 0 22px 0;
            display:inline-block;
            border:none;
            background:white;
            
        }
        hr
        {
            border:1px solid rgb(139, 136, 136);
            margin-bottom:25px;
        }
		
		
        .regbtn
        {
            background-color: rgb(30, 84, 85);
            color: black;
            padding: 16px 20px;
            margin: 8px 0;
            border:none;
            cursor:pointer;
            width:100%;
            opacity:0.9;
        }
       .regbtn:hover
        {
            opacity: 1;
        }
        div
        {
            margin: auto;
            align-self: center;
            text-align: center;
            height:fit-content;
            width:500px;
            background-color:none;
        }
       

    </style>
    <body><br><br><br><br>
    <form  action="add.php" aria-setsize="2" method="POST" enctype="multipart/form-data" style="position:absolute;left:450px;width:500px;align-self:center;text-align:center;">
            <div class="container" style="background:rgb(219,218,218);border:2px solid black;">
                <h1>ADD PRODUCT</h1><br>
                <hr>
                <?php
                session_start();
                include "db_user.php";
                $email=	$_SESSION['email'];
                $q="select * from user where email='".$email."'";
                $rslt=$cn->query($q);
                
                while($r=$rslt->fetch_assoc())
                {
                $uid=$r['user_id'];
                           
                }
                             
               echo " <div class='lbl'>";
                echo "<label ><b>USER ID : </b></label>";
                echo "<label>   $uid  </b></label><br><br>";
                $_SESSION['uid']=$uid;
                echo " </div>";
                 ?>
                <label><b>Category</b></label><br>
                <div class="sel">
                Select A Proper Category 
                <select  name="cat">
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
                    </div>
            <br><br>
                <label for="price"><b>Price</b></label>
                <input type="text" name="price" id="price" required><br>
                <label for="pdesc"><b>Product description</b></label>
                <input type="text" name="pdesc" id="pdesc" required><br>
                <label><b>Quantity</b></label>
                <input type="text" name="qty" id="qty" required><br>
                <input class="form-group" type="file" name="uploadfile" value="" />
      			<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>  
        </form>
    </body>
</html>