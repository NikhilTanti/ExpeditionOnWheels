<?php
$con = mysqli_connect('localhost','root');
if ($con) {
    echo "Connection Successfull";
}else{
    echo"No connection";
}

mysqli_select_db($con,'bookings');

$user = $_POST['user'];
$user = $_POST['email'];
$user = $_POST['phone'];
$user = $_POST['comment'];

$query = "insert into customer_data (user, email, phone, comment) values('$user','$email', '$phone', '$comment')";

echo "$query";

mysqli_query( $con, $query );

header('location:index.php');


?>