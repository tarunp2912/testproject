<?php

$host="localhost";
$db="buspass";
$password="";
$username="root";


$con=mysqli_connect($host,$username,$password,$db);

if($con)
{
	echo "";  
}
else
{
	echo "database connection failed";
}



?>