<?php 
$server='localhost'; 
$user='root'; 
$password=''; 
$db='penduduk'; 
$conn=mysqli_connect($server, $user, $password, $db);

if( !mysqli_select_db($conn,$db))
{die(mysqli_error());}

	
 ?>
