<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_from = 'oumaimaessafir@gmail.com';
    $email_subject ="contact form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
    
    
    $to = 'oumaimaessafir@gmail.com';
    $headers = "form : $email_from \r\n ";
    $headers .= "Reply-to : $email \r\n";
    mail($to, $email_subject,$email_body,$headers);
    header ('Location: ../index.php');
    }
?>