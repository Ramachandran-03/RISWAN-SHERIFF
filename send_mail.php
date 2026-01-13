<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your receiving email
    $to = "rishvana.sheriff@gmail.com";
    $subject = "New Legal Consultation Request";
    
    // Collect data from the form
    $name = $_POST['name'];
    $email = $_POST['email']; // NEW: Collecting email
    $phone = $_POST['phone'];
    $matter = $_POST['matter'];
    $message = $_POST['message'];
    
    // Prepare the email body
    $body = "You have received a new inquiry:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n"; // NEW: Adding email to body
    $body .= "Phone: $phone\n";
    $body .= "Matter: $matter\n\n";
    $body .= "Message:\n$message";
    
    // This allows you to click "Reply" in your email app to reply to the customer directly
    $headers = "From: webmaster@yourdomain.com" . "\r\n" .
               "Reply-To: $email";

    // Send
    if(mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>