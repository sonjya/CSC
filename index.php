<?php
    session_start();
?>
<!doctype HTML>
<html>
    <head>
        <?php include 'common/css.php';?>
    </head>
    <body class="body-bg">
        <!-- loginform -->
        <div class="container loginform">
            <div class="card shadow-sm">
                <img src="images/CCEv2.png">
                <div class="card-body">
                    <form method="post" action="controllers/auth.php">
                        <h1>LOGIN: CSC</h1>
                            <?php if($_SESSION['auth']==false) { ?>
                                <div class="alert alert-danger">
                                    <span class="mdi mdi-alert-circle"></span> Invalid username or password
                                </div>
                            <?php } ?>
                        <label><strong>USERNAME</strong></label>
                        <input type="text" class="form-control" name="username" required>
                        <label><strong>PASSWORD</strong></label>
                        <input type="password" class="form-control" name="password" required>
                        <input type="submit" class="btn btn-outline-primary col-12 mt-2" value="LOGIN">
                    </form>
                </div>
            </div>
        </div>
        <?php include 'common/js.php';?>
    </body>
    <style>
        .loginform {
            width:25rem;
            margin-top: 120px;
        }
        .body-bg {
            background-color:#E0E0E0;
        }
    </style>
</html>