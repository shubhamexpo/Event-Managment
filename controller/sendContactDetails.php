<?php
if(isset($_POST['contactSend'])){
    
    $name=$_POST['name'];
    $phone_number=$_POST['phoneNumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if(mail("events@wesas.in","Some one send message from website",$email,$phone_number,$message))
    {
        $msg="Mail-Sent";
    }
    else{
        $msg="Mail-Not-Sent";
    }  
}
?>