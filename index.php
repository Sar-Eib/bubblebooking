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

        <div type="button" id="bookBtn1" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">07:00 - 09:00</div>
                    <div id="status1" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn2" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">09:00 - 11:00</div>
                    <div id="status2" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn3" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">11:00 - 13:00</div>
                    <div id="status3" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn4" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">13:00 - 15:00</div>
                    <div id="status4" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn5" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">15:00 - 17:00</div>
                    <div id="status5" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn6" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">17:00 - 19:00</div>
                    <div id="status6" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn7" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">19:00 - 21:00</div>
                    <div id="status7" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>
        <div type="button" id="bookBtn8" class="timeBtn bg-primary rounded-3 col-5 p-1 m-2" data-bs-toggle="modal" data-bs-target="#logIn">
            <div class="col-5 mx-auto text-light py-3">
                <div class="" id="card1">
                    <div class="fw-bold fs-4 text-center">21:00 - 23:00</div>
                    <div id="status8" class="text-center">
                        <span>Optaget</span>
                        <span>Ledigt</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal" id="logIn" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Log ind</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    <p>Tiden er desværre optaget, log ind for at aflyse din tid</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Luk</button>
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


    timeBtn.forEach(button => {
        button.addEventListener('click', function() {
            const buttonId = this.id;

            if (buttonId === 'bookBtn1') {
                washTime.innerHTML = '07:00-09:00';
            } else if (buttonId === 'bookBtn2') {
                washTime.innerHTML = '09:00-11:00';
            } else if (buttonId === 'bookBtn3') {
                washTime.innerHTML = '11:00-13:00';
            }else if (buttonId === 'bookBtn4') {
                washTime.innerHTML = '13:00-15:00';
            }else if (buttonId === 'bookBtn5') {
                washTime.innerHTML = '15:00-17:00';
            }else if (buttonId === 'bookBtn6') {
                washTime.innerHTML = '17:00-19:00';
            }else if (buttonId === 'bookBtn7') {
                washTime.innerHTML = '19:00-21:00';
            }else if (buttonId === 'bookBtn8') {
                washTime.innerHTML = '21:00-23:00';
            }
            bookedButtonId = buttonId;
        });
    });

    createBooking.addEventListener('click', () => {
        const bookedButton = document.getElementById(bookedButtonId);
        bookedButton.classList.remove('bg-primary');
        bookedButton.classList.add('bg-secondary');
        bookedButton.classList.add('occupied');
    });


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
    const bookModal = document.querySelector('#bookTime');

    // behandler log in informationen
    logInForm.addEventListener('submit', function(event) {
        event.preventDefault(); // ingen form submission
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Tjekker om brugernavn og adgangskode stemmer overens med en bruger i systemet
        const user = users.find(u => u.username === username && u.password === password);
        if (user) {
            logInModal.classList.remove('show'); // Hide the login modal
            logInModal.setAttribute('aria-hidden', 'true');
            logInModal.setAttribute('style', 'display: none');
            bookModal.classList.add('show'); // Show the bookTime modal
            bookModal.setAttribute('aria-hidden', 'false');
            bookModal.setAttribute('style', 'display: block');
        } else {
            alert('Forkert kode');
        }
    });



    modalCloseTop.addEventListener('click', () =>{
        bookModal.classList.remove('show');
        bookModal.setAttribute('aria-hidden', 'true');
        bookModal.setAttribute('style', 'display: none');
        document.querySelector('.modal-backdrop').remove();
    });

    // Add event listener to "Opret" button on bookTime modal
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

</script>
</body>
</html>
