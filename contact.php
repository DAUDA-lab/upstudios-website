<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$success = false;
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // SMTP config
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'upstudios222@gmail.com'; // 🔁 Change to your Gmail
        $mail->Password   = 'xmxephkxddgzogns'; // 🔁 Use App Password!
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email content
        $mail->setFrom($email, $name);
        $mail->addAddress('yourgmail@gmail.com'); // 🔁 Where you want to receive

        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Message';
        $mail->Body    = "Name: $name <br>Email: $email <br>Message: $message";

        $mail->send();
      // Save to database
        $conn = new mysqli("localhost", "root", "", "upstudios");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        $success = "Message sent and saved successfully!";
    } catch (Exception $e) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - UPSTUDIOS</title>
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f5f5f5;
        color: #333;
    }

    /* Navigation Bar */
    .top-nav {
        background: #222;
        padding: 12px 0;
        text-align: center;
    }
    .top-nav ul {
        list-style: none;
        display: inline-flex;
        gap: 25px;
    }
    .top-nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        padding: 10px 15px;
    }
    .top-nav ul li a.active,
    .top-nav ul li a:hover {
        background: white;
        color: #222;
        border-radius: 5px;
    }

    /* Header background */
    .contact-hero {
        height: 250px;
        background-image: url('images/contact-bg.jpg');
        background-size: cover;
        background-position: center;
        animation: moveBackground 20s linear infinite;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        font-size: 2.5rem;
        font-weight: bold;
    }

    @keyframes moveBackground {
        0% { background-position: 0 0; }
        100% { background-position: 100% 0; }
    }

    .container {
        max-width: 700px;
        margin: 40px auto;
        padding: 30px;
        background: white;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        border-radius: 10px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
        padding: 12px 25px;
        background: #222;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }

    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #c3e6cb;
    }

    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #f5c6cb;
    }
  </style>
</head>
<body>



<!-- Navigation Bar -->
<nav class="top-nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
    </ul>
</nav>

<!-- Header Section -->
<div class="contact-hero">
    Contact Us
</div>

<!-- Contact Form Section -->
<div class="container">
    <h2>Send Us a Message</h2>

    <?php if (isset($success) && $success): ?>
        <div class="success-message">Your message was sent successfully!</div>
    <?php endif; ?>

    <?php if (isset($error) && !empty($error)): ?>
        <div class="error-message"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="contact.php">
        <div class="form-group">
            <label>Your Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <label>Your Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Your Message</label>
            <textarea name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</div>

</body>
</html>
