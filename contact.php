<?php

if (isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $name = trim($_POST['email']);
    $name = trim($_POST['subject']);
    $name = trim($_POST['message']);

    $myMail = "yinkaabeebadesina@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from" . $name . ".\n\n" . $message;
    
    // Email your sending it to
    // SUbject
    // Is the message
    mail($myMail, $subject, $message2, $header);
    header("Location: index.php? Mail sent");
}

?>