<?php
    session_start();
?>

<!doctype HTML>
<html>
    <head>
        <title>CCE Skills Clinic</title>
        <link rel="icon" href="images/CCEv2.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" integrity="sha512-fXnjLwoVZ01NUqS/7G5kAnhXNXat6v7e3M9PhoMHOTARUMCaf5qNO84r5x9AFf5HDzm3rEZD8sb/n6dZ19SzFA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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