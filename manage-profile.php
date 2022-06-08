<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/manage-profile.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css" />
    <title>Manage profile</title>
</head>

<body>

    <!-- Navigation -->
    <div class="header" id="header">
        <div class="container--footer">
            <a class="logo" href="./index.php">Re3aya</a>
            <ion-icon class="menu" name="menu-outline"></ion-icon>
            <ul class="main-nav">
                <li><a href="./profile.php">Profile</a></li>
                <li><a href="./reservations.php">Reservations</a></li>
                <li class="active"><a href="">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="container">

        <div class="chage-password" id="chage-password">

            <a class="link profile" href="./profile.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd" />
                </svg>
                <p>
                    Profile
                </p>
            </a>

            <a class="link logout" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <p>
                    Logout
                </p>
            </a>

        </div>

        <div class="manage-profile-data">

            <p class="form-header">
                Manage Profile
            </p>

            <form class="edit-data-form" action="#">


                <div class="field-container">
                    <label class="label" for="user-name">Your Name <span class="required">*</span></label>
                    <input class="input-field" type="text" id="user-name" required>
                </div>

                <div class="field-container">
                    <label class="label" for="mobile-number">Mobile Number <span class="required">*</span></label>
                    <input class="input-field" type="tel" id="mobile-number" required>
                </div>

                <div class="field-container">
                    <label class="label" for="email">Email Address <span class="required">*</span></label>
                    <input class="input-field" type="email" id="email" required>
                </div>

                <div class="field-container">
                    <label class="label" for="password">Password</label>
                    <input class="input-field" type="password" id="password">
                </div>

                <div class="field-container">
                    <label class="label" for="birth-date">Birth Date</label>
                    <input class="input-field" type="date" id="birth-date">
                </div>

                <div class="field-container">
                    <label class="label" for="area">Area</label>
                    <select class="input-field area" name="area" id="area">
                        <option value="">Choose your area:</option>
                        <option value="giza">Giza</option>
                        <option value="cairo">Cairo</option>
                        <option value="october">October</option>
                    </select>
                </div>

                <div class="btns-container">
                    <div class="btns">
                        <button type="submit" class="btn save">Save</button>
                        <button class="btn cancel">Cancel</button>
                    </div>
                </div>

            </form>

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
                        <a href="./profile.php">Profile</a>
                    </li>
                    <li>
                        <ion-icon class="footer--icons" name="chevron-forward-outline"></ion-icon> 
                        <a href="./reservations.php">Reservations</a>
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