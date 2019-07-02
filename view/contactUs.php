<?php
include('../controller/subscribe.php');
include('../controller/sendContactDetails.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width: 320px)  and (max-width:500px)" href="../css/mobile/contactUs.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:1200px)" href="../css/tablet/contactUs.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../css/widescreen/contactUs.css">
    <title>Document</title>
</head>
<body>
    <nav id="navBar">
        <div class="logoBg">
            <a href="../index.php"><h2 class="logo"><span style="font-stretch:100% ;letter-spacing: 1px; font-weight: 400; cursor: pointer; color: rgb(255, 0, 81);">WESAS EVENT</h2></a>
        </div>
        <div class="menu-wrap">
            <input type="checkbox" name="" class="toggler">
            <div class="hamburger"><div></div></div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li class="company"><a href="./about.php">ABOUT</a></li>
                            <li><a href="./events/events.php">EVENTS</a></li>
                            <li><a href="./events/gallery.php">GALLERY</a></li>
                            <li><a href="./contactUs.php">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <ul>
                <li class="company"><a href="./about.php">ABOUT</a></li>
                <li><a href="./events/events.php">EVENTS</a></li>
                <li><a href="./events/gallery.php">GALLERY</a></li>
                <li><a href="./contactUs.php">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
    <section id="container">
        <div class="content">
            <div class="contactDetails">
                <h1>Get in Touch</h1>
                <div class="details">
                <div class="itm">
                    <h1>Our Location</h1>
                    <h2>
                        Webbed Services & Softwares,<br>
                        Fourth Floor,<br>
                        86B/3 Topsia Road,<br>
                        Krishna Chambers,<br>
                        Topsia,<br>
                        Opposite : Porsche Showroom,<br>                        
                    </h2>
                </div>
                <div class="itm">
                    <h1>Enquire :</h1>
                    <h2>
                        events@wesas.in<br>
                        Ph:7980 7150 34<br>
                    </h2>
                </div>
            </div>
                <div class="contactForm">
                    <form action="../view/contactUs.php" method="POST">
                        <div class="emailName">
                            <input type="text" placeholder="Name" name="name">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="phoneMessage">
                            <input type="text" placeholder="Phone Number" id="phoneNumber" name="phoneNumber" style="width: 28rem;">
                            <input type="text" id="message" placeholder="Message" name="message"style="width: 28rem">
                        </div>
                        <button type="submit" name="contactSend">Submit</button>
                    </form>
                </div>
            </div>
            <div class="photo">
                <img src="../resource/eventCategoryImages/contact-dialer-hand-3071.jpg" alt="">
            </div>
        </div>
    </section>
<?php
include('../components/subscribe.php');
include('../components/footer.php');
?>
</body>
</html>