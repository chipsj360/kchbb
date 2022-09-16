<?php

include_once '../services/vendor/autoload.php';

if (isset($_POST['mobile'])&& isset($_POST['msg'])) {
  
    $sid = 'ACe6edc25556d8dfa41c719bf62c86fdaf';
$token = 'a6312d445e93fd8f98d5b8f567cb2fb9';
$client = new Twilio\Rest\Client($sid,$token);
$message = $client->messages->create(
     $_POST['mobile'],array('from'=>'KTCH',
     'body'=>$_POST['msg'])
);

if ($message->sid) {
    echo" message sent";

}
}
?>

<h2> sending sms</h2>
<form action="sms.php" method="post">
    <label for="">Enter Mobile Number:</label><br>
<input type="text" placeholder="Mobile" name="mobile"><br>
<label for="">Enter Message: </label><br>
<textarea name="msg" id="" cols="30" rows="10" placeholder="Message" ></textarea><br><br>
<input type="submit" value="send">

</form>