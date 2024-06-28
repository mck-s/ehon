<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "mck-s@outlook.jp"; // Replace with your email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
