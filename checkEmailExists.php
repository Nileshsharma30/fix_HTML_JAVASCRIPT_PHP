<?php
session_start();
include('config.php');
require './phpmailer/PHPMailerAutoLoad.php';
require './phpMailer/class.phpmailer.php';
require './phpMailer/class.smtp.php';


$email = $_POST['email'];
echo $email;

$sql = "SELECT * from student where email='$email'";
$result = mysqli_query($conn,$sql);

$res = new \stdClass();
$res->success = false;

if(mysqli_num_rows($result) > 0){
   
    $row = mysqli_fetch_assoc($result);
    $_SESSION['userId'] = $row['id'];

    $_SESSION['userOtp'] = (int)rand(1000,9999);
    $msgBody= "Your OTP is ".$_SESSION['userOtp'];


   // $mail = new PHPMailer(true);
   

        if(SMTP_mail){
            try {
                $mail = new PHPMailer();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'ns0192934@gmail.com';                     // SMTP username
                $mail->Password   = 'Sharmanilesh123';                               // SMTP password
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 25;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom($email, 'FIX');
                $mail->addAddress($email, 'Joe User');     // Add a recipient
                            // Name is optional
                $mail->addReplyTo('ns0192934@gmail.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                // Attachments
                //  $mail->addAttachment('/var/tmp/file.tar.gz');        Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'OTP';
                $mail->Body    = $msgBody+$_SESSION['userOtp'];
                $mail->AltBody = 'Your One Time Password(OTP) is $OTP ';

                $mail->send();
                echo "<script>location.href='./otpPage.php';</script>";
                // header("Location: ./otpPage.php");
                } 
                catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "<script>location.href='./forgotPassword.php';</script>";
        }
        else{
            echo "in else";
        }

        //Server settings
        




    // echo "<script>
    // location.href = 'changePassword.html';
    // </script>"; 

    

}
else{
    echo "<script>alert('Unregistered Email !');
    location.href = 'Register.php';
   </script>";     
    
}



?>