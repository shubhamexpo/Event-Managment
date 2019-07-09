<?php
include("../../model/pathToDataCenter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:900px) and (max-width:700px)" href="../../css/mobile/admin/checkEvent.css">
    <link rel="stylesheet" media="screen and (min-width:901px)" href="../../css/widescreen/admin/checkEvent.css">
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
                <div class="welcome"><h1>Wesas Event</h1></div>
                <div class="products">
                <?php
                $q = "select * from registredEvent";
                $query = mysqli_query($connection,$q);
                while($res = mysqli_fetch_array($query))
                {
                    ?>
                    <div class="item">
                    <label for="event_name">Sno</label>
                    <input type="text" value="<?php echo $res['id'];?>" >
                    <label for="event_name">Owner Name</label>
                    <input type="text"  value="<?php echo $res['full_name'];?>" >
                    <label for="event_date">Amount Paid</label>
                    <input type="text" value="<?php echo $res['event_cost'];?>">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $res['email'];?>">
                    <label for="event_name">Phone Number</label>
                    <input type="text" value="<?php echo $res['phone_number'];?>">
                    <label for="profession">Profession</label>
                    <input type="text" value="<?php echo $res['profession'];?>">
                    <label for="organization">Organization</label>
                    <input type="text" value="<?php echo $res['organization'];?>">
                    <label for="event_id">Event Id</label>
                    <input type="text" value="<?php echo $res['event_id'];?>">

                    <label for="event_name">Event Name</label>
                    <input type="text" value="<?php echo $res['event_name'];?>">
                    <label for="category_name">Category Name</label>
                    <input type="text" value="<?php echo $res['category_name'];?>">

                    <a href="../../controller/deleteRegistred.php?id=<?php echo $res['id'];?>"><button type="submit">Delete</button></a>
                    </div>
                    <?php
                }
                ?>
                </div>
        </div>
    </section>
</body>
</html>
