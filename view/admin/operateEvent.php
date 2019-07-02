<?php
include("../../model/pathToDataCenter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:1200px)" href="../../css/widescreen/admin/operate.css">
    <title>Edit Projects</title>
</head>
<body>
    <section id="container">
        <div class="sideBar">
            <div class="items">
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
                <div class="welcome"><h1>Welcome to Sabz Infra Solutions</h1></div>
                <div class="projectDetails">
                    <div class="item">
                        <div ><h1 class="serialNo">Serial No</h1></div>
                        <div class="projectName"><h1>Project Name</h1></div>
                        <div class="edit"style="background:transparent !important;"><h1>Edit</h1></div>
                        <div class="delete"style="background:transparent !important;"><h1>Delete</h1></div>
                    </div>
                </div>
                <?php
                $q = "select * from eventss";
                $query = mysqli_query($connection,$q);
                while($res = mysqli_fetch_array($query))
                {
                    ?>
                        <div class="projectDetails">
                            <div class="item">
                                <div class="serialNo"><h1 class="serialNo"><?php echo $res['event_id']?></h1></div>
                                <div class="projectName"><h1><?php echo $res['event_name']?></h1></div>
                                <div class="edit"><h1><a style="text-decoration: none;color: #fff !important;"href="../../view/admin/editEvent.php?event_id=<?php echo $res['event_id'];?>">Edit</a></h1></div>
                                <div class="delete"><h1><a href="../../controller/deleteEvent.php?event_id=<?php echo $res['event_id'];?>">Delete</a></h1></div>
                             </div>
                        </div>

                    <?php
                }
                ?>
                <div>
                </div>

        </div>

    </section>
</body>
</html>
