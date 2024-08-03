<!-- <html>
    <head>
        <title>image</title>
        <style>
            img{
                height: 300px;
                width: 300px;
                /*border: 4px solid blueviolet;*/
                border-radius:140px;
            }
        </style>
    </head>
    <body align="center">
<img src="images/1679326230106.jpg" alt="missed image" title="suma"/>
    </body>
</html> -->
<?php
if(isset($_POST['submit']))
{
   $fn=$_FILES['fn']['name'];
   
    @$cn=new mysqli('localhost','root','','book');
    if(mysqli_connect_errno())
    {
        echo "could not connect";
        exit;
    }
if($fn=="")
{
    echo"<script>alert('select a photo');
        window.location.href='sumaimage.php';</script>";
}
else
{
    $qry="insert into suma values('".$fn."')";
    $rslt=$cn->query($qry);
    if($rslt)
    {
        echo"<script>alert('record is inserted');
        window.location.href='sumaimage.php';</script>";
    }
    else
    {
        echo"<script>alert('error');
        window.location.href='sumaimage.php';</script>";
    }

}
} ?>
<?php
if(isset($_POST['show']))
{
    @$cn=new mysqli('localhost','root','','book');
    if(mysqli_connect_errno())
    {
        echo "could not connect";
        exit;
    }
    $qry="select * from suma";
    $rslt=$cn->query($qry);
   while($r=$rslt->fetch_assoc())
   {
      $sumaimage=$r['su'];
   }
    ?>
    <img src="images/<?php echo $sumaimage; ?>" width="100px" height="100px" alt="">
    
    <?php
    }

?>
<html>
    <head></head>
    <body>
        <form action="sumaimage.php" method="POST" enctype="multipart/form-data">
        Select a image<br/>
        <input type="file" name="fn" ><br/>
        <input type="submit"  name="submit" value="submit">
         <input type="submit"  name="show" value="show"> 
</form>
        </body>
    </html>