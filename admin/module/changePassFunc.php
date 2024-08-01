<?php
session_start();
include('../config/config.php');


$password = $_POST['pass'];
$userId = $_SESSION['userId'];

$sql = "UPDATE admin_login set ad_password='$password' where ad_id='$userId'";
$result = mysqli_query($conn,$sql);


if($result){
    
    echo "<script>alert('Password Changed Successfully !')
    location.href = '../views/Login.php';
    </script>"; 
    session_destroy();

}



?>