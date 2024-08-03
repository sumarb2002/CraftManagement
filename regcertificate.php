<html lang="en">
  <head>
    <title>Craft Management</title>
       <link rel="stylesheet" href="headstyle.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="ex1.html">Home</a></li>
                       </ul>
          <h1 class="logo" style="position:absolute;left:100px;">Craft Management</h1>
      </div>
  </nav>
  
<style>

    .error{
    display: block;
    border:2px solid;
    background: rgb(219, 218, 218);
    color: rgb(246, 3, 11);
    padding:10px;
    width:95%;
    border-radius: 5px;
}

label{
    background:rgb(219, 218, 218);
    color:black;
    font-size: 15px;
    padding:10px;
}   


</style>
</head>
<body style="rgba(243, 243, 243)">
<form style="
position:absolute;
left:440px;
top:150px;
     width: 500px;
     border:#F5F0F2;
     padding: 30px;
    background: rgb(219, 218, 218);
    border-radius: 15px;" action="regcertificate2.php" method="POST">
    <h1 style="text-align: center;">Get Certificate</h1><br>
   
<div>
<label for="email">Email</label>
<input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="email" name="email" id="email">
</div>

<div>
<label for="pass">Password</label>
<input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="password" name="pass" id="password">
</div>

<button class="btn btn-primary" type="submit" style="position:absolute;left:170px;background:blue;width:150px;">CLAIM</button><br><br>

</form>

</body>
</html>
