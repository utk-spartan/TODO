<?php
$con = mysqli_connect("192.168.1.185","root","","todo","3306");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
