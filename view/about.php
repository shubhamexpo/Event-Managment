<?php
include('../controller/subscribe.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width: 320px)  and (max-width:500px)" href="../css/mobile/about.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:1200px)" href="../css/tablet/about.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../css/widescreen/about.css">
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
                        </div>`
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
<section id="aboutArea">
        <div class="about">
            <div class="details">
                <h1>About Wesas</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum illo, unde fuga quidem libero, doloremque est facilis cum dolore impedit distinctio quam? Optio harum modi explicabo rem ipsum doloribus facilis iste possimus ullam dolor eligendi dolores ab recusandae praesentium blanditiis, magnam beatae asperiores temporibus ipsa repellendus. Ad laborum culpa itaque dolorem! Suscipit, incidunt nemo! Doloremque, ipsum quos? Error aut eius consequatur aspernatur eos. Quod eligendi iste aliquam quasi dolorum? Eum libero saepe est laudantium veritatis quisquam, nemo fugiat doloribus nisi inventore iste maxime voluptatem necessitatibus repellendus doloremque, voluptates mollitia officiis sapiente error. Non veniam porro expedita ipsa illo.<br><br>Vero nisi sit tempora, accusamus ipsum iure sapiente quidem, cum placeat enim deserunt impedit minima? Enim fugit ipsam doloribus delectus laboriosam sunt, accusamus debitis odit nostrum quis ullam dolorem vero perferendis eius. Eos tempore cumque sequi ratione minus unde dolore ab corporis, nisi possimus? Blanditiis, doloremque eum amet pariatur sunt perferendis atque.</p>
            </div>
            <div class="image">
                <img src="../resource/eventCategoryImages/concert-3387324_640.jpg" alt="">
            </div>
        </div>
</section>
<?php
include('../components/subscribe.php');
include('../components/footer.php');
?>
</body>
</html>