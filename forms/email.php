<?php
    function requiredControl($name, $error){
        return !isset($_POST[$name]) || empty($_POST[$name]) ? true : $error;
    }
    $error = false;
    $validations = ['name', 'email', 'subject', 'message'];

    foreach ($validations as $validation){
        $error = requiredControl($validation, $error);
    }

    $result = mail ("kevinpacifico2001@gmail.com", $_POST['subject'], $_POST['message'],  "Da: $_POST[email]");

    if($result){
        echo "Email inviata con successo";
    }

    else{
        echo "Problemi nell'invio dell'email";
    }
?>