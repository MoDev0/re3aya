<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/nurse_login_signup.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css" />
    <title>Login</title>
</head>

<body>

    <!-- Navigation -->
    <div class="header" id="header">
        <div class="container--footer">
            <a class="logo" href="./index.php">Re3aya</a>
            <ion-icon class="menu" name="menu-outline"></ion-icon>
            <ul class="main-nav">
                <!-- <li><a href="./profile.php">Profile</a></li> -->
                <!-- <li><a href="./reservations.php">Reservations</a></li> -->
            </ul>
        </div>
    </div>

    <div class="container">

        <div class="manage-profile-data">

            <p class="form-header">
                Login
            </p>

            <form class="edit-data-form" action="#">

                <div class="field-container">
                    <label class="label" for="email">Email Address</label>
                    <input class="input-field" type="email" id="email" required>
                </div>
                
                <div class="field-container">
                    <label class="label" for="password">Password</label>
                    <input class="input-field" type="password" id="password" required>
                </div>

                <div class="btns-container">
                    <div class="btns">
                        <button type="submit" class="btn login">Login</button>
                        <a class="create--account-or--login" href="./signup.php">Create account</a>
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

    <script src="js/landing.js"></script>
    <script src="js/common.js"></script>
</body>

</html>