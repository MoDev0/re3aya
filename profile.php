<!DOCTYPE html>
<html lang="en">
<?php
include('config.php');
ob_start();
error_reporting(E_ERROR | E_PARSE);
if (isset($_SESSION['mail'])) {
    $mail = $_SESSION['mail'];
    $select = "SELECT * FROM`users` WHERE `mail`='$mail'";
    $run = mysqli_query($conn, $select);
    $arr = mysqli_fetch_array($run);
    $userId = $arr['id'];
    $img = $arr['image'];
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/nurse_login_signup.css" />

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
                
                <img src="images/<?php echo $img; ?>" alt="User profile image.">

                <label for="edit-img" class="edit-icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" user-data-icon edit-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                </label>

                <input type="file" class="edit-img" id="edit-img" />

            </div>

            <p class="user-name">
                <?php echo $arr['name']; ?>
            </p>

            <a class="btn manage" href="manage-profile.php">Manage Profile</a>

            <ul class="user-data-list">
                <li class="user-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="user-data-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <p><?php echo $arr['mail']; ?></p>
                </li>
                <li class="user-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="user-data-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <p><?php echo $arr['mobile']; ?></p>
                </li>
                <li class="user-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="user-data-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    <p><?php echo $arr['city']; ?>, Egypt</p>
                </li>
                
                <li class="user-data">

                </li>
            </ul>

            <div class="btn-container">

                <a class="btn reser" href="reservations.php">Reservations</a>

               

            </div>
            <?php
                 $type=$_POST['type'];
                 $sel="SELECT * FROM `donor` WHERE `uid`=$userId";
                 $runsel=mysqli_query($conn,$sel);
                 $count=mysqli_num_rows($runsel);
                 if($count>0){
                    echo "you are a blood donor";}
           
            

                    else{ ?>
                    <form  method="POST">
    <div class="btn-container">
            <div class="field-container">
                    <label class="label" for="blood-type">Your blood type</label>
                    <input class="input-field" type="text" id="user-name" name="type" required>
                </div>
            <button class="btn donor" type="submit" name="submit">Be donor</button>
</div>
</form>
<?php }?>

        </div>
    </div>
        <?php
            if(isset($_POST['submit'])){
                $type=$_POST['type'];
                $insert="INSERT INTO `donor` (`uid`,`btype`) VALUES ('$userId','$type')";
                
                $runi=mysqli_query($conn,$insert);
                if($runi){
                    echo "you are now one of blood donators, Thank you";
                    header("refresh:2,url=blood.php");
                }
                else{
                    echo "something went wrong";
                }
            }
        ?>


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
<?php
} else {
    echo "you have to login first";
    header("refresh:5,url=login.php");
}
?>