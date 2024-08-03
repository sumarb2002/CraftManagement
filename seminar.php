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
          <li><a href="seminar.php">Seminar</a></li>
          <li><a href="conductseminar.php">conduct seminar</a></li>
          <li><a href="generate.php">generatecertificate</a></li>
          <li><a href="aview.php">Back</a></li>
          <li><a href="home.html">Home</a></li>
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
<form action="seminarmail.php" method="POST" style="
position:absolute;
left:480px;
top:150px;
     width: 500px;
     border:#F5F0F2;
     padding: 30px;
    background: rgb(219, 218, 218);
    border-radius: 15px;">
     <h1 style="text-align: center;">Seminar</h1><br>
<div>
<label>Topic</label>
<input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="text" name="topic" id="topic" placeholder="Enter the topic for seminar">
</div>

<div>
<label for="pass">Date</label>
<input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="date" name="date1" id="date1" placeholder="enter the date">
</div>
<div>
<label for="pass">Time</label>
<input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="time" name="time" id="time" placeholder="enter the time">
</div>

<button class="btn btn-primary" type="submit" style="position:absolute;left:170px;background:blue;width:150px;">SEND</button><br><br>

</form>

</body>
</html>