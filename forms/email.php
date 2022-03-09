<?php

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSub = $_POST['subject'];
$message = $_POST['message'];

$to = 'ahmedrubel935@gmail.com';
$body = '';
$body .= "From: ".$userName."\r\n";
$body .= "Email: ".$userEmail."\r\n";
$body .= "message: ".$message."\r\n";

mail($to,$messageSub,$body);

?>