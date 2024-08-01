<?php

include('config.php');

$pincode = $_GET['pincode'];


$sql = "SELECT * from pincode where pincode= '$pincode' ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count < 0){
    echo "No records";
}
else{
    $row = mysqli_fetch_assoc($result);
    echo $row['district'];

}

?>