<!DOCTYPE html>
<?php
include('config.php');
//error_reporting(E_ERROR | E_PARSE);

function filter_donor() {
    $city=$_POST["city"];
    $type=$_POST["type"];
    
    
        $query = "SELECT donor.btype, users.*   
        FROM users  
        INNER JOIN donor";
        $conditions = array();
    
        if(! empty($city)) {
          $conditions[] = "`city`='$city'";
        }
        if(! empty($type)) {
          $conditions[] = "`btype`='$type'";
        }
        
    
        $sql = $query;
        if (count($conditions) > 0) {
          $sql .= " ON " . implode(' AND ', $conditions);
          $sql .= " AND donor.uid=users.id";
        }
        
        
    
        return $sql;
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/blood.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css" />
    <title>Blood Donation</title>
</head>

<body>

    <!-- Navigation -->
    <div class="header" id="header">
        <div class="container--footer">
            <a class="logo" href="./index.php">Re3aya</a>
            <ion-icon class="menu" name="menu-outline"></ion-icon>
            <ul class="main-nav">
                <li><a href="./profile.php">Profile</a></li>
                <li class="active4"><a href="#doctor">Be donor</a></li>
                <li class="active"><a href="">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="landing" id="doctor">
        <div class="container">
            <div class="text">
                <h3>Find Blood Donors Near Your Location</h3>
                <p>Register to be a blood donor, give blood and save lives.</p>
            </div>
            <div class="input">
                <form method="POST">
                    <!-- <span>City</span> -->
                    <input name="city" class="input--location" list="city" placeholder="Choose City">
                    <datalist id="city">
                        <option value="Cairo">
                        <option value="Giza">
                        <option value="Alexandria">
                        <option value="Faiyum">
                        <option value="Aswan">
                        <option value="Asyut">
                        <option value="Beheira">
                        <option value="Beni Suef">
                        <option value="Dakahlia">
                        <option value="Damietta">
                        <option value="Gharbia">
                        <option value="Ismailia">
                        <option value="Kafr El Sheikh">
                        <option value="Luxor">
                        <option value="Matruh">
                        <option value="Minya">
                        <option value="Monufia">
                        <option value="New Valley">
                        <option value="North Sinai">
                        <option value="Port Said">
                        <option value="Qalyubia">
                        <option value="Qena">
                        <option value="Red Sea">
                        <option value="Sharqia">
                        <option value="Sohag">
                        <option value="South Sinai">
                        <option value="Suez">
                    </datalist>


                    <input name="type" class="input--blood-type" list="blood" placeholder="Blood Type">
                    <datalist id="blood">
                        <option value="A+">
                        <option value="A-">
                        <option value="B+">
                        <option value="B-">
                        <option value="AB+">
                        <option value="AB-">
                        <option value="O+">
                        <option value="O-">
                    </datalist>

                    <button type="submit" name="submit" class="btn">Search</button>
                </form>
            </div>
        </div>
    </div>


    <div class="donation" id="donation">
        <div class="container">
            <?php
            if(isset($_POST['submit'])){
                $selec=filter_donor();
                $run=mysqli_query($conn,$selec);
            }
            else{
               $select="SELECT donor.btype, users.*   
                FROM users  
                INNER JOIN donor
                ON donor.uid=users.id"; 
                $run=mysqli_query($conn,$select);
            }
                foreach($run as $row){
            ?>
            <div class="box">
                <img src="images/<?php echo$row['image'];?>" alt="" />
                <div class="nam">
                    <h3><?php echo$row['name']; ?></h3>
                    <ion-icon class="donation--help--icon" name="heart-half-outline"></ion-icon>
                    <!-- <i class="fa-solid fa-hand-holding-medical"></i> -->
                </div>
                <ul class="doctor--book-info">
                    <li>
                        <!-- <i class='fas fa-burn'></i> -->
                        <ion-icon class="donation--icon" name="water-outline"></ion-icon>
                        <p>Blood Type <span>(<?php echo$row['btype']; ?>)</span></p>
                    </li>
                    
                    <li>
                        <!-- <i class='fas fa-map-marker-alt'></i> -->
                        <ion-icon class="donation--icon" name="location-outline"></ion-icon>
                        <p><span><?php echo$row['area']; ?></span></p>
                    </li>
                    
                    <li>
                        <!-- <i class="fa fa-phone"></i> -->
                        <ion-icon class="donation--icon" name="call-outline"></ion-icon>
                        <p><span><?php echo$row['mobile']; ?></span></p>
                    </li>
                </ul>
                <div class="chaticon">
                    <a href="">
                        <h4>Contact with me</h4>
                        <ion-icon class="donation--chat--icon" name="chatbubble-ellipses-outline"></ion-icon>
                        <!-- <i class='far fa-comment-dots chat'></i> -->
                    </a>
                </div>
            </div>
<?php
                }
?>
            

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
    <script src="js/blood.js"></script>
    <script src="js/landing.js"></script>

</body>

</html>