<?
include("../../model/pathToDataCenter.php");
?>
<?php
include("../../controller/editEvent.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:1200px)" href="../../css/widescreen/admin/addEvent.css">
    <title>Admin</title>
</head>
<body>
    <section id="container">
        <div class="sideBar">
            <div class="items">
            <div class="title"><h1>Star International</h1></div>
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
                <div class="welcome"><h1>Wesas Event</h1></div>
                <div class="projects">
                <form action="" method="POST" enctype="multipart/form-data">
                    <select name="category_name">
                    <?php
                        $displayquery = "SELECT category_name FROM  category";
                        $querydisplay = mysqli_query($connection,$displayquery);
                        while($result = mysqli_fetch_array($querydisplay)){
                        ?>
                        <option value="<?php  echo $result['category_name'];?>"><?php echo $result['category_name'];?></option>
                        <?php
                        }
                    ?>
                    </select>
                    <label for="event_name">Event Name</label>
                    <input type="text" name="event_name" placeholder="Event Name" required >
                    <label for="event_date">Event Date</label>
                    <input type="date" name="event_date" required>
                    <label for="event_cost">Event Cost</label>
                    <input type="number" name="event_cost" id="">
                    <label for="event_description">Event Description</label>
                    <textarea name="event_description" cols="30" rows="10"></textarea>
                    <label for="event_photo">Event Photo</label>
                    <input type="file" name="event_photo">
                    <label for="latitude">Latitude</label>
                    <input type="text" name="latitude">
                    <label for="longitude">Longitude</label>
                    <input type="text" name="longitude" id="">
                    <button type="submit" name="submit">Add Event</button>
                </form>
                </div>
        </div>
    </section>
</body>
</html>