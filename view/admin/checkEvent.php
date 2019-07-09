<?php
include("../../model/pathToDataCenter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:300px) and (max-width:900px)" href="../../css/mobile/admin/checkEvent.css">
    <link rel="stylesheet" media="screen and (min-width:901px)" href="../../css/widescreen/admin/addEvent.css">
    <title>Admin</title>
</head>
<body>
    <section id="container">
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
        <div class="operation">
                <div class="welcome"><h1>Welcome to Sabz Infra Solutions</h1></div>
                <div class="products">
                <?php
                $q = "select * from eventss";
                $query = mysqli_query($connection,$q);
                while($res = mysqli_fetch_array($query))
                {
                    ?>
                    <div class="item">
                    <label for="event_name">Event Id</label>
                    <input type="text" name="event_name" value="<?php echo $res['event_id'];?>" >
                    <label for="event_name">Event Name</label>
                    <input type="text"  placeholder="Event Name" value="<?php echo $res['event_name'];?>" >
                    <label for="event_date">Event Date</label>
                    <input type="date" id="" value="<?php echo $res['event_date'];?>">
                    <label for="event_cost">Event Cost</label>
                    <input type="number" value="<?php echo $res['event_cost'];?>">
                    <label for="event_description">Event Description</label>
                    <textarea  cols="30" rows="10" value="<?php echo $res['event_description'];?>"><?php echo $res['event_description'];?></textarea>
                    <a href="../../controller/deleteEvent.php?event_id=<?php echo $res['event_id'];?>"><button type="submit">Delete</button></a>
                    </div>
                    <?php
                }
                ?>
                </div>
        </div>
    </section>
</body>
</html>