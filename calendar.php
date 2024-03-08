<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>BubbleBooking</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container-fluid">
    <div class="row bg-dark">
        <div class="col d-flex flex-row row-cols-3 fs-3 text-light mb-2 pt-2 pb-2">
            <div class="fw-bold text-center">Logo</div>
            <div class="text-center">Marts 2024</div>
            <div class="text-center">CAL+HOME</div>
        </div>
    </div>
</div>


<div class="container mt-3" id="calendar">
    <div class="row justify-content-between">
        <?php
        $weekDays = $db->sql("SELECT * FROM weekDays");
        foreach ($weekDays as $days) {
            ?>
            <div class="bg-primary weekDaysBox rounded-3 text-center m-1 p-1 h2">
                <?php
                echo $days->weekDaysName
                ?>
            </div>
        <?php } ?>
    </div>
    <div class="row justify-content-between">
        <div class="monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
            <br>
        </div>
        <div class="monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
            <br>
        </div>
        <div class="monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
            <br>
        </div>
        <div class="monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
            <br>
        </div>
            <?php
            $monthDate = $db->sql("SELECT * FROM monthDate where monthDateId < 15");
            foreach ($monthDate as $date) {
                ?>
                <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
                    <?php
                        echo $date->monthDate
                        ?>
                </div>
            <?php } ?>
        <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
            15
        </div>
        <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
            16
        </div>
        <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
            17
        </div>
        <?php
        $monthDate = $db->sql("SELECT * FROM monthDate where monthDateId > 17");
        foreach ($monthDate as $date) {
            ?>
            <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1">
                <?php
                echo $date->monthDate
                ?>
            </div>
        <?php } ?>
    </div>
</div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>

    </script>
</body>
</html>
