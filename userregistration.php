<?php

/* Takes values from userRegistration.html and email them. */

    $firstName=$_POST ['firstName'];
    $lastName = $_POST ['secondName'];
    $email=$_POST['emailAddress'];
    $from ="garfieldconnor@gmail.com";
    $servers=$_SERVER['HTTP_USER_AGENT'];
    $subject="Message from PHP...";


    // Build the body of the message

    $body= "<h1> User Registration Form </h1><p> Thank You, $firstName $lastName <br> Your details have been sent to $email. <br><br> User Agent = $server </p>";
    $Main = "Hello Connor";

    echo $body;
    echo $Main;

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'From: '.$from. "\r\n".
        'Reply-To: '.$from."\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $message = "<html><body>";
    $message .= $Main;
    $message .= "</body></html>";

    if (mail($email, $subject, $message, $headers)){
        echo "Your message was sent successfully";
    } else {
        echo "unable to send email. Please try again.";
    }
?>
