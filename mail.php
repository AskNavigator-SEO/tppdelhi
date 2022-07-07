<?php
if (isset($_POST['submit'])) {
    //get data from form
    $name = $_POST['name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    // $message= $_POST['message'];
    $whatmoving = $_POST['whatmoving'];
    $reloctionFrom = $_POST['reloctionFrom'];
    $reloctionto = $_POST['reloctionto'];

    // Mail Code

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    //$from = "test@thepackersmoversdelhi.com";
    $to = "ybhardwajboy@gmail.com";
    $subject = "Mail From website";
    $message = "name = " . $name . "\r\n  PhoneNumber = " . $PhoneNumber . "\r\n whatmoving =" . $whatmoving . "\r\n reloctionFrom =" . $reloctionFrom . "\r\n reloctionto =" . $reloctionto;
    $headers = 'From: contact@thepackersmoversdelhi.com'       . "\r\n" .
                 'Reply-To: contact@thepackersmoversdelhi.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
    //$headers = "From:" . $from;
    echo $message;
    if(mail($to,$subject,$message, $headers)) {
    
      //  header("Location:https://quick.asknavigator.com/survey.php");
    } else {
        echo "The email message was not sent.";
    }


}

// Forward lead to AskNavigator
// $url = "https://api.asknavigator.com/user/create.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = json_encode(array(
"name" =>  $name,
"re_from" =>  $reloctionFrom,
"re_to"  =>  $reloctionto,
"phone"  => $PhoneNumber,
"re_date" => $whatmoving
));

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);

$pageid = json_decode($resp, true)['id'];


// Header("Location: https://asknavigator.com/user?q=".$pageid);

// header("Location: https://thepackersmoversdelhi.com/thankyou.html?q=".$pageid);
?>
