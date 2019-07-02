<?php
include('../model/pathToDataCenter.php');
include('../controller/registredEvent.php');
include('../controller/sendConfirmation.php');
include('../controller/subscribe.php');
?>
<?php 
$event_id = $_GET["event_id"];
$displayquery = "SELECT event_name,event_description,event_photo,event_id,category_name,event_cost,event_date	 FROM eventss WHERE event_id='$event_id'";
$querydisplay = mysqli_query($connection,$displayquery);
$result = mysqli_fetch_array($querydisplay)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width: 320px)  and (max-width:500px)" href="../css/mobile/registration.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:1200px)" href="../css/tablet/registration.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../css/widescreen/registration.css">
    <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="<color-code>" bolt-logo="<image path>"></script>
    <title>Register</title>
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
    <section id="registration">
        <div class="details">
            <h1><?php echo $result['event_name'];?></h1>
            <p><?php echo $result['event_description'];?></p>
        </div>
        <div class="registrationForm">
            <form action="" method="POST">
                <input type="text" name="event_name" value="<?php echo $result['event_name'];?>" id="" hidden>
                <input type="text" name="category_name" value="<?php echo $result['categoryt_name'];?>" id="" hidden>
                <input type="text" name="category_name" value="<?php echo $result['category_name'];?>" hidden>
                <input type="text" name="event_name" value="<?php echo $result['event_name'];?>" hidden>
                <input type="text" name="event_id" value="<?php echo $result['event_id'];?>" hidden>
                <label for="name">Full Name</label>
                <input type="text" name="full_name" placeholder="Your Answer" required>
                <label for="email">Email address</label>
                <input type="email" name="email" placeholder="Email" required>
                <label for="number">Phone Number</label>
                <input type="text" name="phone_number" id="" placeholder="Your Answer" required>
                <label for="organization">Organization/School</label>
                <input type="text" name="organization" id="" placeholder="Your Answer" required>
                <label for="profession">Profession</label>
                <input type="text" name="profession" id="" placeholder="Your Answer" required>
                <label for="">Amount to be paid Rs : <?php echo $result['event_cost'];?></label>
                <input type="text" name="event_cost" value="<?php echo $result['event_cost'];?>" hidden>
                <button name="submit" type="submit">Register</button>
            </form>
        </div>
    </section>
    <?php
include('../components/subscribe.php');
include('../components/footer.php');
?>
</body>
</html>