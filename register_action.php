<?php
session_start();
include('config.php');

  $name = $_POST['user'];
  $pass = $_POST['pass'];
  $email= $_POST['email'];



$sql = "INSERT INTO `student`( `username`, `email`,`password`) VALUES ('".$name."','".$email."','".$pass."')";
$sql1 = $conn->query($sql);

if($sql1==TRUE){
   echo "<script>alert('User created successfully !')
        location.href = 'login.php';
    </script>";    
   header('Location: login.php');
}
else {

   echo "<script>alert('Please try again later !')
      location.href = 'Register.php';
   </script>";
       
}


?>

