<?php
if(isset($_POST['submit'])){
    $category_name = $_POST['category_name'];
    $category_photo = $_FILES['category_photo'];

    $fileName = $category_photo['name'];
    $fileError = $category_photo['error'];
    $filetmp = $category_photo['tmp_name'];

    $fileExtension = explode('.',$fileName);
    $fileCheck = strtolower(end($fileExtension));
    $fileExtensionStored = array('png','jpg','jpeg');

    if(in_array($fileCheck,$fileExtensionStored)){
        $destinationFile = '../../resource/eventCategoryImages/'.$fileName;
        move_uploaded_file($filetmp,$destinationFile);
        $addCategory = "INSERT INTO category(category_name,category_photo)
        VALUES('$category_name','$destinationFile')";
        $query = mysqli_query($connection,$addCategory);
        header('location:../admin/addCategory.php');
    }
}
?>