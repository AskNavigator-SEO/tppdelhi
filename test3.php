<?php

    //get data from form
    $name = $_POST['Name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    // $message= $_POST['message'];
    $whatmoving = $_POST['whatmoving'];
    $reloctionFrom = $_POST['reloctionFrom'];
    $reloctionto = $_POST['reloctionto'];

    if (isset($_get['submit'])) {

    echo "heyjjj";

    }
  // Mail Code
/*
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    //$from = "test@thepackersmoversdelhi.com";
    $to = "ybhardwajboy@gmail.com";
    $subject = "Mail From website";
    $message = "hey";
    $headers = 'From: contact@thepackersmoversdelhi.com'       . "\r\n" .
                 'Reply-To: contact@thepackersmoversdelhi.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
    //$headers = "From:" . $from;
    echo $message;
    if(mail($to,$subject,$message, $headers)) {
      echo "Sent";
      //  header("Location:https://quick.asknavigator.com/survey.php");
    } else {
        echo "The email message was not sent.";
    }
*/

?>
