<?php

require_once 'dbconnection.php';

$studentID = $_POST['studentid'];
$fullName = $_POST['fullname'];
$currentUser = $_POST['currentuser'];

$sql = "insert into csc values ($studentID,'$fullName',now(),now(),'$currentUser',1)";

try {
    mysqli_query($connection,$sql);
    header("location:../pages/mentors.php");
} catch (Exception $e) {
    header("location:../pages/mentors.php");
}



?>