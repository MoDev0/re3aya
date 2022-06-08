<!DOCTYPE html>
<html lang="en">
<?php
           include('config.php');
            if (isset($_POST["submit"])){
                $fileName = $_FILES['photo']['name'];
                $target_dir = "C:/xampp/htdocs/grad/images/";
                $target_file = $target_dir .'/'. basename($fileName);
                
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                $extensions_arr = array("jpg","jpeg","png","gif");
                
                if( in_array($imageFileType,$extensions_arr) ){
                
                  $image_base64 = base64_encode(file_get_contents($_FILES['photo']['tmp_name']) );
                  $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
                }
            $name=$conn->real_escape_string($_POST["name"]);
            $phone=$conn->real_escape_string($_POST["phone"]);
            $mail=$conn->real_escape_string($_POST["mail"]);
            $date=$conn->real_escape_string($_POST["date"]);
            $gender=$conn->real_escape_string($_POST["gender"]);
            $city=$conn->real_escape_string($_POST["city"]);
            $area=$conn->real_escape_string($_POST["area"]);
            $pass=$conn->real_escape_string($_POST["pass"]);
        if(empty($date)){
            array_push($error,"date is needed");
        }
        if(empty($name)){
            array_push($error,"name is needed");
        }
        if(empty($phone)){
            array_push($error,"phone is needed");
        }
        if(empty($mail)){
            array_push($error,"mail is needed");
        }
        if(empty($gender)){
            array_push($error,"gender is needed");
        }
        if(empty($city)){
            array_push($error,"city is needed");
        }
        if(empty($area)){
            array_push($error,"area is needed");
        }
        if(empty($pass)){
            array_push($error,"password is needed");
        }
        if(empty($fileName)){
            $fileName="32.jpg";
        }
        
        move_uploaded_file($_FILES['photo']['tmp_name'],$target_dir.$fileName);
        $select="SELECT * FROM`users`WHERE `mail`='$mail'";
            $run=mysqli_query($conn,$select);
            $nums=mysqli_num_rows($run);
            if($nums>0){
                array_push($error,"Email Already exist");
            }
            foreach($error as $er){echo "<h2>$er</h2>";}
            if(count($error)==0){
        $sql="INSERT INTO `users` (`name`,`mobile`,`mail`,`birth`,`gender`,`city`,`area`,`image`,`pass`,`type`) VALUES('$name','$phone','$mail','$date','$gender','$city','$area','".$fileName."','$pass','user')";
        if(mysqli_query($conn,$sql)){
        $_SESSION['mail']=$mail;
        echo"Welcome";
        header("refresh:4,url=index.php");
        } 
        else{
          echo "something went wrong" ;
        }

    }}
            ?>
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
    <title>Sign Up</title>
</head>

<body>

    <!-- Navigation -->
    <div class="header" id="header">
        <div class="container--footer">
            <a class="logo" href="./index.php">Re3aya</a>
            <ion-icon class="menu" name="menu-outline"></ion-icon>
            <ul class="main-nav">
                <li class="login-btn"><a href="./login.php">Login</a></li>
            </ul>
        </div>
    </div>

    <div class="container">

        <div class="manage-profile-data">

            <p class="form-header">
                Sign Up
            </p>

            <form class="edit-data-form" method="POST" enctype="multipart/form-data">

                <div class="field-container">
                    <label class="label" for="user-name">Your Name</label>
                    <input class="input-field" type="text" id="user-name" name="name" required>
                </div>

                <div class="field-container">
                    <label class="label" for="mobile-number">Mobile Number</label>
                    <input class="input-field" type="tel" id="mobile-number" name="phone" required>
                </div>

                <div class="field-container">
                    <label class="label" for="email">Email Address</label>
                    <input class="input-field" type="email" id="email" name="mail" required>
                </div>

                
                <div class="field-container">
                    <label class="label" for="birth-date">Birth Date</label>
                    <input class="input-field" type="date" id="birth-date" name="date" required>
                </div>
                
                <div class="field-container">
                    <label class="label" for="gender">Gender</label>
                    <select class="input-field gender" name="gender" id="gender" required>
                        <option value="">Your gender:</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="field-container">
                    <label class="label" for="city">City</label>
                    <select class="input-field city" name="city" id="city" required>
                        <option value="">Choose your city:</option>
                        <option value="giza">Giza</option>
                        <option value="cairo">Cairo</option>
                    </select>
                </div>
                
                <div class="field-container">

                    <label class="label" for="area">Area</label>
                    <select class="input-field area" name="area" id="area" required>
                        <option value="">Choose your area:</option>
                        
                        <option value="El Zamalek">El Zamalek</option>
                        <option value="El Maadi">El Maadi</option>
                        <option value="Garden City">Garden City</option>

                        <option value="Heliopolis">Heliopolis</option>
                        <option value="Tagamoa El Khames">Tagamoa El Khames</option>
                        <option value="Madinaty">Madinaty</option>

                        <option value="Downtown">Downtown</option>
                        <option value="Nasr City">Nasr City</option>
                        <option value="El Manial">El Manial</option>

                        <option value="El Mohandiseen">El Mohandiseen</option>
                        <option value="Ain Shams">Ain Shams</option>
                        <option value="Badr city">Badr city</option>

                        <option value="El Salam city">El Salam city</option>
                        <option value="El Maadi">El Maadi</option>
                        <option value="El Abbasia">El Abbasia</option>

                        <option value="El Shoubra">El Shoubra</option>
                        <option value="El merg">El merg</option>
                        <option value="El Rehab">El Rehab</option>

                        <option value="Helwan">Helwan</option>
                        <option value="Masr El Kadima">Masr El Kadima</option>
                        <option value="El Manial">El Sayeda Zainab</option>

                        <option value="El Sayeda Zainab">El Sayeda Zainab</option>
                        <option value="Masr El Kadima">Masr El Kadima</option>
                        <option value="6th October">6th October</option>

                        <option value="El Haram">El Haram</option>
                        <option value="Dokki">Dokki</option>
                        <option value="Faisl">Faisl</option>

                        <option value="El Sheikh Zayed">El Sheikh Zayed</option>
                        <option value="El Agouza">El Agouza</option>
                        <option value="El Giza">El Giza</option>
                        <option value="Imbaba">Imbaba</option>
                    </select>

                </div>

                <div class="field-container">
                    <label class="label" for="profile">Profile Image</label>
                    <input class="upload--img" type="file" name="photo" accept="image/*">
                </div>
                
                <div class="field-container">
                    <label class="label" for="password">Password</label>
                    <input class="input-field" type="password" name="pass" id="password" required>
                </div>

                <div class="btns-container">
                    <div class="btns">
                        <button type="submit" name="submit" class="btn signup">Sign Up</button>
                        <a class="create--account-or--login doctor" href="./doctor-signUp.php">Are you a doctor?</a>
                        <a class="create--account-or--login nurse" href="./nurse-signUp.php">Are you a nurse?</a>
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