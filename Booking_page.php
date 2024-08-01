<?php
session_start();
include('config.php');

$name = $_POST['Name'];
$phoneNumber= $_POST['Phone'];
$email = $_POST['Email'];
$addr = $_POST['addr'];
$pincode = $_POST['pincode'];
$region = $_POST['region'];
$date = $_POST['date'];
$time = $_POST['time'];
$issue = $_POST['issuebox'];
$issueyArray = array();
$issueString = "";
$userId = $_SESSION['user_id'];



    foreach($_POST['issuebox'] as $value){
     	if($value == "carpenter"){
			array_push($issueyArray,"Carpenter");

		 }
		if($value == "plumber"){
		
			array_push($issueyArray,"Plumber");
		 }

		 if($value == "air"){
			
			array_push($issueyArray,"Air Conditioner");
		}
		 if($value == "washing"){
		 	
			 array_push($issueyArray,"Washing Machine");
		 }
			
		 if($value == "electrician"){
			
			array_push($issueyArray,"Electrician");
		}
		 if($value == "refrigerator"){
		 	
			 array_push($issueyArray,"Refrigerator");
		 }


	
    }

	foreach ($issueyArray as $value) {
		$issueString = $issueString. " ".$value;
	}

	

$sql = "INSERT INTO `booknow` VALUES (null,'$userId','$name','$email','$phoneNumber','$pincode','$region','$addr','$issueString','Booked','$date','$time')";
$sqlyes = $conn->query($sql);

if($sqlyes){
 
   echo "<script>alert('Booking successfully done !');
   location.href = 'index.php';
   </script>";     
    
 }
 else {

  $_SESSION['msg'] = "Please Try Again";
        
    header('Location: Booknow.php');
    exit;
 }


?>