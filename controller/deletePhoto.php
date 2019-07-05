<?php
include("../model/pathToDataCenter.php");
$photo_id = $_GET['photo_id'];
$query = "DELETE FROM gallery where photo_id = $photo_id";
mysqli_query($connection,$query);
header('location:../view/admin/deleteGalleryPhoto.php');
?>