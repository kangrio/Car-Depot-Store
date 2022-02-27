<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$to = "masolae.sa@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$from = $_POST['email'];
$headers = "From: $from" . "\r\n" .
"CC: $to";

mail($to,$subject,$txt,$headers);

?> 