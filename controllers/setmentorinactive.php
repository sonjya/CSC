<?php

require_once 'dbconnection.php';

$id = $_GET['id'];

$sql = "update csc set active=0 where studentid=$id";
mysqli_query($connection,$sql);

header("location:../pages/mentors.php");

?>