<?php

include('config.php');

$username = $_POST['user'];


$sql = "SELECT * from student where username= '$username'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 0){
    echo "false";
}
else{
    echo "true";

}

?>