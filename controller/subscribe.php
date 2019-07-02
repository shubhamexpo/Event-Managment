<?php
if(isset($_POST['subscribe'])){
    $email = $_POST['email'];
    if(mail("events@wesas.in","New Subscriber from Wesas Event",$email))
    {
        $msg="Sucessfully Subscribe";
    }
    else{
        $msg="Please Try Again";
    }  
}
?>