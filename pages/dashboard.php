<?php
    session_start();
?>
<!doctype HTML>
<html>
    <head>
        <?php include '../common/css.php';?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    </head>
    <body class="body-bg">
        <?php include '../common/navbar.php';?>
        <?php include '../common/sidebar.php';?>
        <?php include '../components/dashboard.php';?>
        <?php include '../common/js.php';?>
    </body>
    <style>
        .body-bg {
            background-color:#E0E0E0;
        }
    </style>
</html>