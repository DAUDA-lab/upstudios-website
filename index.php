<?php include('includes/header.php'); ?>

<!-- Hero Slider with Dynamic Background and Rotating Text -->
<section class="hero-slider">
    <div class="slider">
        <div class="slide-text">
            <h1 id="dynamic-heading">Capturing Precious Moments</h1>
            <p>Book your photo & video session now!</p>
            <a href="booking.php" class="btn">Book Now</a>
        </div>
    </div>
</section>

<script>
// Rotating headlines
const headings = [
    "Capturing Precious Moments",
    "Your Story Through Our Lens",
    "Creating Timeless Memories",
    "Every Detail Matters"
];
let headingIndex = 0;
setInterval(() => {
    headingIndex = (headingIndex + 1) % headings.length;
    document.getElementById("dynamic-heading").textContent = headings[headingIndex];
}, 3000);

// Dynamic background image slider
const backgrounds = [
    "images/hero1.jpg",
    "images/hero2.jpg",
    "images/hero3.jpg"
];
let bgIndex = 0;
setInterval(() => {
    bgIndex = (bgIndex + 1) % backgrounds.length;
    document.querySelector('.hero-slider').style.backgroundImage = `url('${backgrounds[bgIndex]}')`;
}, 5000);
</script>

<!-- Our Services -->
<section class="services">
    <h2>Our Services</h2>
    <div class="services-grid">
        <div class="service-item"><img src="images/wedding.jpg"><p>Wedding</p></div>
        <div class="service-item"><img src="images/sendoff.jpg"><p>Send-Off Party</p></div>
        <div class="service-item"><img src="images/kitchen.jpg"><p>Kitchen Party</p></div>
        <div class="service-item"><img src="images/bridal.jpg"><p>Bridal Shower</p></div>
        <div class="service-item"><img src="images/birthday.jpg"><p>Birthday Photoshoot</p></div>
        <div class="service-item"><img src="images/official.jpg"><p>Official Events</p></div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="gallery-preview">
    <h2>Sample Works</h2>
    <div class="gallery-grid">
        <img src="images/sample1.jpg" alt="Sample 1">
        <img src="images/sample2.jpg" alt="Sample 2">
        <img src="images/sample3.jpg" alt="Sample 3">
    </div>
    <div class="video-preview">
        <video width="480" height="320" controls>
            <source src="videos/sample_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <a href="gallery.php" class="btn">View Full Gallery</a>
</section>

<!-- More Space Downward -->
<section class="upload-space">
    <h2>More Coming Soon</h2>
    <p>Stay tuned for more service previews and media uploads.</p>
</section>

<!-- Styles -->
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #fff;
}

.hero-slider {
    height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    background-size: cover;
    background-position: center;
    transition: background-image 1s ease-in-out;
    background-image: url('images/hero1.jpg');
}

  header, footer {
      text-align: center;
      padding: 2rem;
      background: linear-gradient(to right, #6e4b8f, #d16ba5);
      color: white;
    }
    
.slide-text {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 12px;
    max-width: 600px;
}

.services {
    padding: 50px 20px;
    background-color: #f9f9f9;
    text-align: center;
}
.services h2 {
    margin-bottom: 30px;
}
.services-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
}
.service-item {
    width: 220px;
    text-align: center;
}
.service-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 0 8px rgba(0,0,0,0.2);
}

.gallery-preview {
    padding: 50px 20px;
    background-color: #fff;
    text-align: center;
}
.gallery-preview h2 {
    margin-bottom: 30px;
}
.gallery-grid {
    display: flex;
    justify-content: center;
    gap: 25px;
    flex-wrap: wrap;
    margin-bottom: 30px;
}
.gallery-grid img {
    width: 250px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.video-preview {
    margin: 20px auto;
}

.upload-space {
    padding: 50px 20px;
    text-align: center;
    background-color: #f1f1f1;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    margin-top: 15px;
    background-color: #333;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}
.btn:hover {
    background-color: #555;
}
</style>

<?php include('includes/footer.php'); ?>
