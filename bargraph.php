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
<!DOCTYPE html>
<br><br><br><br>
<html>
<head>
    <title>Bar Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="barChart" width="1500" height="600" allign="center"></canvas>

    <?php
$db = mysqli_connect("localhost", "root", "", "user");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT category, sold FROM stock";
$result = mysqli_query($db, $sql);

$labels = [];
$values = [];
while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['category'];
    $values[] = (int)$row['sold'];  
}

mysqli_close($db);
?>


    <script>
    var ctx = document.getElementById('barChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Data',
                data: <?php echo json_encode($values); ?>,
                backgroundColor: 'rgba(63, 127, 191, 0.8)',
                borderColor: 'rgba(63, 127, 191, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</body>
</html>
