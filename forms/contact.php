<?php
    // Check for empty fields
    if(empty($_POST['name'])      ||
        empty($_POST['email'])     ||
        empty($_POST['subject'])     ||
        empty($_POST['message'])   ||
        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        echo "Non hai compilato tutti i campi";
        return false;
    }
    
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $subject = strip_tags(htmlspecialchars($_POST['subject']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    // Create the email and send the message
    $to = 'kevinpacifico2001@gmail.com';
    $email_subject = "KPacifico Website nuovo messaggio > $subject";
    $email_body = "Kevin, hai ricevuto un messaggio su www.kpacifico.altervista.org\n\n"."*****************************************\n\n$subject\nda $name :: <$email_address>\n\n$message\n\nwww.kpacifico.altervista.org\n\n*****************************************";
    $headers = "From: noreply@kpacifico.altervista.org\n";
    $headers .= "Rispondi a: $email_address";   
    mail($to,$email_subject,$email_body,$headers);
    header('Location: ../index.html');
	exit;
?>