<?php

session_start();
include_once '../common_files/connect.php';

$user_name = stripslashes($_POST['username']);
$password = md5(stripslashes($_POST['password']));
// $email = stripslashes($_POST['email']);
// $phone_no = stripslashes($_POST['phone_no']);

//Md5 password

$sec_password = md5($password);

$sql = "SELECT * FROM login_info WHERE username = '$user_name' AND password = '$password'";

//echo $query_login_check

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $_SESSION['username'] = $username;
    // $_SESSION['type'] = $type;
    header("Location: ../newuser.html");
    exit;
    
}else {
    echo "DIDN'T FIND USER!<br>";
    echo "Please Retry. <br><br>";
    echo '<a href= "../login.php">RETRY</a>';
}

?>