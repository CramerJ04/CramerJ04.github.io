<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address where you want to receive the message
    $to = 'CramerJ04@uww.edu';

    // Subject of the email
    $email_subject = 'New Message From Contact Form';

    // Compose the email message
    $email_body = "You have received a new message from your website contact form.\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Subject: $subject\n" .
        "Message:\n$message";

    // Headers
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Sorry, an error occurred. Please try again later.';
    }
}
?>
