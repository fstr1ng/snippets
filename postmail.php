<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $to = $_POST['email'];
    $subject = "Test mail"; 
    $message = $_POST['message']; 
    $headers = "From: POST request PHP script"; 

mail($to,$subject,$message,$headers); 

echo "Mail Sent.";
}
