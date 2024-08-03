<html lang="en">
  <head>
  
    <title>Craft Management</title>
    
	<link rel="stylesheet" href="headstyle.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
          <li><a href="aview.php">BACK</a></li>
              <li><a href="home.html">HOME</a></li>
              
          </ul>
          <h1 class="logo" style="position:absolute;left:30px;">Craft Management</h1>
      </div>
  </nav>
  </html>

<?php
//session_start();
$db = mysqli_connect("localhost", "root", "", "user");
$qry="select * from user where status='false'";
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
			height:100px;
		}
		</style>
</head>
<body style="background:white;">
<br><br><H1 style="position:absolute;top:70px;left:500px;color:green;">     REGISTERED USERS  </H1><br><br><br><br>
<table border='5' cellpadding='3' cellspacing='0' style="position:absolute;left:10px;top:150px;width:98%;border-color:green;">
<tr style="">
	<th>User ID</th>
<th>First name</th>
<th>Last Name</th>
<th>Date of birth</th>
<th>Gender</th>
<th>Email</th>
<th>Password</th>
<th>Approve product</th>
<th>Reject product</th>
</tr>
<?php
while($r=$rslt->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$r['user_id']."</td>";
	echo "<td>".$r['fname']."</td>";
	echo "<td>".$r['lname']."</td>";
	echo "<td>".$r['dob']."</td>";
	echo "<td>".$r['gender']."</td>";
	echo "<td>".$r['email']."</td>";
	echo "<td>".$r['password']."</td>";
	echo "<th><a class='btn btn-primary' href='uapprove.php?user_id=".$r['user_id']."'>approve</a></th>";
	echo "<th><a class='btn btn-primary' href='ureject.php?user_id=".$r['user_id']."'>reject</a></th>";	
	echo "</tr>";
		
}
echo "</table>";

$db->close();

?>