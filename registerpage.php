<html lang="en">
  <head>
       <title>Craft Management</title>
       <link rel="stylesheet" href="headstyle.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
                  <ul class="menu-items">
              <li><a href="home.html">Home</a></li>
              <li><a href="loginpage.php">Login</a></li>
          </ul>
          <h1 class="logo">Craft Management</h1>
      </div>
  </nav>
  
<style>
    *{
    font-family: sans-serif;
    box-sizing: border-box;
}

label{
    color:black;
    font-size: 20px;
    padding:10px;
}
.error{
    display: block;
    border:2px solid;
    background: rgba(243, 243, 243);
    color: rgb(246, 3, 11);
    padding:10px;
    width:95%;
    border-radius: 5px;
}
.scroll-bg{
    
   /*color:#BD7BFF ;*/
    width:460px;
    margin:10% auto;
}


</style>
</head>
<body style="rgba(243, 243, 243)">
<form  style=" width: 580px;
    border:#f5f5f7;
    padding: 30px;
    background: rgb(219, 218, 218);
    left: 400px;
    position:absolute;
    top:100px;
    border-radius: 15px;
    justify-content:center;
    align-items:center;" 
 action="register.php" method="POST">
<h1 style="text-align: center;">REGISTER</h1>
<?php if (isset($_GET['error'])) { ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>

<div class="scroll-bg">
   
        <div class="scroll-object">
                            <label for="fname"><b>First Name</label>
                <input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="text" name="fname" id="fname" placeholder="user first name"><br>
            
                
                <div>
                <label for="lname">Last Name</label>
                <input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;"  type="text" name="lname" id="lname" placeholder="user last name"><br>
                </div>
                
                <div>
                <label for="dob"> Date of Birth</label>
                <input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="date" name="date1" id="date1" placeholder="Date Of Birth"><br>
                </div>
                
            <div>
                <label>Gender</label><br>
            </div>

            <div>
            <input type="radio" name="gender"  value="male">Male
              <br><input  type="radio" name="gender" value="female">Female
               <br> <input type="radio"  name="gender" value="other">Other
 
</div>
                
                <br>
                <div>
                <label >Email</label>
                <input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="email" name="email" id="email" placeholder="user email"><br>
                </div>
                
                <div>
                <label for="password">Password</label>
                <input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;"  type="password" name="password" id="password" placeholder="user password"><br>
                </div>
                
                <div>
                <label for="rpassword">Repeat Password</label>
                <input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="password" name="rpassword" id="rpassword" placeholder="Re-enter password"><br>
                </div>
                
                
        </div>
    
</div>
    


<button class="btn btn-primary" style="left:200px;position:absolute;width:200px;background:blue;bottom:50px;">REGISTER</button>


</form>
</body>
</html>