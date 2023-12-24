<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'morgingairaz@gmail.com';
    $subject = 'Form Submission';
    $message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
      echo "<h1>Sent Successfully! Thank you" . $name . ", we will contact you shortly!</h1>";
    } else {
      echo "Something went wrong!";
    }
  }
?>
