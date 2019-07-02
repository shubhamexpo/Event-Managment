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
    <link rel="stylesheet" media="screen and (min-width: 320px)  and (max-width:500px)" href="../../css/mobile/gallery.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:1200px)" href="../../css/tablet/gallery.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../../css/widescreen/gallery.css">
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
                                <li><a href="./events/events.php">EVENTS</a></li>
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
    <div id="heading">
        <h1>Our Past Events</h1>
    </div>
    <section id="container">
        <div class="gallery">

        <?php
                $q = "select photo from gallery";
                $query = mysqli_query($connection,$q);
                while($res = mysqli_fetch_array($query))
                {
                    ?>
                    <img src="<?php echo $res['photo'];?>">
                    <?php
                }
                ?>
        </div>
    </section>
    <?php
include('../../components/subscribe.php');
include('../../components/footer.php');
?>
</body>
</html>


