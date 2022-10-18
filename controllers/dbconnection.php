<?php

$host='localhost';
$username='root';
$password='';
$database='db_csc';

$connection=mysqli_connect($host,$username,$password,$database);

if(!$connection) {
    die("Connection failed.");
} 

?>