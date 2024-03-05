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
            <div class="text-center" id="time">12:34</div>
            <div class="text-center">CAL+HOME</div>
        </div>
    </div>



    <div class="row mt-1">
        <div class="col p-3 m-2 d-flex justify-content-center flex-row flex-wrap" id="washingTimes">
            <?php
            $washtimes = $db->sql("SELECT * FROM washtimes INNER JOIN washstatus ON washTimeStatusId = washStatusId");
            foreach($washtimes as $washTime) {
                ?>
                <div class="m-3 col-5 bg-primaryBlue">
                    <div class="text-light fs-2 text-center">
                        <div>
                            <?php
                            echo $cleantime=substr($washTime -> washTimeStart,0,-3)." - ".$cleantime=substr($washTime -> washTimeEnd,0,-3);
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

        <?php }?>

            <!-- Til viceværtens skærm
            <div class="w-50 mx-auto text-light py-3" id="occupied2">
                <div class="text-center mb-2">Optaget af:</div>
                <div class="card text-light">
                    <div class="row g-0 justify-content-center">
                        <div class="col-auto">
                            <div class="card-body" id="card2">
                                <div class="card-text fw-bold">07:00 - 09:00</div>
                                <div class="card-text">4, st. 2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->

            <!--
            KNAP TIL BOOK
            <div class="position-absolute bottom-0 start-50 translate-middle mb-3">
                <button type="button" id="bookBtn" class="btn btn-light btn-lg px-5 rounded-5" data-bs-toggle="modal" data-bs-target="#bookRoom">Book</button>
            </div>
            -->
        </div>
    </div>
</div>

<!--booking modal
<div class="modal" id="bookRoom" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Opret booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="startTime">Fra:</label>
                    <input type="time" id="startTime" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="endTime">Til:</label>
                    <input type="time" id="endTime" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="selectDepartment">Vælg afdeling:</label>
                    <select id="selectDepartment" class="form-select">
                        <option value="Salgsafdeling">Salgsafdeling</option>
                        <option value="IT-afdeling">IT-afdeling</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="names">Indtast navne:</label>
                    <input type="text" id="names" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                <button type="button" class="btn btn-primary" id="createBookingBtn" data-bs-dismiss="modal">Opret</button>
            </div>
        </div>
    </div>
</div> -->



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>

    const time = document.querySelector('#time');

    function showTime(){
        const date = new Date();
        const hours = date.getHours().toString().padStart(2, 0);
        const minutes = date.getMinutes().toString().padStart(2, 0);
        const clock = hours + "<span id='colon'>:</span>" + minutes
        console.log(clock);
        setTimeout(showTime, 1000);
        time.innerHTML = clock;
    }
    showTime()

    function showOccupancy(){

    }

</script>
</body>
</html>
