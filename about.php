<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> UPSTUDIOS - About Us</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      color: white;
      background: url('images/about-bg.jpg') no-repeat center center/cover;
      background-attachment: fixed;
    }

    nav {
      background: linear-gradient(to right, #6e4b8f, #d16ba5);
      padding: 1rem 2rem;
      display: flex;
      justify-content: center;
      gap: 2rem;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffdada;
    }

    header {
      text-align: center;
      padding: 4rem 2rem;
      background: rgba(0, 0, 0, 0.4);
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
      animation: fadeInUp 1s ease forwards;
    }

    header p {
      font-size: 1.2rem;
      opacity: 0;
      animation: fadeText 6s ease-in-out infinite;
    }

    @keyframes fadeText {
      0%, 100% { opacity: 0; }
      20%, 80% { opacity: 1; }
    }

    .about-content {
      padding: 3rem 2rem;
      background: rgba(0, 0, 0, 0.5);
      max-width: 1000px;
      margin: auto;
      border-radius: 20px;
    }

    .about-content h2 {
      text-align: center;
      margin-bottom: 1rem;
    }

    .about-content p {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 1rem;
    }

    .moving-text {
      font-size: 2rem;
      font-weight: bold;
      white-space: nowrap;
      overflow: hidden;
      width: 100%;
      margin-top: 2rem;
      position: relative;
      color: #ffe8f2;
    }

    .moving-text span {
      display: inline-block;
      animation: moveText 15s linear infinite;
    }

    @keyframes moveText {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }

    footer {
      text-align: center;
      padding: 2rem;
      background: linear-gradient(to right, #6e4b8f, #d16ba5);
      color: white;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }

      .moving-text {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="gallery.php">Gallery</a>
    <a href="booking.php">Booking</a>
    <a href="contact.php">Contact</a>
  </nav>

  <!-- Header -->
  <header>
    <h1>About UPSTUDIOS</h1>
    <p>Your trusted partner in capturing timeless memories.</p>
  </header>

  <!-- About Content -->
  <section class="about-content">
    <h2>Who We Are</h2>
    <p> UPSTUDIOS is a professional photography and video production brand offering exceptional services for weddings, birthdays, corporate events, baby showers, send-offs, and more.</p>
    <p>We combine creativity with technology to capture your most meaningful moments. Our team consists of highly skilled photographers and editors who ensure every shot and video reflects elegance, emotion, and artistic storytelling.</p>
    <p>Our promise is to deliver outstanding visual experiences that you'll cherish forever. Let us tell your story with passion, precision, and perfection.</p>

    <div class="moving-text">
      <span>We Capture Love | We Freeze Time | We Frame Joy | We Are UPSTUDIOS </span>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 UPSTUDIOS | Capturing Moments That Matter</p>
  </footer>

</body>
</html>
