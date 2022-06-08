<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
    name="description"
    content="We provide the best choices for you.
    Adjust it to your health needs and connect with our highly qualified healthcare providers.
    You can consult with us which type of service is suitable for your health."
    >
    
    <title>Re3aya</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css" />
</head>

<body>

    <!-- Navigation -->
    <div class="header" id="header">
        <div class="container">
            <a class="logo" href="#">Re3aya</a>
            <ion-icon class="menu" name="menu-outline"></ion-icon>
            <ul class="main-nav">
                <li><a href="profile.php">Profile</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li class="login"><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>

    <!-- Start of landing -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Healthcare for you</h1>
                <p>Re3aya provides progressive, and affordable healthcare,accessible online for everyone</p>
                <div class="btn"><a href="#services" class="btn1">Request Service</a></div>
            </div>
            <div class="image">
                <img src="images/landing1.png" alt="landing photo">
            </div>
        </div>
    </div>
    <!-- End of landing -->


    <!-- Start of services -->
    <div class="services" id="services">
        <div class="container">
            <div class="main-heading">
                <h2>Our Services</h2>
                <p class="parag">We provide the best choices for you. Adjust it to your health needs and connect with our highly
                    qualified healthcare providers. you can consult with us which type of service is suitable for your
                    health</p>
            </div>

            <div class="services-container">

                <div class="box" onclick="window.location='./doctor.php';">
                    
                    <ion-icon class="services--icon" name="person-outline"></ion-icon>
                    
                    <div class="text">
                        <h3 class="service-title">Book a Doctor</h2>
                        <p class="service-description">Choose your doctor from various specialities</p>
                    </div>

                </div>

                <div class="box" onclick="window.location='./nurse.php';">

                    <ion-icon class="services--icon" name="medkit-outline"></ion-icon>
                    
                    <div class="text">
                        <h3 class="service-title">Book a Nurse</h3>
                        <p class="service-description">Choose your nurse from our highly qualified registered nurses</p>
                    </div>

                </div>

                <div class="box" onclick="window.location='./blood.php';">
                    
                    <ion-icon class="services--icon" name="water-outline"></ion-icon>
                    
                    <div class="text">
                        <h3 class="service-title">Blood Donation</h2>
                        <p class="service-description">We help you easily communication between blood donars </p>
                    </div>

                </div>

                <div class="box" onclick="window.location='./video.php';">

                    <ion-icon class="services--icon" name="videocam-outline"></ion-icon>

                    <div class="text">
                        <h3 class="service-title">Telehealth</h3>
                        <p class="service-description">Communicate with doctors with various specialities by a video call</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End of services -->

    <!-- About Us -->
    <div class="about" id="about">
        <div class="container">
            <div class="main-heading">
                <h2>About Us</h2>
                <p class="parag">We are Re3aya team,We facilitates communication between patients and healthcare providers.</p>
            </div>
            <div class="about-container">
                <div class="image">
                    <img src="images/about.png" alt="about photo">
                </div>
                <div class="text">
                    <h2>Leading healthcare providers</h1>
                        <p>We are Re3aya team, we developed a healthcare system that provides an easy way for you to
                            book an appointment with high qualified doctors and nurses in different specialisits
                            We facilitates communication between patients and healthcare providers.
                        </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Us -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="box">
                <div class="main-heading">
                    <h2>Contact Us</h2>
                    <p class="parag">for any complain contact with us</p>
                </div>
                <form>
                    <input class="input--name" type="text" placeholder="Your Name">
                    <input class="input--email" type="email" placeholder="Your Email">
                    <input class="input" placeholder="Tell Us About Your Needs" name="message"></input>
                    <input type="submit" class="active2" value="Send">
                </form>
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
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <ion-icon class="footer--icons" name="chevron-forward-outline"></ion-icon> 
                        <a href="#about">About Us</a>
                    </li>
                    <li>
                        <ion-icon class="footer--icons" name="chevron-forward-outline"></ion-icon>
                        <a href="#contact">Contact Us</a>
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
        
</body>

</html>