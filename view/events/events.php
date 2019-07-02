<?php
include("../../model/pathToDataCenter.php");
include('../../controller/subscribe.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width: 320px)  and (max-width:500px)" href="../../css/mobile/events.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:1200px)" href="../../css/tablet/events.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../../css/widescreen/events.css">
    <link rel="stylesheet" href="../../css/flickity.css" media="screen">
    <title>Event</title>
</head>
<body>
<nav id="navBar">
        <div class="logoBg">
            <a href="../../index.php"><h2 class="logo"><span style="font-stretch:100% ;letter-spacing: 1px; font-weight: 400; cursor: pointer; color: rgb(255, 0, 81);">WESAS EVENT</h2></a>
        </div>
        <div class="menu-wrap">
            <input type="checkbox" name="" class="toggler">
            <div class="hamburger"><div></div></div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li class="company"><a href="../about.php">ABOUT</a></li>
                            <li><a href="./events.php">EVENTS</a></li>
                            <li><a href="./gallery.php">GALLERY</a></li>
                            <li><a href="../contactUs.php">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <ul>
                <li class="company"><a href="../about.php">ABOUT</a></li>
                <li><a href="./events.php">EVENTS</a></li>
                <li><a href="./gallery.php">GALLERY</a></li>
                <li><a href="../contactUs.php">CONTACT US</a></li>
            </ul>
        </div>
</nav>


<div class="heading">
        <h1>
            Categories to explore
        </h1>
</div>

<div class="main-gallery gallery-1">

<?php
$displayphoto = "SELECT category_name,category_photo FROM category";
$querydisplay = mysqli_query($connection,$displayphoto);
while($result = mysqli_fetch_array($querydisplay))
{
?>
    <a href="./categoriseEvent.php?category_name=<?php echo $result['category_name'];?>"><img src="<?php echo $result['category_photo'];?>" style="width:176px; height:251px; padding: 0 1rem;"></a>
<?php
}
?>
</div>

<section id="events">
    <div class="heading">
        <h1>
            Choose Your Event
        </h1>
    </div>
    <div class="listOfEvent">

<?php
$displayquery = "SELECT event_name,event_description,event_photo,event_id,event_cost,category_name,event_name,event_date FROM eventss";
$querydisplay = mysqli_query($connection,$displayquery);
while($result = mysqli_fetch_array($querydisplay))
{
?>
    <div class="item">
        <div class="image">
        <a href="./eventDetails.php?event_id=<?php echo $result['event_id'];?>"><img src="<?php echo $result['event_photo'];?>" alt="<?php echo $result['event_name'];?>"></a>
        </div>
        <div class="eventDetails">
            <div class="eventName">
                <h1><?php echo $result['event_name'];?></h1>
            </div>
            <div class="info">
                <h1>Date: <?php echo $result['event_date'];?></h1>
                <h1>Fee: <?php echo $result['event_cost'];?></h1>
            </div>
            <div class="details">
                <a href="./eventDetails.php?event_id=<?php echo $result['event_id'];?>"><h1>More Details</h1></a>
            </div>
        </div>
        <div class="book">
            <a href="../registration.php?event_id=<?php echo $result['event_id'];?>"><button>Attend</button></a>
        </div>
    </div>
<?php
}
?>
    </div>
</section>
<?php
include('../../components/subscribe.php');
include('../../components/footer.php');
?>
<script src="../../js/flickity.pkgd.min.js"></script>
<script src="../../js/slider.js"></script>
</body>
</html>