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
    <link rel="stylesheet" href="css/telehealth_doctor.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css" />
    <title>Video Call</title>
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

    <div class="landing" id="doctor">
        <div class="container">
            <div class="text">
                <h3>Book a Consultation Call</h3>
                <p>Video Call with doctor</p>
            </div>
            <div class="input">
                <form>
                    <!-- <span>Speciality</span> -->
                    <input list="speciality" placeholder="Choose Speciality">
                    <datalist id="speciality">
                        <option value="Diagnostic radiology">
                        <option value="Dermatology">
                        <option value="Anesthesiology">
                        <option value="Allergy and immunology">
                        <option value="Neurology">
                        <option value="Obstetrics and gynecology">
                        <option value="Ophthalmology">
                        <option value="Pediatrics">
                        <option value="Psychiatry">
                        <option value="Surgery">
                        <option value="Urology">
                        <option value="Cardiologists">
                        <option value="Colon and Rectal Surgeons">
                        <option value="Critical Care Medicine Specialists">
                        <option value="Endocrinologists">
                        <option value="Hematologists">
                        <option value="Internists"></option>
                        <option value="Oncologists"></option>
                        <option value="Osteopaths"></option>
                        <option value="Pulmonologists"></option>
                    </datalist>
                   
                    <label for="docname"></label>
                    <input type="text" placeholder="Doctor Name" id="docname">

                    <button class="btn">Search</button>
                </form>
            </div>
        </div>
    </div>


    <div class="alldoctors" id="alldoctors">
        <div class="container">
             

            <div class="box">
                <div class="col">
                    
                    <img src="images/customer-4.jpg" alt="" />
                    
                    <div class="name--icon">
                        <h3>Yousef Dergham</h3>
                        <ion-icon name="videocam-outline"></ion-icon>
                    </div>

                    <span class="title">Consultant of General Surgery</span>
                   
                    <div class="rate">
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    
                    <ul class="data--list">
                        <li>
                            <ion-icon class="data--list--icon" name="pricetag-outline"></ion-icon>
                            <p class="active1"><span>General Surgeon Specialized in Colon Tumor.</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="location-outline"></ion-icon>
                            <p><span>El-Dokki : micheel bakhoum</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="cash-outline"></ion-icon>
                            <p>Fees : <span>300 EGP</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="call-outline"></ion-icon>
                            <p><span>16676</span> - Cost of regular call</p>
                        </li>
                    </ul>
                </div>
                <div class="appointment">
                    <div class="appointment--container-book">
                        <h2>Choose your appointment</h2>
                        <div class="time">
                            <form action="">
                                <input required type="datetime-local" id="meeting-time" name="meeting-time"
                                    value="2018-06-12T19:30" min="2022-06-16T08:00" max="2022-06-30T16:00">
                            </form>
                        </div>
                    </div>
                    <button class="btn book--btn">Book Online</button>
                </div>
            </div>

            <div class="box">
                <div class="col">
                    
                    <img src="images/steve.jpg" alt="" />
                    
                    <div class="name--icon">
                        <h3>Yousef Dergham</h3>
                        <ion-icon name="videocam-outline"></ion-icon>
                    </div>

                    <span class="title">Consultant of General Surgery</span>
                   
                    <div class="rate">
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    
                    <ul class="data--list">
                        <li>
                            <ion-icon class="data--list--icon" name="pricetag-outline"></ion-icon>
                            <p class="active1"><span>General Surgeon Specialized in Colon Tumor.</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="location-outline"></ion-icon>
                            <p><span>El-Dokki : micheel bakhoum</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="cash-outline"></ion-icon>
                            <p>Fees : <span>300 EGP</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="call-outline"></ion-icon>
                            <p><span>16676</span> - Cost of regular call</p>
                        </li>
                    </ul>
                </div>
                <div class="appointment">
                    <div class="appointment--container-book">
                        <h2>Choose your appointment</h2>
                        <div class="time">
                            <form action="">
                                <input required type="datetime-local" id="meeting-time" name="meeting-time"
                                    value="2018-06-12T19:30" min="2022-06-16T08:00" max="2022-06-30T16:00">
                            </form>
                        </div>
                    </div>
                    <button class="btn book--btn">Book Online</button>
                </div>
            </div>

            <div class="box">
                <div class="col">
                    
                    <img src="images/22.jpg" alt="" />
                    
                    <div class="name--icon">
                        <h3>Yousef Dergham</h3>
                        <ion-icon name="videocam-outline"></ion-icon>
                    </div>

                    <span class="title">Consultant of General Surgery</span>
                   
                    <div class="rate">
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon fill" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="star--icon" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    
                    <ul class="data--list">
                        <li>
                            <ion-icon class="data--list--icon" name="pricetag-outline"></ion-icon>
                            <p class="active1"><span>General Surgeon Specialized in Colon Tumor.</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="location-outline"></ion-icon>
                            <p><span>El-Dokki : micheel bakhoum</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="cash-outline"></ion-icon>
                            <p>Fees : <span>300 EGP</span></p>
                        </li>
                        <li>
                            <ion-icon class="data--list--icon" name="call-outline"></ion-icon>
                            <p><span>16676</span> - Cost of regular call</p>
                        </li>
                    </ul>
                </div>
                <div class="appointment">
                    <div class="appointment--container-book">
                        <h2>Choose your appointment</h2>
                        <div class="time">
                            <form action="">
                                <input required type="datetime-local" id="meeting-time" name="meeting-time"
                                    value="2018-06-12T19:30" min="2022-06-16T08:00" max="2022-06-30T16:00">
                            </form>
                        </div>
                    </div>
                    <button class="btn book--btn">Book Online</button>
                </div>
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
                    <a href="./profile.php">Profile</a>
                </li>
                <li>
                    <ion-icon class="footer--icons" name="chevron-forward-outline"></ion-icon> 
                    <a href="./reservations.php">Reservations</a>
                </li>
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
    <script src="js/doctor.js"></script>
    <script src="js/landing.js"></script>

</body>

</html>