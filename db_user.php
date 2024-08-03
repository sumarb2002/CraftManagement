<?php
@$cn=new mysqli('localhost','root','','user');
if(mysqli_connect_errno())
{
    echo"Could not connect";
    exit;
}

?>