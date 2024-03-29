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
    <div class="row gradientTop">
        <div class="col d-flex flex-row fs-3 text-light pt-2 pb-2">
            <div class="fw-bold d-flex justify-content-center col-4">
                <div class="col-4">
                    <a href="index.php"><img class="img-fluid" src="images/logo.png" alt=""></a></div>
            </div>
            <div class="text-center col-4" ><p class="fs-1 m-0 mt-2 text-weekdays" id="date">Marts 2024</p></div>
            <div class="col-4 d-flex justify-content-center">
                <div class="col-2 m-2 me-4" id="btnCal">
                    <a href="calendar.php"><img class="img-fluid" src="images/cal-icon.png" alt=""></a>
                </div>
                <div class="col-2 m-2" id="btnHome">
                    <a href="index.php"><img class="img-fluid" src="images/home-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3" id="calendar">
    <div class="row justify-content-between">
        <?php
        $weekDays = $db->sql("SELECT * FROM weekDays");
        foreach ($weekDays as $days) {
            ?>
            <div class="bg-weekdays weekDaysBox rounded-3 text-center m-1 p-1 h2">
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
            <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1 past" id="past">
                <?php
                echo $date->monthDate
                ?>
            </div>
        <?php } ?>
        <div class="bg-primaryBlue monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1 text-info"
             id="btn15">
            15
        </div>
        <div class="bg-primaryBlue monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1 text-info"
             id="btn16">
            16
        </div>
        <div class="bg-primaryBlue monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1 text-info"
             id="btn17">
            17
        </div>
        <?php
        $monthDate = $db->sql("SELECT * FROM monthDate where monthDateId > 17");
        foreach ($monthDate as $date) {
            ?>
            <div class="bg-primary monthDateBox rounded-3 align-items-center text-center m-1 p-3 fs-1 future"
                 id="future">
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
                <div class="m-3 col-5 bg-primary rounded-3 <?php echo ($washTime->washTimeStatusId == 1) ? "bg-primary" : "bg-secondary"; ?>">
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
                <div class="m-3 col-5 bg-primary rounded-3 <?php echo ($washTime->washTimeStatusId == 1) ? "bg-primary" : "bg-secondary"; ?>">
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
                <div class="m-3 col-5 bg-primary rounded-3 <?php echo ($washTime->washTimeStatusId == 1) ? "bg-primary" : "bg-secondary"; ?>">
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
    const future2 = document.querySelectorAll('.future')
    const past = document.querySelector('#past')
    const past2 = document.querySelectorAll('.past')
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

    btnCal.addEventListener('click', () => {
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


    past2.forEach(button => {
        button.addEventListener('click', () => {
            alertPast();
        });

        function alertPast() {
            alert('Denne dato kan ikke vÃ¦lges');
        }
    });

    // Gennemgår hvert element i 'past2' arrayet
    past2.forEach(element => {
        // Tjekker om elementet har klassen 'past'
        if (element.classList.contains('past')) {
            // Hvis elementet har klassen 'past', fjern 'bg-primary' klassen og tilføj 'bg-secondary-subtle' klassen
            element.classList.remove('bg-primary');
            element.classList.add('bg-secondary-subtle');
            element.classList.add('text-white');
        } else {
            // Hvis elementet ikke har klassen 'past', fjern 'bg-secondary-subtle' klassen og tilføj 'bg-primary' klassen
            element.classList.remove('bg-secondary-subtle');
            element.classList.add('bg-primary');
        }
    });
    //Gør det samme men for future
    future2.forEach(element => {
        if (element.classList.contains('future')) {
            element.classList.remove('bg-primary');
            element.classList.add('bg-secondary');
            element.classList.add('text-danger');
        } else {
            element.classList.remove('bg-secondary');
            element.classList.add('bg-primary');
        }
    });


</script>
</body>
</html>
