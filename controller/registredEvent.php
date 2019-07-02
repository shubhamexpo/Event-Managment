<?php
if(isset($_POST['submit'])){
    $event_id = $_POST['event_id'];
    $event_name = $_POST['event_name'];
    $category_name = $_POST['category_name'];
    $full_name = $_POST['full_name'];
    $email =$_POST['email'];
    $phone_number = $_POST['phone_number'];
    $organization = $_POST['organization'];
    $event_cost = $_POST['event_cost'];
    $profession = $_POST['profession'];

    $registred = "INSERT INTO registredEvent(event_id,event_name,category_name,full_name,email,phone_number,organization,event_cost,profession)
    VALUES('$event_id','$event_name','$category_name','$full_name','$email','$phone_number','$organization','$event_cost','$profession')";
    $query = mysqli_query($connection,$registred);     
}

?>