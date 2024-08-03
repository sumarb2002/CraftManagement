<html lang="en">
  <head>
  
    <title>Craft Management</title>
    
	<link rel="stylesheet" href="headstyle.css" />
    <style>
        		.btn {
  display: inline-block;
  padding: 0.5em 1.0em;
  text-decoration: none;
  border-radius: 50px;
  cursor: pointer;
  outline: none;
  margin-top: 1em;
  text-transform: uppercase;
  font-weight: small;
  height:35px;
  font-size:15px;

}
.btn-primary {
  color: #fff;
  background: lightgreen;
}

.btn-primary:hover {
  background:green ;
  transition: background 0.3s ease-in-out;
}
        </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
          <a href="certificatemail.php" class="btn btn-primary" style="position:absolute;top:-5px;left:1000px;">GENERATE CERTIFICATE</a>
          <ul class="menu-items">
          <li><a href="aview.php">BACK</a></li>
              <li><a href="home.html">HOME</a></li>
             
              
          </ul>
          <h1 class="logo">Craft Management</h1>
      </div>
  </nav>
  </html>

<?php
//session_start();
$db = mysqli_connect("localhost", "root", "", "user");


$qry="select * from semreg where status='Yes'";
$rslt=$db->query($qry);
?>
<!DOCTYPE html>
<head>
		 <style>

		th{
			width:150px;
			height:50px;
			font-size:25px;
			color:green;
		}
		td{
			font-size:20px;
			color:green;
      width:150px;
			height:100px;
		}
		</style>
</head>
<body style="background:white;">
<br><br><H1 style="position:absolute;top:70px;left:500px;color:green;">    SEMINAR ATTENDED USERS  </H1><br><br><br><br>
<table border='5' cellpadding='3' cellspacing='0' style="position:absolute;left:10px;top:150px;width:50%;border-color:green;">
<tr style="">
	<th>NAME</th>
<th>EMAIL</th>
<th>PASSWORD</th>

</tr>
<?php
while($r=$rslt->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$r['name']."</td>";
	echo "<td>".$r['email']."</td>";
	echo "<td>".$r['password']."</td>";
	
	echo "</tr>";
		
}
echo "</table>";

$db->close();

?>