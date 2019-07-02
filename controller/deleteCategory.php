<?php
include("../model/pathToDataCenter.php");
session_start();
$category_id = $_GET['category_id'];
$query = "DELETE FROM category where category_id = $category_id";
mysqli_query($connection,$query);
header('location:../view/admin/operateCategory.php');
?>