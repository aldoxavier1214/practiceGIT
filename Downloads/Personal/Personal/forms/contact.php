<?php
// Change these variables to your own email address and subject
$to = "xavieraldo2003@gmail.com";
$subject = "Contact Form Submission";

// Get form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject_input = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

// Create the email content
$email_content = "Name: $name\n";
$email_content .= "Email: $email\n";
$email_content .= "Subject: $subject_input\n\n";
$email_content .= "Message:\n$message\n";

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $email_content, $headers)) {
    echo "Your message has been sent. Thank you!";
} else {
    echo "There was an error sending your message. Please try again.";
}
?>

