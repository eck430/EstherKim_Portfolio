<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $sub = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['msg']);

    $to = 'estherkim430@gmail.com';
    $subject = 'EK Portfolio Form Submission';
    $headers = "From: $email";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $sub\n";
    $email_body .= "Message: \n$message";

    if(mail($to, $subject, $email_body, $headers)){
        #echo 'Thank you! Your message was sent successfully.';
        header("Location: contact.html?sent=true");
    }else{
        #echo 'Failed to send message.';
        header("Location: contact.html?sent=false");
    }
  }
?>