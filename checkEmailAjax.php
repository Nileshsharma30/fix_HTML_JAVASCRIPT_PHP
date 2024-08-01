<?php

include('config.php');

$mail = $_POST['mail'];


$sql = "SELECT * from student where email= '$mail' ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 0){
    echo "false";
}
else{
    echo "true";

}

?>