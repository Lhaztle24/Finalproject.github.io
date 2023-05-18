<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $gender = $_POST["gender"];

  // Compose the email message
  $to = "lhaztle24@gmail.com";
  $subject = "New Registration";
  $message = "Full Name: " . $name . "\n";
  $message .= "Email: " . $email . "\n";
  $message .= "Address: " . $address . "\n";
  $message .= "Gender: " . $gender . "\n";

  // Set the email headers
  $headers = "From: Your Website <noreply@yourwebsite.com>\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "<p>Registration successful. We have sent you a confirmation email.</p>";
  } else {
    echo "<p>Registration failed. Please try again later.</p>";
  }
}
?>
