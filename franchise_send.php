<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Destination Email (Change this to your email!)
    $to = "ashritadattaarora@gmail.com"; 
        // $to = "rishabhworkspace77@gmail.com"; 
    $subject = "New Franchise Inquiry: " . $_POST['city'];

    // 2. Cleanup Inputs
    $full_name = strip_tags(trim($_POST["full_name"]));
    $email     = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone     = strip_tags(trim($_POST["phone"]));
    $city      = strip_tags(trim($_POST["city"]));
    $message   = strip_tags(trim($_POST["message"]));

    // 3. Construct Email Body
    $email_content = "Name: $full_name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "City: $city\n\n";
    $email_content .= "Background Info:\n$message\n";

    // 4. Email Headers
    $headers = "From: $full_name <$email>";

    // 5. Send and Redirect
    if (mail($to, $subject, $email_content, $headers)) {
        // Success! Redirect back to a thank-you page or home
        header("Location: index.html?status=success#contact");
    } else {
        // Error
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Not a POST request
    header("Location: index.html");
}
?>