<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $emailTo = "jsvacha@seas.upenn.edu";
  $body = "From: $name\n Message:\n $message";
  $headers = "From: $email"

  if ($_POST['submit']) {
    if (mail($emailTo, $subject, $body, $headers)) {
      echo "The email was sent successfully";
    } else {
      echo "The email could not be sent.";
    }
  }

?>
