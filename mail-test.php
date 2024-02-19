<?php

$awardspaceEmail = "se4050artsite@gmail.com";
$recipientEmail = "se4050artsite@gmail.com";

$from = "From: Mail Contact Form <" se4050artsite@gmail.com ">";
$to = $recipientEmail;

$subject = "PHP mail() Test";

$body = "This is a test message sent with the PHP mail function!";

if(mail($to,$subject,$body,$from)){
    echo 'E-mail message sent!';
} else {
    echo 'E-mail delivery failure!';
}

?>