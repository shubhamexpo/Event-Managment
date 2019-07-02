<?php
if(isset($_POST['submit'])){
    $email = $_GET["email"];
    $name=$_POST['full_name'];
    $event_name=$_POST['event_name'];
    $message = $_POST['event_description'];
    if(mail("$email","Your Registration for this event is confirm",$name,$event_name,$message))
    {
        $msg="Mail-Sent";
    }
    else{
        $msg="Mail-Not-Sent";
    }  
}
?>