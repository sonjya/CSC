<?php

?>

<div class="container container-dashboard">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <canvas id="menteeToday" style="width:100%;max-width:700px"></canvas>
                </div>
                <div class="col-6">
                    <canvas id="menteeThisMonth" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var ccePrograms = ["BSIT","BSCS","BSIS","BMMA","BLIS","BSEMC"];
    var todayValues = [1,8,1,4,2,4];
    var monthValues = [78,32,2,21,9,41];
    var pieColors = ["aquamarine", "#1E88E5","#FFEE58","#82B1FF","brown","#FF4081"];
    
    //today
    new Chart("menteeToday", {
    type: "pie",
    data: {
        labels: ccePrograms,
        datasets: [{
        backgroundColor: pieColors,
        data: todayValues
        }]
    },
    options: {
        title: {
        display: true,
        text: "MENTEE TODAY"
        }
    }
    });

    //month
    new Chart("menteeThisMonth", {
    type: "pie",
    data: {
        labels: ccePrograms,
        datasets: [{
        backgroundColor: pieColors,
        data: monthValues
        }]
    },
    options: {
        title: {
        display: true,
        text: "MENTEE THIS MONTH"
        }
    }
    });
</script>

<style>
    .container-dashboard {
        margin-top: 50px;
        margin-right: 100px;
    }
</style>