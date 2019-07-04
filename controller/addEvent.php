<?php
if(isset($_POST['submit'])){
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_cost = $_POST['event_cost'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $event_description = $_POST['event_description'];
    $event_photo = $_FILES['event_photo'];
    $category_name = $_POST['category_name'];

    $fileName = $event_photo['name'];
    $fileError = $event_photo['error'];
    $filetmp = $event_photo['tmp_name'];

    $fileExtension = explode('.',$fileName);
    $fileCheck = strtolower(end($fileExtension));
    $fileExtensionStored = array('png','jpg','jpeg');

    if(in_array($fileCheck,$fileExtensionStored)){
        $destinationFile = '../../resource/eventImages/'.$fileName;
        move_uploaded_file($filetmp,$destinationFile);
        $addEvent = "INSERT INTO eventss(event_name,event_date,event_cost,latitude,longitude,event_description,event_photo,category_name)
        VALUES('$event_name','$event_date','$event_cost','$latitude','$longitude','$event_description','$destinationFile','$category_name')";
        $query = mysqli_query($connection,$addEvent);     
        header('location:../admin/addEvent.php');
    }
}

?>

