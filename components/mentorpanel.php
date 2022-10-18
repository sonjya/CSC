<?php
    require_once '../controllers/dbconnection.php';

    if(isset($_POST['search'])) {
        $search = $_POST['search'];
    } else {
        $search = "";
    }

    $mentorsql = "select * from csc where studentid like '%$search%' or fullname like '%$search%' order by active desc";
    $mentorresult = mysqli_query($connection,$mentorsql);
?>

<div class="container container-mentorpanel">
    <h1>MENTORS</h1>
    <div class="card">
        <div class="card-body">
            <h3>ADD NEW MENTOR</h3>
            <form method="post" action="../controllers/addmentor.php">
                <div class="row">
                    <div class="col-4">
                        <input type="hidden" name="currentuser" value="<?=$navfetch['firstname']?>">
                        <strong>STUDENT ID:</strong><input type="number" class="form-control" name="studentid" required>
                    </div>
                    <div class="col-6">
                        <strong>FULLNAME:</strong><input type="text" class="form-control" name="fullname" required>
                    </div>
                    <div class="col mt-4">
                        <input type="submit" class="btn btn-outline-success col-12" value="ADD" <?php if ($navfetch['role']=="ADMINISTRATOR") { } else { echo "disabled"; }?>>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <form method="post" action="../pages/mentors.php">
                <div class="row">
                    <div class="col-2">
                        <!-- blank -->
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="search">
                    </div>
                    <div class="col-2">
                        <input type="submit" value="SEARCH" class="btn btn-outline-primary col-12">
                    </div>
                </div>
            </form>
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>STUDENT ID</th>
                        <th>FULL NAME</th>
                        <th>LAST UPDATE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($mentorfetch = mysqli_fetch_assoc($mentorresult)) { ?>
                        <tr>
                            <td><?=$mentorfetch['studentID']?></td>
                            <td><?=$mentorfetch['fullName']?></td>
                            <td><?=$mentorfetch['updated_at'] . ' by ' . $mentorfetch['updated_by']?></td>
                            <?php if($mentorfetch['active']==1) { ?>
                                <td><span class="badge bg-success">ACTIVE</span></td>
                                <td>
                                    <a href="../controllers/setmentorinactive.php?id=<?=$mentorfetch['studentID']?>&by=<?=$navfetch['firstname']?>" class="btn btn-sm btn-outline-danger"><span class="mdi mdi-arrow-down-bold"></span></a>
                                    <a href="../pages/editmentor.php?id=<?=$mentorfetch['studentID']?>" class="btn btn-outline-warning btn-sm"><span class="mdi mdi-cog-outline"></span></a>
                                </td>
                            <?php } else { ?>
                                <td><span class="badge bg-danger">INACTIVE</span></td>
                                <td>
                                    <a href="../controllers/setmentoractive.php?id=<?=$mentorfetch['studentID']?>&by=<?=$navfetch['firstname']?>" class="btn btn-sm btn-outline-success"><span class="mdi mdi-arrow-up-bold"></a>
                                    <a href="../pages/editmentor.php?id=<?=$mentorfetch['studentID']?>" class="btn btn-outline-warning btn-sm"><span class="mdi mdi-cog-outline"></span></a>
                                </td>
                            <?php } ?>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .container-mentorpanel {
        margin-top:50px;
        margin-right: 150px;
    }
</style>