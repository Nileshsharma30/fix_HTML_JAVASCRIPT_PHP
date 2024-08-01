<?php
session_start();
include('config.php');

$id = $_POST['id'];
$userId = $_SESSION['user_id'];

$sql = "UPDATE `booknow` set status='Cancelled' where id= '$id' and user_id = '$userId'";
$sqlyes = $conn->query($sql);

if($sqlyes){
 
   echo "<script>alert('Booking cancelled successfully!');
   location.href = 'profile.php';
   </script>";     
    
 }



?>s