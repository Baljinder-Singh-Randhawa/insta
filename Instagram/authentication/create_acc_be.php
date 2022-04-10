<?php

// connection called
include_once '../common_files/connect.php';

// $conn = mysqli_connect($host_name, $user_name, $password, $db_name);


$username = stripslashes($_POST['username']);
$phone_no = stripslashes($_POST['phone_no']);
$email = stripslashes($_POST['email']);
$password = md5(stripslashes($_POST['password']));

// calling database

$sql = "INSERT INTO `insta`.`login_info`(`username`, `phone_no`, `email`, `password`)
 VALUES ('$username', '$phone_no', '$email', '$password');";

// inserting data to database
if($conn->query($sql) == true){
    echo "<div align='center' > <h1> Account created </h1>
    <button><a href='newuser.php'>HOMEPAGE</a></button> </div>";
}else {
    echo "<h1> ERROR </h1>";
}

$conn->close();


?>
