<?php

require_once 'dbconnection.php';

$studentID = $_POST['studentID'];
$fullName = $_POST['fullName'];
$currentuser = $_POST['currentuser'];
$oldstudentID = $_POST['oldstudentID'];

$sql = "update csc set studentID = $studentID,fullname='$fullName',updated_at=now(),updated_by='$currentuser' where studentID=$oldstudentID";
mysqli_query($connection,$sql);
header("location:../pages/mentors.php");

?>