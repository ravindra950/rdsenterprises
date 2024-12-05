<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = htmlspecialchars(trim($_POST['first_name']));
    $lastName = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $contact = htmlspecialchars(trim($_POST['contact']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email setup
    $to = "ravindrakambale9819@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "
      <h2>New Contact Form Submission</h2>
      <p><strong>First Name:</strong> $firstName</p>
      <p><strong>Last Name:</strong> $lastName</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Contact No:</strong> $contact</p>
      <p><strong>Message:</strong><br>$message</p>
    ";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h3>Thank you! Your message has been sent successfully.</h3>";
    } else {
        echo "<h3>Sorry! Something went wrong, please try again later.</h3>";
    }
}
?>
