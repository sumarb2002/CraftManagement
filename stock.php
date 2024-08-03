<html lang="en">
  <head>  
    <title>Craft Management</title>
    	<link rel="stylesheet" href="headstyle.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
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
$qry="select * from stock";
$rslt=$db->query($qry);
?>
<!DOCTYPE html>
<head>
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
			height:50px;
		}
		</style>
</head>
<body style="background:white;">
<br><br><H1 style="position:absolute;top:70px;left:55bar0px;color:green;">     STOCK DETAILS  </H1><br><br><br><br>
<table border='5' cellpadding='3' cellspacing='0' style="position:absolute;left:10px;top:150px;width:98%;border-color:green;">
<tr style="">
	<th>Category</th>
<th>Total</th>
<th>Available</th>
<th>Sold</th>

</tr>
<?php
while($r=$rslt->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$r['category']."</td>";
	echo "<td>".$r['total']."</td>";
	echo "<td>".$r['available']."</td>";
	echo "<td>".$r['sold']."</td>";
	echo "</tr>";
		
}
echo "</table>";

$db->close();

?>