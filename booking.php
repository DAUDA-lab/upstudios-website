<?php
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "upstudios");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $event_type = htmlspecialchars($_POST['event_type']);
    $date = htmlspecialchars($_POST['event_date']);
    $location = htmlspecialchars($_POST['location']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO bookings (name, email, event_type, event_date, location, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $event_type, $date, $location, $message);

    if ($stmt->execute()) {
        $success = "Booking submitted successfully!";
    } else {
        $error = "Error saving booking.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking - UPSTUDIOS</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: #f0f0f0;
            background-image: url('images/bg-booking.jpg');
            background-size: cover;
            background-position: center;
            color: #333;
        }

        nav {
            background: #000;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            max-width: 700px;
        }

        h1, h2 {
            text-align: center;
            color: #000;
        }

        form input, form select, form textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #aaa;
        }

        form button {
            background-color: #000;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
        }

        .success {
            color: green;
            text-align: center;
        }

        .error {
            color: red;
            text-align: center;
        }

        .packages {
            margin-top: 30px;
        }

        .package {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            margin-bottom: 15px;
        }

        .download-btn {
            text-align: center;
            margin-top: 20px;
        }

        .download-btn a {
            background: #333;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

    </style>
</head>
<body>

<nav>
    <a href="index.php">Home</a>
     <a href="booking.php">Booking</a>
    <a href="gallery.php">Gallery</a>    
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h1>Book Your Event</h1>
    <?php if ($success) echo "<p class='success'>$success</p>"; ?>
    <?php if ($error) echo "<p class='error'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Full Name" required>
        <input type="email" name="email" placeholder="Your Email Address" required>
        <select name="event_type" required>
            <option value="">-- Select Event Type --</option>
            <option>Wedding</option>
            <option>Send-Off</option>
            <option>Kitchen Party</option>
            <option>Birthday</option>
            <option>Official Event</option>
        </select>
        <input type="date" name="event_date" required>
        <input type="text" name="location" placeholder="Event Location" required>
        <textarea name="message" placeholder="Additional Information (Optional)" rows="4"></textarea>
        <button type="submit">Submit Booking</button>
    </form>

    <div class="packages">
        <h2>Our Packages & Prices</h2>
        <div class="package">
            <h3>Standard Package - TZS 300,000</h3>
            <p>Includes 3 hours coverage, 50 edited photos, and 1 video highlight.</p>
        </div>
        <div class="package">
            <h3>Deluxe Package - TZS 600,000</h3>
            <p>Includes 6 hours coverage, 100 edited photos, full event video coverage.</p>
        </div>
        <div class="package">
            <h3>Premium Package - TZS 1,200,000</h3>
            <p>Full day coverage, unlimited photos, drone coverage, photobook album.</p>
        </div>
    </div>

</div>

</body>
</html>
