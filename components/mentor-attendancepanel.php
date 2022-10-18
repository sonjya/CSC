<?php
require_once '../controllers/dbconnection.php';

if(isset($_POST['search'])) {
    $search = $_POST['search'];
} else {
    $search = "";
}

$mentorattendancesql = "select * from csc where studentID='$search' and active=1";
$mentorattendanceresult = mysqli_fetch_assoc(mysqli_query($connection,$mentorattendancesql));

$attendance = "select a.studentID,b.fullname,timeLogin from csc_attendance a inner join csc b where a.studentid=b.studentid order by timelogin desc limit 10";
$attendanceresult = mysqli_query($connection,$attendance);

?>

<div class="container mentorattendance-container">
    <h1>ATTENDANCE</h1>
    <div class="card"> 
        <form method="post" action="../pages/mentor-attendance.php">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <!-- blank -->
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" name="search">
                    </div>
                    <div class="col-2">
                        <input type="submit" class="btn btn-outline-primary col-12" value="SEARCH">
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                               <?php if(!$mentorattendanceresult) { ?>
                                    <h1 class="attendance-notfound">NOT FOUND</h1>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-8">
                                            <h1 class="attendance-found"><?=$mentorattendanceresult['fullName']?></h1>
                                        </div>
                                        <div class="col">
                                            <a href="../controllers/mentor-attendance.php?id=<?=$mentorattendanceresult['studentID']?>" class="btn btn-outline-success col-6 mt-2">ATTENDANCE</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <h1>RECENT</h1>
    <div class="card mt-2">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>STUDENT ID</th>
                        <th>FULL NAME</th>
                        <th>TIME LOGIN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($attendancefetch = mysqli_fetch_assoc($attendanceresult)) { ?>
                        <tr>
                            <td><?=$attendancefetch['studentID']?></td>
                            <td><?=$attendancefetch['fullname']?></td>
                            <td><?=$attendancefetch['timeLogin']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .mentorattendance-container {
        margin-top:50px;
        margin-right:150px;
    }
    .attendance-notfound {
        text-indent:10ch;
        font-style:italic;
        color:red;
    }
    .attendance-found {
        text-indent:10ch;
        font-style:italic;
        color:green;
    }
</style>