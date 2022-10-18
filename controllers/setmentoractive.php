<?php

require_once 'dbconnection.php';

$id = $_GET['id'];
$currentuser = $_GET['by'];

$sql = "update csc set updated_at=now(),updated_by='$currentuser',active=1 where studentid=$id";
mysqli_query($connection,$sql);

header("location:../pages/mentors.php");

?>