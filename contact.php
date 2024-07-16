<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "keenyuyu@gmail.com"; 
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thanks for sending! I'll get back to you as soon as I can 🏃";
    } else {
        echo "Something went wrong! 😱 Please try again.";
    }
} else {
    echo "Invalid request ❌";
}
?>
