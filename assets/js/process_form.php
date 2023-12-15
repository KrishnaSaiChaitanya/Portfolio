<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full-name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    // You can add additional form fields as needed

    // Set up email content
    $to = "chaitanya.tata2105@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $message = "Full Name: " . $full_name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Subject: " . $subject . "\n";

    // Additional email content can be appended as needed

    // Send email
    $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
}
