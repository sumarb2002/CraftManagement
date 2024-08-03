<!DOCTYPE html>
<head>
<title>seminarregisterpage</title>
<link rel="stylesheet" type="text/css" href="headstyle.css"> 
<style>
body{
    background-image:;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh
}
.error{
    display: block;
    border:2px solid;
    background: rgb(247, 150, 190);
    color: rgb(246, 3, 11);
    padding:10px;
    width:95%;
    border-radius: 5px;
}
</style>
</head>
<body>
<form style=" width: 480px;
border:3px solid rgb(125, 120, 120);
padding: 30px;
background:  rgb(219, 218, 218);
border-radius: 15px;
justify-content:center;
align-items:center;" action="seminarregister2.php" method="POST">
<h1 style="text-align: center;">REGISTER FOR SEMINAR</h1><br>
<?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
<div>
<label for="email">Email</label>
<input style="
display:block;
border:2px solid;
 width:420px;
 padding:10px;
 margin:10px auto;
 border-radius: 5px;" type="email" name="email" id="email" placeholder="user email"><br>
</div>
<div>
    <label for="pass">Password</label>
    <input style="
    display:block;
    border:2px solid;
     width:420px;
     padding:10px;
     margin:10px auto;
     border-radius: 5px;" type="text" name="pass" id="pass" placeholder="password"><br>
    </div>


<button  class="btn btn-primary" style="position:absolute;left:800px;">REGISTER</button>
<br><br><a  href="home.html" style="text-decoration:none">HOME</a>

</form>
</body>
</html>