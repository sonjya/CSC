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
        <div class="container dashboard-chart">
            <div class="card">
                <div class="card-body">
                    <canvas id="menteetoday" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
        </div>
        <?php include '../common/js.php';?>
    </body>
    <script>
        var xValues = ["BSIT","BSCS","BSIS","BMMA","BLIS","BSEMC"];
        var yValues = [78,32,2,21,9,41];
        var barColors = ["aquamarine", "#1E88E5","#FFEE58","#82B1FF","brown","#FF4081"];

        new Chart("menteetoday", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: "MENTEE TODAY"
            }
        }
        });
    </script>
    <style>
        .body-bg {
            background-color:#E0E0E0;
        }
        .dashboard-chart {
            margin-top: 50px;
            margin-right: 100px;
        }
    </style>
</html>