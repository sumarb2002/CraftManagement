<?php
if(isset($_FILES['sushma']))
{
    echo "<pre>";
    print_r($_FILES);
}

?>

<html>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="sushma" >
        <input type="submit" name="submit">
</form>
</body>
    </html>