<?php
include("../model/pathToDataCenter.php");
session_start();
$registred_id = $_GET['id'];
$query = "DELETE FROM registredEvent where id = $registred_id";
mysqli_query($connection,$query);
header('location:../view/admin/purchasedEvent.php');
?>