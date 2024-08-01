<?php
    session_start();
    if (isset($_POST["btnOtp"])){
        $otpEntered =$_POST["otpField"];
        if($otpEntered == $_SESSION["userOtp"]){
            

            echo "<script>
                alert('OTP entered successfully');
                location.href='../views/changePassword.html';     
            </script>";
            
        }
        else{
            session_unset();
           

                echo "<script>
                alert('Please enter the correct OTP');
                location.href=' ../views/forgotPassword.php';             
            </script>";
               
                
           
        }
    }
    else{
        echo "error";
        // window.location.href=' ../views/changePassword.php'; 
    } 
?>  