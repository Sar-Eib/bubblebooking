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
            <div class="text-center" id="date">Marts 2024</div>
            <div class="text-center" id="btnCal">CAL+HOME</div>
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
            <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1" id="past">
                <?php
                echo $date->monthDate
                ?>
            </div>
        <?php } ?>
        <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1" id="btn15">
            15
        </div>
        <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1" id="btn16">
            16
        </div>
        <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1" id="btn17">
            17
        </div>
        <?php
        $monthDate = $db->sql("SELECT * FROM monthDate where monthDateId > 17");
        foreach ($monthDate as $date) {
            ?>
            <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1" id="future">
                <?php
                echo $date->monthDate
                ?>
            </div>
        <?php } ?>
    </div>
</div>

<div class="container mt-3" id="fifteenth">
    <div class="row">
        <div class="col p-3 m-2 d-flex justify-content-center flex-row flex-wrap" id="washingTimes">
            <?php
            $washtimes = $db->sql("SELECT * FROM washtimes INNER JOIN washstatus ON washTimeStatusId = washStatusId WHERE washTimeDate = 15");
            foreach ($washtimes as $washTime) {
                ?>
                <div class="m-3 col-5 bg-primary rounded-3">
                    <div class="text-light fs-2 text-center">
                        <div>
                            <?php
                            echo $cleantime = substr($washTime->washTimeStart, 0, -3) . " - " . $cleantime = substr($washTime->washTimeEnd, 0, -3);
                            ?>
                        </div>
                    </div>
                    <div class="row text-center fs-4 text-light mt-1">
                        <div id="booked">
                            <?php
                            echo $washTime->washCurrentStatus;
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container mt-3" id="sixteenth">
    <div class="row">
        <div class="col p-3 m-2 d-flex justify-content-center flex-row flex-wrap" id="washingTimes">
            <?php
            $washtimes = $db->sql("SELECT * FROM washtimes INNER JOIN washstatus ON washTimeStatusId = washStatusId WHERE washTimeDate = 16");
            foreach ($washtimes as $washTime) {
                ?>
                <div class="m-3 col-5 bg-primary rounded-3">
                    <div class="text-light fs-2 text-center">
                        <div>
                            <?php
                            echo $cleantime = substr($washTime->washTimeStart, 0, -3) . " - " . $cleantime = substr($washTime->washTimeEnd, 0, -3);
                            ?>
                        </div>
                    </div>
                    <div class="row text-center fs-4 text-light mt-1">
                        <div id="booked">
                            <?php
                            echo $washTime->washCurrentStatus;
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container mt-3" id="seventeenth">
    <div class="row">
        <div class="col p-3 m-2 d-flex justify-content-center flex-row flex-wrap" id="washingTimes">
            <?php
            $washtimes = $db->sql("SELECT * FROM washtimes INNER JOIN washstatus ON washTimeStatusId = washStatusId WHERE washTimeDate = 17");
            foreach ($washtimes as $washTime) {
                ?>
                <div class="m-3 col-5 bg-primary rounded-3">
                    <div class="text-light fs-2 text-center">
                        <div>
                            <?php
                            echo $cleantime = substr($washTime->washTimeStart, 0, -3) . " - " . $cleantime = substr($washTime->washTimeEnd, 0, -3);
                            ?>
                        </div>
                    </div>
                    <div class="row text-center fs-4 text-light mt-1">
                        <div id="booked">
                            <?php
                            echo $washTime->washCurrentStatus;
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>

    const future = document.querySelector('#future')
    const past = document.querySelector('#past')
    const btnCal = document.querySelector('#btnCal')
    const date = document.querySelector('#date')
    const calendar = document.querySelector('#calendar')
    const btn15 = document.querySelector('#btn15')
    const btn16 = document.querySelector('#btn16')
    const btn17 = document.querySelector('#btn17')
    const fifteenth = document.querySelector('#fifteenth')
    const sixteenth = document.querySelector('#sixteenth')
    const seventeenth = document.querySelector('#seventeenth')

    fifteenth.classList.add('d-none')
    sixteenth.classList.add('d-none')
    seventeenth.classList.add('d-none')

    btnCal.addEventListener('click', () =>{
        fifteenth.classList.add('d-none')
        sixteenth.classList.add('d-none')
        seventeenth.classList.add('d-none')
        calendar.classList.remove('d-none')
        date.innerHTML = 'Marts 2024'
    })

    btn15.addEventListener('click', () => {
        calendar.classList.add('d-none')
        date.innerHTML = '15/3 2024'
        fifteenth.classList.remove('d-none')
    })
    btn16.addEventListener('click', () => {
        calendar.classList.add('d-none')
        date.innerHTML = '16/3 2024'
        sixteenth.classList.remove('d-none')
    })
    btn17.addEventListener('click', () => {
        calendar.classList.add('d-none')
        date.innerHTML = '17/3 2024'
        seventeenth.classList.remove('d-none')
    })

    past.addEventListener('click', () => {
        alertPast()
    })

</script>
</body>
</html>
