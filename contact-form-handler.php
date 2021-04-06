<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];
    
    $email_from = 'hello@waffle.social'
    
    $email_subject = 'New Form Submission';
    
    $email_body =   "User name: $name.\n".
                    "User email: $visitor_email.\n".
                    "User Message: $message.\n";
                    
    $to = "hello@waffle.social"
    
    $headers = "From: $email_from \r\n"
    
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");

?>