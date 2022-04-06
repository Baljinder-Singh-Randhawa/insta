<?php

$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "insta";

$conn = mysqli_connect($host_name, $user_name, $password, $db_name);
if(!$conn){
    echo "error";
}
?>