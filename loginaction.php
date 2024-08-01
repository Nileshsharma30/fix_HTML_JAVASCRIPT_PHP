<?php
session_start();
include('config.php');

$name = $_POST['email'];
$pass = $_POST['pass'];

echo $name;

$sql = "SELECT * FROM student where eamil = '$name' ";
$result = mysqli_query($conn, $sql);

echo $result;
print_r($result);
if($result){
     $row1 = mysqli_fetch_assoc($result);
    echo $row['email'];
 echo " Success ";


}
else{
    echo "in else";
}
 /* $sql = "SELECT * FROM `staff` where email ='".$name."' and password='".$pass."' ";
 $sql1 = $conn->query($sql);

 $row = mysqli_fetch_assoc($sql1); */
 
//  if($row1['email']==$name && $row1['password']==$pass){
//      $_SESSION['id'] = '2';
//      $_SESSION['email'] = $row1['email'];
//      $_SESSION['staff_name'] = $row1['name'];
//      $_SESSION['password'] = $row1['password'];
  
 
//  }
//  else {
    

//     $_SESSION['msg'] = "Login Failed";
    
//     header('Location: Register.php');
//     exit;

//     }
// }
// elseif($row1['status']==0){
 
    

//         $_SESSION['msg'] = "Login Failed";
        
//         header('Location: index.php');
//     exit;

// }
?>