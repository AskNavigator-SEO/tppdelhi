<?php
if (isset($_POST['submit'])) {
    //get data from form
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
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
    $message = "Name = " . $name . "\r\n  Phone = " . $phone . "\r\n RelocationTo =" . $RelocationTo . "\r\n RelocationFrom =" . $RelocationFrom . "\r\n RelocationDate =" . $RelocationDate . "\r\n MovingItem =" . $MovingItem;
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

$url = "https://api.asknavigator.com/user/create.php";

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
"re_from" =>  $RelocationFrom,
"re_to"  =>  $RelocationTo,
"phone"  => $phone,
"re_date" => $RelocationDate
));

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);

$pageid = json_decode($resp, true)['id'];


Header("Location: https://asknavigator.com/user?q=".$pageid);

?>
