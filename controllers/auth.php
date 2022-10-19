<?php

session_start();

require_once 'dbconnection.php';

//post getters
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select userid from users where username='$username' and password=md5('$password') and active=1 limit 1";
$fetch = mysqli_fetch_assoc(mysqli_query($connection,$sql));

if (!$fetch) {
    $_SESSION['authfalse'] = false;
    header('Location:../index.php');
} else {
    $_SESSION['authtrue'] = true;
    $_SESSION['userid'] = $fetch['userid'];
    header("location:../pages/dashboard.php");
}

?>