<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css" />
    <title>User profile</title>
</head>

<body>
    
    <!-- Navigation -->
    <div class="header" id="header">
        <div class="container--footer">
            <a class="logo" href="./index.php">Re3aya</a>
            <ion-icon class="menu" name="menu-outline"></ion-icon>
            <ul class="main-nav">
                <li class="active"><a href="">Contact Us</a></li>
            </ul>
        </div>
    </div>

    
    <div class="container--container">

        <div class="container">

            <div class="img-container">
                
                <img src="images/dave.jpg" alt="User profile image.">

                <label for="edit-img" class="edit-icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" user-data-icon edit-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                </label>

                <input type="file" class="edit-img" id="edit-img" />

            </div>

            <p class="user-name">
                Ali Mahmoud
            </p>

            <a class="btn manage" href="manage-profile.php">Manage Profile</a>

            <ul class="user-data-list">
                <li class="user-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="user-data-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <p>aliMahmoud2531@gmail.com</p>
                </li>
                <li class="user-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="user-data-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <p>+201116763825</p>
                </li>
                <li class="user-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="user-data-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Giza, Egypt</p>
                </li>
                <li class="user-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="user-data-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Jan 25, 2000</p>
                </li>
                <li class="user-data">

                </li>
            </ul>

            <div class="btn-container">

                <a class="btn reser" href="reservations.php">Reservations</a>

                <a class="btn donor" href="./blood.php">Be donor</a>

            </div>

        </div>
    </div>



     <!-- Footer -->
    <div class="footer">
        <div class="footer--container">

            <div class="footer--box re3aya--info">
                <div class="line">
                    <ion-icon class="footer--icons" name="location-outline"></ion-icon>
                    <div class="info">Egypt, Cairo, Giza</div>
                </div>
                <div class="line">
                    <ion-icon class="footer--icons" name="time-outline"></ion-icon>
                    <div class="info">Business Hours: 24 hours</div>
                </div>
                <div class="line">
                    <ion-icon class="footer--icons" name="call-outline"></ion-icon>
                    <div class="info">
                        <span>01157082417</span>
                        <span>01157082417</span>
                    </div>
                </div>
            </div>

            <div class="footer--box re3aya--links">
                <ul class="links">
                    <li>
                        <ion-icon class="footer--icons" name="chevron-forward-outline"></ion-icon>
                        <a href="./index.php">Home</a>
                    </li>
                </ul>
            </div>

            <div class="footer--box box--logo">
                <ul class="social">
                    <li>
                        <img src="images/22.jpg" alt="">
                    </li>
                    <li>
                        <img src="images/32.jpg" alt="">
                    </li>
                    <li>
                        <img src="images/4.jpg" alt="">
                    </li>
                    <li>
                        <img src="images/46.jpg" alt="">
                    </li>
                    <li>
                        <img src="images/ben.jpg" alt="">
                    </li>
                    <li>
                        <img src="images/86.jpg" alt="">
                    </li>
                </ul>
                <p class="text">
                    All rights reserved &copy; 2022
                </p>
            </div>

        </div> 

    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="js/common.js"></script>
    <script src="js/landing.js"></script>
</body>

</html>