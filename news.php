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
              <li><a href="home.html">Home</a></li>
              <li><a href="aview.php">Back</a></li>

          </ul>
          <h1 class="logo">Craft Management</h1>
      </div>
  </nav>
  
<style>

    .error{
    display: block;
    border:2px solid;
    background: rgb(219, 218, 218);
    color: rgb(246, 3, 11);
    padding:10px;
    width:100%;
    border-radius: 5px;
} 

label{
    background:rgb(219, 218, 218);
    color:rgb(219, 218, 218);
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
    border-radius: 15px;" action="news1.php" method="POST" enctype="multipart/form-data">
    <h1 style="text-align: center;">ADD NEWS</h1>
    <?php if (isset($_GET['error'])) { ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<br><br>
<div>
<label>News image</label>
<input class="form-group" type="file" name="uploadfile" value=""  required>
</div>

<div>
<label>News</label>
<input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="text" name="news" id="news" required>
</div>


<button class="btn btn-primary" type="submit" name="submit" style="position:absolute;left:170px;background:blue;width:150px;">ADD NEWS</button><br><br>

</form>

</body>
</html>
