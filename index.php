<?php
include('./model/pathToDataCenter.php');
include('./controller/subscribe.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width: 320px)  and (max-width:500px)" href="./css/mobile/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width: 1200px)" href="./css/tablet/tablet.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="./css/widescreen/widescreen.css">
    <link rel="stylesheet" href="./css/flickity.css" media="screen">
    <title>Wesas - Event Ticketing</title>
</head>
<body>
<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
<nav id="navBar">
    <div class="logoBg">
        <a href="./index.php"><h2 class="logo"><span style="font-stretch:100% ;letter-spacing: 1px; font-weight: 400; cursor: pointer; color: rgb(255, 0, 81);">WESAS EVENT</h2></a>
    </div>
    <div class="menu-wrap">
        <input type="checkbox" name="" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="./index.php" style="color: #fff !important ;">HOME</a></li>
                        <li class="company"><a href="./view/about.php">ABOUT</a></li>
                        <li><a href="./view/events/events.php">EVENTS</a></li>
                        <li><a href="./view/events/gallery.php">GALLERY</a></li>
                        <li><a href="./view/contactUs.php">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="./index.php" style="color: #fff !important ;">HOME</a></li>
            <li class="company"><a href="./view/about.php">ABOUT</a></li>
            <li><a href="./view/events/events.php">EVENTS</a></li>
            <li><a href="./view/events/gallery.php">GALLERY</a></li>
            <li><a href="./view/contactUs.php">CONTACT US</a></li>
        </ul>
    </div>
    <div class="login"><a href="./view/login.php"><i class="fas fa-lock"></i></a></div>
</nav>
<!-- ======================================================
                    Intro Video
========================================================= -->
<!-- Flickity HTML init -->
<div class="gallery js-flickity galllery-1">
    <img src="./resource/bg-desktop-rapoport-food.jpg"  alt="" class="gallery-celll">
    <img src="./resource/bg-desktop-rapoport-music.jpg" alt="" class="gallery-celll">
    <img src="./resource/bg-desktop-rapoport-yoga.jpg" alt="" class="gallery-celll">
</div>
<!-- ======================================================
                    Upcoming Events
========================================================= -->
<div id="heading">
    <h1>Trending Events</h1>
</div>
<div class="main-gallery galllery">

<?php
$displayquery = "SELECT event_name,event_description,event_photo,event_id,event_cost,category_name,event_name,event_date	 FROM eventss";
$querydisplay = mysqli_query($connection,$displayquery);
while($result = mysqli_fetch_array($querydisplay))
{
?>
    <div class="item gallery-cell item">
        <div class="image">
            <a href="./view/events/eventDetails.php?event_id=<?php echo $result['event_id'];?>"><img src=".<?php echo $result['event_photo'];?>" alt=""></a>
        </div>
        <div class="eventDetails">
            <div class="eventName">
                <h1><?php echo $result['event_name'];?></h1>
            </div>
            <div class="info">
                <h1>Date:<?php echo $result['event_date'];?></h1>
                <h1>Fee:<?php echo $result['event_cost'];?></h1>
            </div>
            <div class="details">
                <a href="./view/events/eventDetails.php?event_id=<?php echo $result['event_id'];?>"><h1>More Details</h1></a>
            </div>
        </div>
        <div class="book">
            <a href="./view/events/registration.php?event_id=<?php echo $result['event_id'];?>"><button>Attend</button></a>
        </div>
    </div>
<?php
}
?>
</div>
<!-- ======================================================
                    Subscribe
========================================================= -->
<?php
include('./components/subscribe.php');
include('./components/footer.php');
?>

<script src="./js/flickity.pkgd.min.js"></script>
<script src="./js/slider.js"></script>
</body>
</html>