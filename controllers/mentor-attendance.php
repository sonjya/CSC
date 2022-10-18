<?php

require_once 'dbconnection.php';

$studentID = $_GET['id'];

$sql = "insert into csc_attendance values ($studentID,now())";

mysqli_query($connection,$sql);

header("location:../pages/mentor-attendance.php")
?>