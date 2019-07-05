<?php
if(isset($_POST['submit'])){
    $event_id = $_GET["event_id"];
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_cost = $_POST['event_cost'];
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
        $update="UPDATE eventss SET event_name='$event_name' ,event_date='$event_date',event_cost='$event_cost' ,event_description='$event_description', event_photo='$destinationFile',category_name='$category_name' WHERE event_id=$event_id";
        $query = mysqli_query($connection,$update);     
        header('location:../admin/editEvent.php');
    }
}
?>