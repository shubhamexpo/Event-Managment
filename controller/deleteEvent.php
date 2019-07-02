<?php
include("../model/pathToDataCenter.php");
session_start();
$event_id = $_GET['event_id'];
$query = "DELETE FROM eventss where event_id = $event_id";
mysqli_query($connection,$query);
header('location:../view/admin/operateEvent.php');
?>