<?php
if(isset($_POST['submit'])){
    $photo = $_FILES['photo'];

    $fileName = $photo['name'];
    $fileError = $photo['error'];
    $filetmp = $photo['tmp_name'];

    $fileExtension = explode('.',$fileName);
    $fileCheck = strtolower(end($fileExtension));
    $fileExtensionStored = array('png','jpg','jpeg');

    if(in_array($fileCheck,$fileExtensionStored)){
        $destinationFile = '../../resource/eventImages/'.$fileName;
        move_uploaded_file($filetmp,$destinationFile);
        $addGallery = "INSERT INTO gallery(photo)
        VALUES('$destinationFile')";
        $query = mysqli_query($connection,$addGallery);     
    }
}

?>