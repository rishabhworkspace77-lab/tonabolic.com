<?php
// send-mail.php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method Not Allowed");
}

// 🔐 Basic sanitization
$name    = trim(htmlspecialchars($_POST['name'] ?? ''));
$email   = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
$phone   = trim(htmlspecialchars($_POST['phone'] ?? ''));
$message = trim(htmlspecialchars($_POST['message'] ?? ''));

// ❌ Validate required fields
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    exit("Required fields missing.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit("Invalid email address.");
}

// 📩 Email settings
$to = "ashritadattaarora@gmail.com"; // CHANGE if needed
$subject = "New Contact Form Message - Tonabolic";

$emailBody = "
New message received from Tonabolic Contact Form

Name: $name
Email: $email
Phone: $phone

Message:
$message
";

// 🧾 Headers
$headers  = "From: Tonabolic Website <no-reply@tonabolic.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// 🚀 Send mail
if (mail($to, $subject, $emailBody, $headers)) {
    header("Location: contact.html?success=1");
    exit();
} else {
    http_response_code(500);
    exit("Email failed to send.");
}
