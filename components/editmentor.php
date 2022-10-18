<?php

require_once '../controllers/dbconnection.php';

$id = $_GET['id'];

$sql = "select studentID,fullname from csc where studentid=$id";
$fetch = mysqli_fetch_assoc(mysqli_query($connection,$sql));

?>

<div class="container editmentor-container">
    <form method='post' action="../controllers/updatementor.php">
        <h1>EDIT</h1>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label><strong>STUDENT ID</strong></label>
                    <input type="hidden" name="oldstudentID" value="<?=$id?>">
                    <input type="number" class="form-control" name="studentID" value="<?=$fetch['studentID']?>" required>
                </div>
                <div class="mb-3">
                    <label><strong>FULL NAME</strong></label>
                    <input type="text" class="form-control" name="fullName" value="<?=$fetch['fullname']?>" required>
                </div>
                <div class="row">
                    <div class="col-4">
                        <!-- blank -->
                        <input type="hidden" name="currentuser" value="<?=$navfetch['firstname']?>">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-outline-success col-3" value="SUBMIT">
                        <a href="../pages/mentors.php" class="btn btn-outline-danger col-3">CANCEL</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
    .editmentor-container {
        margin-top: 150px;
        margin-right: 150px;
    }
</style>