<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $formContent = "From: $name \n Message: $message";
    $recipient = "MichaelManhire@gmail.com";
    $subject = "Contact Form on MichaelManhire.com";
    $mailHeader = "From $email \r\n";

    mail($recipient, $subject, $formContent, $mailHeader);
?>