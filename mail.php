<?php
if (isset($_POST['submit'])) {
    //get data from form
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    // $message= $_POST['message'];
    $RelocationTo = $_POST['RelocationTo'];
    $RelocationFrom = $_POST['RelocationFrom'];
    $RelocationDate = $_POST['RelocationDate'];
    $MovingItem = $_POST['MovingItem'];


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    //$from = "test@thepackersmoversdelhi.com";
    $to = "tpmdleads@gmail.com";
    $subject = "Mail From website";
    $message = "Name = " . $Name . "\r\n  Phone = " . $Phone . "\r\n RelocationTo =" . $RelocationTo . "\r\n RelocationFrom =" . $RelocationFrom . "\r\n RelocationDate =" . $RelocationDate . "\r\n MovingItem =" . $MovingItem;
    $headers = 'From: contact@thepackersmoversdelhi.com'       . "\r\n" .
                 'Reply-To: contact@thepackersmoversdelhi.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
    //$headers = "From:" . $from;
    echo $message;
    if(mail($to,$subject,$message, $headers)) {
    
        header("Location:index.html");
    } else {
        echo "The email message was not sent.";
    }


}
?>
