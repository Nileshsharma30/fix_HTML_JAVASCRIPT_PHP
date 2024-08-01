<?php
session_start();
include('config.php');


$password = $_POST['pass'];
$userId = $_SESSION['userId'];

$sql = "UPDATE student set password='$password' where id='$userId'";
$result = mysqli_query($conn,$sql);


if($result){
    
    echo "<script>alert('Password Changed Successfully !')
    location.href = 'login.php';
    </script>"; 
    session_destroy();

}



?>