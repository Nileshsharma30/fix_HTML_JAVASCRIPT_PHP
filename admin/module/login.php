<?php

include '../config/config.php';
if(isset($_POST['btnSubmit'])){
    
    $username= $_POST['email'];
    $password= $_POST['pass'];



    $query="SELECT * FROM admin_login WHERE ad_email='$username'and ad_password='$password'" ;
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $adminDetail = $row;
       
    }
    else { 
        echo "<script> alert('Invalid username and password')
        location.href='../views/Login.php';
         </script>";

    }
   
      
    if(!empty($row)){
        session_start();
        $_SESSION['adminDetail'] = $row['ad_username']; 
        $_SESSION['adminId'] = $row['ad_id'];

        echo "<script> alert('Logged in successfully')
        location.href='../views/index.php';
         </script>";

        
    }
    
}
else {
    header("Location: ../views/Login.php?button_unset");
}
