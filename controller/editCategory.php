<?php
if(isset($_POST['submit'])){
    $category_id = $_GET["category_id"];
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
        $update="UPDATE category SET category_name='$category_name',category_photo='$destinationFile' WHERE category_id=$category_id";
        $query = mysqli_query($connection,$update);  
        header('location:../admin/editCategory.php');   
    }
}
?>