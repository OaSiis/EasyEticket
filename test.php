<?php
require __DIR__.'vendor/autoload.php';
$mandrill = new Mandrill('S_9Qzezv5AZ5k1ie7ZTZpw');

$message = new stdClass();
$message->html = "html message";
$message->text = "text body";
$message->subject = "email subject";
$message->from_email = "lenaindidi@hotmail.fr";
$message->from_name  = "From Name";
$message->to = array(array("email" => "axl.78@hotmail.fr"));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
?>