<?php

require_once '../controllers/dbconnection.php';

$userid = $_SESSION['userid'];

$navsql = "select firstname,lastname,role from users where userid=$userid";
$navresult = mysqli_query($connection,$navsql);
$navfetch = mysqli_fetch_assoc($navresult);

?>

<nav class="navbar bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            CCE SKILLS CLINIC <span class="mdi mdi-chevron-right"></span> <?=$navfetch['role'] ?>
        </a>
        <div class="dropdown">
            <button class="btn btn-username" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <strong><?=$navfetch['lastname'] . ', ' . $navfetch['firstname']?></strong>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                <li><a class="dropdown-item logout-button" href="../controllers/logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .logout-button {
        color:red;
    }
    button.btn-username:hover {
        background-color: #E0E0E0;
    }
    .navbar {
        z-index: 9999;
    }
    .bg-white {
        color: #FFFFFF;
    }
</style>