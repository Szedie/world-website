<?php
    $name = $_POST['name']
    $visitors_email = $_POST['email']
    $subject = $_POST['subject']
    $message = $_POST['message']

    $email_from = 'info@yourwebsite.com'

    $email_subject = 'New Form Submission'

    $email_body = "User Name: $name.\n".
                    "User Email: $visitors_email.\n".
                     "Subject: $subjet.\n".
                     "User Message: $message.\n".

    $to = 'szmacarimbang@gmail.com'

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitors_email \r\n";


    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")
?>
