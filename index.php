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
            <div class="text-center col-4" id="date"><p class="fs-1 m-0 mt-2 text-weekdays" id="time"></p></div>
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


    <div class="row mt-5 justify-content-center flex-wrap" id="meetingRoom">

        <div type="button" id="bookBtn1" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">07:00 - 09:00</div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn2" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">09:00 - 11:00</div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn3" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">11:00 - 13:00</div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn4" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">13:00 - 15:00</div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn5" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">15:00 - 17:00</div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn6" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">17:00 - 19:00</div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn7" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">19:00 - 21:00</div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn8" class="timeBtn bg-primaryBlue rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="timeCard">
                    <div class="fw-bold fs-4 text-center">21:00 - 23:00</div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal" id="logIn" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Log ind</h5>
                    <button type="button" class="btn-close" id="closeBookTopLog" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="form-group">
                            <label for="username">Bruger</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Adgangskode</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Log ind</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal" id="bookTime" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Du er ved at booke</h5>
                    <button type="button" id="closeBookTop" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 mt-1">
                        <h4>Tid:</h4>
                        <h4 id="washTime">00:00 - 00:00</h4>
                    </div>
                    <div class="mb-3 mt-2">
                        <h5>Antal maskiner: 4</h5>
                        <h5>Tørretumbler: Ja</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" id="closeBookModal" data-bs-dismiss="modal">Luk</button>
                    <button type="button" class="btn btn-secondary" id="createBookingInSystem" data-bs-dismiss="modal">Opret</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="occupiedModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tiden er optaget</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Denne tid er desværre optaget, log ind for at aflyse din tid</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primaryBlue" data-bs-dismiss="modal">Find ny tid</button>
                    <button type="button" class="btn btn-secondary" id="cancelBookingBtn">Aflys tid</button>
                </div>
            </div>
        </div>
    </div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>

    const statusTime1 = document.querySelector('#status1');
    const statusTime2 = document.querySelector('#status2');
    const statusTime3 = document.querySelector('#status3');
    const statusTime4 = document.querySelector('#status4');
    const statusTime5 = document.querySelector('#status5');
    const statusTime6 = document.querySelector('#status6');
    const statusTime7 = document.querySelector('#status7');
    const statusTime8 = document.querySelector('#status8');

    const bookBtn1 = document.querySelector('#bookBtn1');
    const bookBtn2 = document.querySelector('#bookBtn2');
    const bookBtn3 = document.querySelector('#bookBtn3');
    const bookBtn4 = document.querySelector('#bookBtn4');
    const bookBtn5 = document.querySelector('#bookBtn5');
    const bookBtn6 = document.querySelector('#bookBtn6');
    const bookBtn7 = document.querySelector('#bookBtn7');
    const bookBtn8 = document.querySelector('#bookBtn8');

    const washTime = document.querySelector('#washTime');

    const createBooking = document.querySelector('#createBookingInSystem')
    const timeBtn = document.querySelectorAll('.timeBtn');

    let bookedButtonId = "";


    // Itererer over alle knappeelementer i 'timeBtn'-arrayet og tilføjer en klik-begivenhedslytter til hver knap
    timeBtn.forEach(button => {
        button.addEventListener('click', function() {
            // Gemmer den aktuelle knaps id i variablen 'buttonId'
            const buttonId = this.id;

            // Opdaterer værdien af 'bookedButtonId' til den id, der svarer til den aktuelle knaps id
            bookedButtonId = buttonId; // Sætter bookedButtonId

            // Logger id'et på den knap, der blev klikket på
            console.log("Clicked button ID:", bookedButtonId); // Logger button ID

            // Opdaterer teksten i elementet 'washTime' afhængigt af hvilken knap der blev klikket på
            if (buttonId === 'bookBtn1') {
                washTime.innerHTML = '07:00-09:00';
            } else if (buttonId === 'bookBtn2') {
                washTime.innerHTML = '09:00-11:00';
            } else if (buttonId === 'bookBtn3') {
                washTime.innerHTML = '11:00-13:00';
            } else if (buttonId === 'bookBtn4') {
                washTime.innerHTML = '13:00-15:00';
            } else if (buttonId === 'bookBtn5') {
                washTime.innerHTML = '15:00-17:00';
            } else if (buttonId === 'bookBtn6') {
                washTime.innerHTML = '17:00-19:00';
            } else if (buttonId === 'bookBtn7') {
                washTime.innerHTML = '19:00-21:00';
            } else if (buttonId === 'bookBtn8') {
                washTime.innerHTML = '21:00-23:00';
            }
        });
    });

    // Lytter efter klik-begivenheden på "createBooking"-knappen
    createBooking.addEventListener('click', () => {
        // Finder det knap-element, der blev brugt til at åbne modalvinduet
        const bookedButton = document.querySelector('#' + bookedButtonId);

        // Fjerner 'bg-primaryBlue'-klassen fra knappen, ændrer dens baggrundsfarve til 'bg-secondary' og markerer den som 'occupied'
        bookedButton.classList.remove('bg-primaryBlue');
        bookedButton.classList.add('bg-secondary');
        bookedButton.classList.add('occupied');

        // Ændrer attributten 'data-bs-target' for knappen til at pege på det nye modalvindue for tider der er booket ('#occupiedModal')
        bookedButton.setAttribute('data-bs-target', '#occupiedModal');
    });


    // Henter elementet med id 'time'
    const time = document.querySelector('#time');

    // Funktion til at vise aktuelt tidspunkt
    function showTime() {
        // Opretter et nyt Date-objekt for at hente aktuelt tidspunkt
        const date = new Date();
        // Henter timer fra det aktuelle tidspunkt, konverterer til streng og tilføjer et nul foran, hvis det er nødvendigt
        const hours = date.getHours().toString().padStart(2, 0);
        // Henter minutter fra det aktuelle tidspunkt, konverterer til streng og tilføjer et nul foran, hvis det er nødvendigt
        const minutes = date.getMinutes().toString().padStart(2, 0);
        // Samler tidspunktet i et format med timer, minutter og et kolon mellem dem
        const clock = hours + "<span id='colon'>:</span>" + minutes;
        // Udskriver det aktuelle tidspunkt til konsollen
        console.log(clock);
        // Opdaterer visningen af tidspunktet hvert sekund
        setTimeout(showTime, 1000);
        // Opdaterer HTML-indholdet af elementet med det aktuelle tidspunkt
        time.innerHTML = clock;
    }
    // Kalder funktionen for at starte visningen af tidspunktet
    showTime();


    // forslag til brugere, dummy data
    const users = [
        { username: '9st1', password: '9st1' },
        { username: '9st2', password: '9st2' },
        { username: '9st3', password: '9st3' },
        { username: '9st4', password: '9st4' },
        { username: '911', password: '911' },
        { username: '912', password: '912' },
        { username: '913', password: '913' },
        { username: '914', password: '914' },
        { username: '921', password: '921' },
        { username: '922', password: '922' },
        { username: '923', password: '923' },
        { username: '924', password: '924' },
    ];

    const logInForm = document.querySelector('#loginForm');
    const logInModal = document.querySelector('#logIn');
    const modalBookClose = document.querySelector('#closeBookModal');
    const modalCloseTop = document.querySelector('#closeBookTop');
    const modalCloseTopLog = document.querySelector('#closeBookTopLog');
    const bookModal = document.querySelector('#bookTime');

    const cancelBookingBtn = document.querySelector('#cancelBookingBtn');

    // Bruges til at lukke 'occupied' modalet og åbne log-in modalet når man klikker på 'Aflys tid'
    cancelBookingBtn.addEventListener('click', () => {
        // Lukker occupiedModal
        const occupiedModal = document.querySelector('#occupiedModal');
        occupiedModal.classList.remove('show');
        occupiedModal.setAttribute('aria-hidden', 'true');
        occupiedModal.setAttribute('style', 'display: none');

        // Viser logIn modal
        const logInModal = document.querySelector('#logIn');
        logInModal.classList.add('show');
        logInModal.setAttribute('aria-hidden', 'false');
        logInModal.setAttribute('style', 'display: block');

    });



    logInForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Forhindrer standard handling af submit-begivenheden, hvilket forhindrer siden i at genindlæse

        // Henter værdien af brugernavn og adgangskode fra de tilsvarende inputfelter
        const username = document.querySelector('#username').value;
        const password = document.querySelector('#password').value;

        // Finder det knap-element, der blev brugt til at åbne modalvinduet og ser om det har klassen 'occupied'
        const bookedButton = document.querySelector('#' + bookedButtonId);
        const isOccupied = bookedButton.classList.contains('occupied');
        bookedButton.setAttribute('data-bs-target', '#logIn');

        // Tjekker om anvendte brugernavn og kode stemmer overens med brugere i vores dummy data
        const user = users.find(u => u.username === username && u.password === password);

        if (user) {
            // Hvis brugeren er godkendt og knappen har klassen occupied så fjernes bookingen (farve og occupied klasse)
            if (isOccupied) {
                bookedButton.classList.remove('occupied');
                bookedButton.classList.remove('bg-secondary');
                bookedButton.classList.add('bg-primaryBlue');
            }

            // Luk logIn modalet
            logInModal.classList.remove('show');
            logInModal.setAttribute('aria-hidden', 'true');
            logInModal.setAttribute('style', 'display: none');
            document.querySelector('.modal-backdrop').remove();

            // Vis bookTime modalet men kun hvis knappen ikke har klassen 'occupied'
            if (!isOccupied) {
                bookModal.classList.add('show');
                bookModal.setAttribute('aria-hidden', 'false');
                bookModal.setAttribute('style', 'display: block');
            }
        } else {
            // hvis koden er forkert bliver denne alert message givet
            alert('Forkert kode');
        }
    });


    //HERUNDER ER DEFINEREDE EVENT LISTENERS FOR AT LUKKE MODALER, DETTE ER ANVENDT DA NOGLE AF MODAL ELEMENTERNE IKKE VILLE FORSVINDE VED LUK
    //DETTE BURDE KUNNE ÆNDRES

    modalCloseTop.addEventListener('click', () =>{
        bookModal.classList.remove('show');
        bookModal.setAttribute('aria-hidden', 'true');
        bookModal.setAttribute('style', 'display: none');
        document.querySelector('.modal-backdrop').remove();
    });

    //
    createBooking.addEventListener('click', () =>{
        bookModal.classList.remove('show');
        bookModal.setAttribute('aria-hidden', 'true');
        bookModal.setAttribute('style', 'display: none');
        document.querySelector('.modal-backdrop').remove();
    });


    modalBookClose.addEventListener('click', () =>{
        bookModal.classList.remove('show');
        bookModal.setAttribute('aria-hidden', 'true');
        bookModal.setAttribute('style', 'display: none');
        document.querySelector('.modal-backdrop').remove();
    });

    modalCloseTopLog.addEventListener('click', () =>{
        logInModal.classList.remove('show');
        logInModal.setAttribute('aria-hidden', 'true');
        logInModal.setAttribute('style', 'display: none');
        document.querySelector('.modal-backdrop').remove();
    });




</script>
</body>
</html>
