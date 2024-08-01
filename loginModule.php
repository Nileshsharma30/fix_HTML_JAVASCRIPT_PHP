<?php
session_start();
include('config.php');


$name = $_POST['email'];
$pass = $_POST['pass'];


$query = "select * from student where email = '$name' and password='$pass'";
$result = $conn->query($query);
$count = mysqli_num_rows($result);


if($count){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] =  $row['id'];

    echo "<script>alert('Logged in successfully !')
        location.href = 'index.php';
    </script>";
   
}
else{
    echo "<script>alert('Invalid Login !')
        location.href = 'login.php';
    </script>";
}


?>