<?php
include("../../model/pathToDataCenter.php");
include("../../controller/addPreviousEvent.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:300px) and (max-width:900px)" href="../../css/mobile/admin/addEvent.css">
    <link rel="stylesheet" media="screen and (min-width:901px)" href="../../css/widescreen/admin/addEvent.css">
    <title>Admin</title>
</head>
<body>
    <section id="container">
        <div class="sideBar">
        <div class="sideBar">
        <div class="title"><h1>Wesas Event</h1></div>
            <div class="dashBoard"style="cursor:pointer;"onclick="document.location='../../view/admin/controlCenter.php'"><h1><a href="../../view/admin/controlCenter.php">Dashboard</a></h1></div>
            <div class="addProject"style="cursor:pointer;"onclick="document.location='../../view/admin/addEvent.php'"><h1><a href="../../view/admin/addEvent.php">Add Event</a></h1></div>
            <div class="editProject"style="cursor:pointer;"onclick="document.location='../../view/admin/operateEvent.php'"><h1><a href="../../view/admin/operateEvent.php">Edit/Delete Event</a></h1></div>
            <div class="editProject"style="cursor:pointer;"onclick="document.location='../../view/admin/checkEvent.php'"><h1><a href="../../view/admin/checkEvent.php">Check Event</a></h1></div>
            <div class="editProject"style="cursor:pointer;"onclick="document.location='../../view/admin/addCategory.php'"><h1><a href="../../view/admin/addCategory.php">Add Category</a></h1></div>
            <div class="editProject"style="cursor:pointer;"onclick="document.location='../../view/admin/operateCategory.php'"><h1><a href="../../view/admin/operateCategory.php">Edit/Delete Category</a></h1></div>
            <div class="editProject"style="cursor:pointer;"onclick="document.location='../../view/admin/purchasedEvent.php'"><h1><a href="../../view/admin/purchasedEvent.php">Purchased Event</a></h1></div>
            <div class="editProject"style="cursor:pointer;"onclick="document.location='../../view/admin/addGalleryPhoto.php'"><h1><a href="../../view/admin/addGalleryPhoto.php">Add Gallery Photo</a></h1></div>
            <div class="editProject"style="cursor:pointer;"onclick="document.location='../../view/admin/deleteGalleryPhoto.php'"><h1><a href="../../view/admin/deleteGalleryPhoto.php">Delete Gallery Photo</a></h1></div>
        </div>
        </div>
        <div class="operation">
                <div class="welcome"><h1>Welcome to Wesas Event</h1></div>
                <div class="projects">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="photo">Event Photo</label>
                    <input type="file" name="photo">
                    <button type="submit" name="submit">Add Photo</button>
                </form>
                </div>
        </div>
    </section>
</body>
</html>
