<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = "adesamit4u@gmail.com"; // Your email address
    $subject = "New message from contact form";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    // Email content
    $emailContent = "
    <html>
    <body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong><br> $message </p>
    </body>
    </html>";

    // Send the email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message failed to send.";
    }
}
?>
