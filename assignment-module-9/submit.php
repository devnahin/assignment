<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));

 $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));

 $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING));

 // Validate inputs

 if (empty($name) || empty($email) || empty($message)) {

   echo "Please fill out all fields.";

   exit;

 }

 // Validate email address

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

   echo "Invalid email address.";

   exit;

 }

 // Send email

 $to = "skzawad007@gmail.com";

 $subject = "New Contact Form Submission";

 $headers = "From: $email\r\n";

 mail($to, $subject, $message, $headers);

 echo "Your message was sent successfully.";

}

?>