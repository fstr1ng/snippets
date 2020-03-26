<?php
$to = 'test@mail.com';
$subject = 'Test mail';
$message = 'Hello! This is a simple email message.';
$from = 'support@sprinthost.ru';
$headers = 'From: $from';

if (mail($to,$subject,$message,$headers)) {
    echo ('Success');
}

else {
    echo ('Failed');
}

phpinfo();
