<?php
$to = "nxrsh27@gmail.com"; // Recipient's email address
$subject = "Test Email"; // Subject of the email
$message = "Hello, this is a test email sent from PHP."; // Body of the email

$sender_email = "pamelaalvear@gmail.com"; // Sender's email address
$sender_name = "Pamela Alvear"; // Sender's name

// Set headers to include the sender's name and email
$headers = "From: $sender_name <$sender_email>" . "\r\n" .
           "Reply-To: $sender_email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
