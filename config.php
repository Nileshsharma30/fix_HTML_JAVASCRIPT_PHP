<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student";

$conn=mysqli_connect($servername,$username,$password,$dbname,9999);
if($conn)
{
	// echo "Connection OK";
}
else
{
	echo "Connection failed";
}

?>