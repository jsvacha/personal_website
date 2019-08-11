<?php

if($_POST) {
  $name = "";
  $email = "";
  $subject = "";
  $message = "";

  if(isset($_POST['name'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  }

  if(isset($_POST['email'])) {
    $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  if(isset($_POST['subject'])) {
    $name = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
  }

  if(isset($_POST['message'])) {
    $name = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
  }

  $recipient = "jsvacha@seas.upenn.edu";

  $headers = 'From: ' . $email;

  if(mail($recipient, $subject, $message, $headers)) {
    echo '<p>Thank you. Your email has been submitted.</p>';
  } else {
    echo '<p>Sorry, but there was an error. Please send an email to jsvacha@seas.upenn.edu to contact me. </p>';
  }

} else {
  echo '<p>Sorry, but there was an error. Please send an email to jsvacha@seas.upenn.edu to contact me. </p>';
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>James Svacha - Contact</title>
    <meta name="author" content="James Svacha"/>
    <meta name="description" content="My contact info"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device_width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
  </head>

  <body>
    <div id="top-box">
      <div id="name-box">
        JAMES SVACHA
      </div>
      <div id="description-box">
        AERIAL ROBOTICS 
      </div>
    </div>

    <div id="main-box">
      <div id="menu-bar">
        <div class="nav-button selected">
          <a class="nav-link" href="index.html">ABOUT</a>
        </div>
        <div class="nav-button">
          <a class="nav-link" href="projects.html">PROJECTS</a>
        </div>
        <div class="nav-button">
          <a class="nav-link" href="cv.html">CV</a>
        </div>
        <div class="nav-button">
          <a class="nav-link" href="contact.php">CONTACT</a>
        </div>
        <div class="nav-button last-button">
          <a class="nav-link" href="cool-stuff.html">COOL STUFF</a>
        </div>
      </div>
      <div id="content-box">
        <p>Please fill out the information and submit to contact me via email.<br></p>
        <div class="container">
          <form name="emailform" method="post" action="contact.php" onsubmit="return validateForm()">
            <input type="text" id="name" name="name" placeholder="Name">
            <input type="text" id="email" name="email" placeholder="Email address (we won't share this)">
            <input type="text" id="subject" name="subject" placeholder="Subject">
            <textarea id="message" name="message" placeholder="Your message" style="height:200px"></textarea>
            <input type="submit" name="submit" value="submit">
          </form>
        </div>
      </div>
    </div>

    <script>
      function validateForm() {
        var x = document.forms["emailform"]["email"].value;
        if (x == "") {
          alert("Email address must be filled out!");
          return false;
        }
        x = document.forms["emailform"]["message"].value;
        if (x == "") {
          alert("Message is empty!");
          return false;
        }
      }
    </script>
    <div id="bottom-box">
      <div id="copyright">
        <p> &copy;<script type="text/javascript">document.write(new Date().getFullYear());</script> James Svacha &amp; Matt Steven</p>
      </div>
    </div>
  </body>

</html>
