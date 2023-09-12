<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Email setup
  $to = "valleyhmm@gmail.com"; // Replace with your email address
  $subject = "New Message from Valley Handyman & Maintenance";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send email
  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message. Please try again later.";
  }
}
?>
