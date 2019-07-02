<?php 
include("../../model/pathToDataCenter.php");
include('../../controller/subscribe.php');

$event_id = $_GET["event_id"];
$displayquery = "SELECT event_name,event_description,event_photo,event_id,category_name,event_cost,event_date,latitude,longitude	 FROM eventss WHERE event_id='$event_id'";
$querydisplay = mysqli_query($connection,$displayquery);
$result = mysqli_fetch_array($querydisplay)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width: 320px)  and (max-width:500px)" href="../../css/mobile/eventDetails.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:1200px)" href="../../css/tablet/eventDetails.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../../css/widescreen/eventDetails.css">
    <title>Document</title>
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
    <section id="details">
        <div class="headerr">
            <div class="images">
                <img src="<?php echo $result['event_photo'];?>" alt="<?php echo $result['event_name'];?>">
            </div>
            <div class="register">
                <h1>Date:<?php echo $result['event_date'];?></h1>
                <h1><?php echo $result['event_name'];?></h1>
                <a href="../registration.php?event_id=<?php echo $result['event_id'];?>"><button>Register</button></a>
            </div>
        </div>
        <div class="eventDetails">
            <p><?php echo $result['event_description'];?></p>
        </div>
    </section>
    <div id="map"></div>
    <?php
include('../../components/subscribe.php');
include('../../components/footer.php');
?>
    <script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: <?php echo $result['latitude'];?>, lng: <?php echo $result['longitude'];?>,};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu_WOOPZqW9ttS24RGk6S3mfy003uXt5c&callback=initMap">
    </script>
</body>
</html>