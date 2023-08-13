<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="section.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap');
    </style>

    <script src="https://kit.fontawesome.com/ac6fa1ff20.js" crossorigin="anonymous"></script>

    <link rel="icon" href="favicon.png">

    <title>KING'S CAFE | Home</title>
</head>

<body>
  
    <p class="head-add"> Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</p>
  
    <div class="sticky">
        <div class="container container-nav">
            <div class="site-title">
                <h1 style="font-family:'Cinzel Decorative', cursive;">King's Cafe</h1>
                <p class="subtitle" style="font-family: 'Ubuntu',sans-serif;">ROYAL CUSINE SIMPLY SERVE</p>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>



    <div class="banner-cont">
        <div class="banner-text"><strong>Welcome to <span>KINGS CAFE</span></strong></div>
        <img src="121.jpg" alt="banner">
    </div>
 

    <div class="sec-cont">
        <section class="sec1">
            <h1>Reservations</h1>
            <span></span>
            <br>
            <br>
            <p>
                Wednesday | Thursday | Sunday : 5.30 - 9.30PM <br>
                <br>
                Friday & Saturday : 5.00 - 10.00 pm <br>
                <br>
                Sunday Lunch : 12.30 - 1.30 PM <br>
                <br>
                <strong>Closed Monday & Tuesday</strong> <br>
            </p>
            <br>
            <span></span>
            <br>
            <br>
            <p style="font-size: .9rem;">*Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum beatae,
                repellendus vitae
                assumenda quae
                aliquid natus tempora aspernatur totam quo! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Impedit, velit. Natus ratione inventore qui ex commodi eaque ut assumenda ipsum delectus. Ratione
                dignissimos odit officia nulla delectus esse reiciendis libero?</p>
            ---
            <p style="font-size: .9rem;"> *Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum beatae,
                repellendus vitae
                assumenda quae
                aliquid natus tempora aspernatur totam quo!</p>
            <br>
    </div>

    <div style="padding-bottom:200px">
        
    </div>

    <div class="foot-cont" id="abc" style="bottom: 0em;">

        <div class="left">
            <div class="foot1-left">
                <a href="#">Covid-protocol</a>
            </div>
        </div>

        <div class="right">
            <div class="foot1-right">
                <a href="#">Oder Now</a>
            </div>
        </div>
        <marquee behavior="" direction="left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quo minima maiores.</p>
        </marquee>
    </div>

  

    <div class="footer-cont">
       
        <div class="footer-left">
            <div class="site-title footl-head">
                <h1 style="font-family:'Cinzel Decorative', cursive;">King's Cafe</h1>
                <p class="subtitle" style="font-family: 'Ubuntu',sans-serif;">ROYAL CUSINE SIMPLY SERVE</p>
            </div>
            <p class="dis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur est <span>Read More..</span>.</p>
            <div class="footl-foot">
                <span><a href="#">About Us</a></span>
                <span><a href="#">Company</a></span>
                <span><a href="#">Policy</a></span>
            </div>
        </div>

   
        <div class="footer-center1">
            <table>
                <tr>
                    <td style="color: #e4df97;">Helpful Links</td>
                    <td style="color: #e4df97;">Explore</td>
                    <td style="color: #e4df97;">Quik Links</td>
                </tr>
                <tr>
                    <td class="tds">Carrer</td>
                    <td class="tds"></tdclass>Events</td>
                    <td class="tds"></tdclass>Join Us</td>
                </tr>
                <tr>
                    <td class="tds"></tdclass>Support</td>
                    <td class="tds"></tdclass>Resturants</td>
                    <td class="tds"></tdclass>FAQ's</td>
                </tr>
                <tr>
                    <td class="tds"></tdclass>Traning</td>
                    <td class="tds"></tdclass>Royalty Plans</td>
                    <td class="tds"></tdclass>Terms & Conditions</td>
                </tr>
            </table>
        </div>

        <!-- footer center2 -->
        <div class="footer-center2">
            <table>
                <tr>
                    <td>
                        <h3 style="color: #e4df97;">Follow Us </h3>
                    </td>
                    <td><a href="#"><i class="	fa fa-facebook-official"></i></a></td>
                    <td> <a href="#"><i class="fab fa-instagram"></i></a></td>
                    <td><a href="#"><i class="fab fa-twitter"></i></a></td>
                </tr>
                <tr>
                    <td>
                        <h3 style="color: #e4df97;">Rate Us </h3>
                    </td>
                    <td><div class="tooltip"><a href="#"><i class="fab fa-foursquare "></i></a>
                        <span class="tooltiptext">four square</span>
                    </div>
                    </td>
                    <td><div class="tooltip"><a href="#"><i class="fab fa-yelp"></i></a>
                        <span class="tooltiptext">yelp</span>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 style="color: #e4df97;">Book At </h3>
                    </td>
                    <td> <a href=""><i class="fas fa-utensils"></i></a></td>
                    <td> <a href=""><i class="fab fa-penny-arcade"></i></a></td>
                    
                </tr>
                <tr>
                    <td>
                        <h3 style="color: #e4df97;">Payments </h3>
                    </td>
                    <td> <a href=""> <i class="fab fa-cc-mastercard"></i></a></td>
                    <td> <a href=""><i class="fab fa-cc-visa"></i></a></td>
                    <td> <a href=""><i class="fab fa-cc-paypal"></i></i></a></td>
                </tr>
            </table>
        </div>
      

        <div class="footer-right">
            <div class="rcont">
                <h2 style="color: #e4df97;">SK Web Solutions</h2>
                <label for=""><i class="fas fa-envelope"></i> bt20cse 013 & cse 181</label><br>
                <label for=""><i class="fas fa-phone-alt"></i> +91-8937-299-100</label><br>
                <label for=""> <i class="fas fa-map-marker-alt"></i> Mumbai,India</label><br>
                <span style="font-size: small; color: aqua;"><a href="#">Why this project?</a></span><br>
                <span style="font-size: small; color:#437474;"> &copy; Copyrigts 2022 | All rights reserved.Powered by SK Web Solutions</span>

            </div>
        </div>

        <!--js -->
        <script src="section.js"></script>


</body>

</html>