<?php
// You can start a session or include any PHP logic here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> UPSTUDIOS - Gallery</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #fff;
      color: #222;
    }

    nav {
      background: linear-gradient(to right, #6e4b8f, #d16ba5);
      padding: 1rem 2rem;
      display: flex;
      justify-content: center;
      gap: 2rem;
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

    header, footer {
      text-align: center;
      padding: 2rem;
      background: linear-gradient(to right, #6e4b8f, #d16ba5);
      color: white;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    .carousel {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      gap: 1rem;
      padding: 2rem;
    }

    .carousel img {
      flex: 0 0 auto;
      width: 32%;
      height: auto;
      border-radius: 10px;
      scroll-snap-align: center;
      object-fit: cover;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 2rem;
    }

    .gallery-grid img {
      width: 100%;
      border-radius: 15px;
      object-fit: cover;
      height: 300px;
    }

    .featured-section {
      background-color: #fafafa;
      padding: 3rem 2rem;
    }

    .featured-images {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .featured-images img {
      border-radius: 25px;
      object-fit: cover;
    }

    .featured-images img:nth-child(1) {
      width: 60%;
      height: 400px;
    }

    .featured-images img:nth-child(2),
    .featured-images img:nth-child(3) {
      width: 30%;
      height: 400px;
    }

    .video-section {
      padding: 3rem 2rem;
      background: #f0f0f0;
      text-align: center;
    }

    .video-carousel {
      overflow-x: auto;
      display: flex;
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
      padding: 2rem 1rem;
    }

    .video-track {
      display: flex;
      gap: 1.5rem;
    }

    .video-track video {
      scroll-snap-align: center;
      width: 320px;
      height: 200px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
    }

    .video-track video:hover {
      transform: scale(1.05);
    }

    footer p {
      margin: 0;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .carousel img {
        width: 90%;
      }

      .featured-images img:nth-child(1),
      .featured-images img:nth-child(2),
      .featured-images img:nth-child(3) {
        width: 100%;
        height: auto;
      }

      .video-track video {
        width: 90vw;
        height: auto;
      }

      .video-grid,
      .featured-images {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

<!-- Navigation -->
<nav>
 
  <a href="index.php">Home</a>
  <a href="booking.php">Booking</a>
  <a href="gallery.php">Gallery</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
</nav>


  <!-- Header -->
  <header>
    <h1>OUR GALLERY</h1>
    <p>Memories beautifully captured</p>
  </header>

  <!-- Carousel Section -->
  <section class="carousel">
    <img src="images/pic1.jpg" alt="Gallery Image 1" />
    <img src="images/pic2.jpg" alt="Gallery Image 2" />
    <img src="images/pic3.jpg" alt="Gallery Image 3" />
    <img src="images/pic4.jpg" alt="Gallery Image 4" />
    <img src="images/pic5.jpg" alt="Gallery Image 5" />
  </section>

  <!-- Grid Gallery Section -->
  <section class="gallery-grid">
    <img src="images/img1.jpg" alt="Grid Image 1" />
    <img src="images/img2.jpg" alt="Grid Image 2" />
    <img src="images/img3.jpg" alt="Grid Image 3" />
    <img src="images/img4.jpg" alt="Grid Image 4" />
    <img src="images/img5.jpg" alt="Grid Image 5" />
    <img src="images/img6.jpg" alt="Grid Image 6" />
    <img src="images/img7.jpg" alt="Grid Image 7" />
    <img src="images/img8.jpg" alt="Grid Image 8" />
  </section>

  <!-- Large Featured Images -->
  <section class="featured-section">
    <h2 style="text-align:center;">Highlighted Moments</h2>
    <div class="featured-images">
      <img src="images/feature1.jpg" alt="Feature Large 1" />
      <img src="images/feature2.jpg" alt="Feature Side 1" />
      <img src="images/feature3.jpg" alt="Feature Side 2" />
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section">
    <h2>Watch Our Work</h2>
    <div class="video-carousel">
      <div class="video-track">
        <video controls>
          <source src="videos/video1.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <video controls>
          <source src="videos/video2.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <video controls>
          <source src="videos/video3.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <video controls>
          <source src="videos/video4.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <video controls>
          <source src="videos/video5.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <video controls>
          <source src="videos/video6.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <video controls>
          <source src="videos/video7.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <video controls>
          <source src="videos/video8.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025  UPSTUDIOS | Capturing Moments That Matter</p>
  </footer>

</body>
</html>
