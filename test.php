<?php
// Homepage for Boshka Lighting
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Boshka Lighting | Elegant Lighting & Electrical Solutions</title>
  <meta name="description" content="Discover Boshka Lighting—where design meets power. Expert lighting and electrical services based in Weatherford, TX.">

  <!-- Canonical -->
  <link rel="canonical" href="https://boshkalighting.com/">

  <!-- Open Graph -->
  <meta property="og:title" content="Boshka Lighting | Elegant Lighting & Electrical Solutions" />
  <meta property="og:description" content="Discover Boshka Lighting—where design meets power. Expert lighting and electrical services based in Weatherford, TX." />
  <meta property="og:image" content="https://boshkalighting.com/images/logo.png" />
  <meta property="og:url" content="https://boshkalighting.com/" />
  <meta property="og:type" content="website" />

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700&display=swap" rel="stylesheet">

  <style>
/* ===================== */
/*     Global Styles     */
/* ===================== */

:root {
  --accent-blue: #0F6E92;
  --background-light: #f7f7f7;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Red Hat Display', sans-serif;
  background-color: var(--background-light);
  color: #1a1a1a;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

/* ===================== */
/*     Hero Section      */
/* ===================== */

.hero {
  position: relative;
  height: 100vh;
  background: url('images/Carlisle_CH314812_LIFESTYLE.jpg') center/cover no-repeat;
  overflow: hidden;
}

.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background-color: rgba(255, 255, 255, 0.4);
  z-index: 1;
}

.hero-fade {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, #f7f7f7 100%);
  z-index: 2;
}

.hero-content {
  position: relative;
  z-index: 3;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100%;
  padding: 0 20px;
}

.hero-logo {
  max-width: 800px;
  width: 100%;
  height: auto;
  margin-top: -120px;
}

.tagline {
  margin-top: -150px;
  font-size: 1.75rem;
  font-weight: 500;
  color: #1a1a1a;
  max-width: 700px;
  line-height: 1.8;
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .hero-logo {
    max-width: 600px;
    margin-top: -80px;
  }

  .tagline {
    margin-top: -40px;
    font-size: 1.2rem;
    line-height: 1.5;
  }
}

/* ===================== */
/*    About Section      */
/* ===================== */

.section {
  padding: 200px 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.about-image-container {
  flex: 1 1 400px;
  min-width: 300px;
}

.portrait-image {
  width: 100%;
  aspect-ratio: 3 / 4;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.about-content {
  flex: 2 1 500px;
  min-width: 300px;
  text-align: center;
}

.about-content p {
  font-size: 1.05rem;
  line-height: 1.7;
  color: #444;
  margin-bottom: 24px;
}

.about-content a {
  display: inline-block;
  background-color: var(--accent-blue);
  color: white;
  padding: 12px 24px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s ease;
}

.about-content a:hover {
  background-color: #0d5c78;
}

/* ===================== */
/*   Product Carousel    */
/* ===================== */

.product-tile {
  flex: 0 0 calc(100% / 6 - 20px);
  height: 300px;
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  padding: 20px 10px;
  font-size: 1rem;
  font-weight: 600;
  color: #1a1a1a;
  transition: transform 0.3s, background 0.3s;
}

.product-tile img {
  width: 150px;
  height: 150px;
  object-fit: contain;
  margin-bottom: 12px;
}

.product-tile span {
  display: block;
  font-size: 1.05rem;
}

.product-tile:hover {
  background-color: var(--accent-blue);
  color: white;
  transform: scale(1.05);
}

#carousel::-webkit-scrollbar {
  display: none;
}

#carousel {
  scrollbar-width: none;
}

.mobile-arrows {
  display: none;
  justify-content: center;
  gap: 20px;
  margin-top: 20px;
}

.mobile-arrows button {
  background-color: var(--accent-blue);
  color: white;
  border: none;
  border-radius: 50%;
  width: 44px;
  height: 44px;
  font-size: 1.5rem;
}

@media (max-width: 768px) {
  .product-tile {
    flex: 0 0 160px;
    height: 200px;
  }

  .product-tile img {
    width: 80px;
    height: 80px;
  }

  .mobile-arrows {
    display: flex;
  }

  #leftArrow,
  #rightArrow {
    display: none !important;
  }

  .carousel-wrapper {
    padding: 0 10px !important;
  }
}


/* ===================== */
/*     Quote Section     */
/* ===================== */

.quote-section {
  background-color: #f3f3f3;
  padding: 200px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.quote-container {
  max-width: 1000px;
  text-align: center;
  padding: 40px;
}

.quote-text {
  font-size: 2.5rem;
  font-weight: 500;
  color: #666;
  font-style: italic;
  margin-bottom: 20px;
  transition: opacity 0.5s ease-in-out;
}

.quote-author {
  font-size: 1.75rem;
  font-weight: 600;
  color: #0F6E92;
  transition: opacity 0.5s ease-in-out;
}

@media (max-width: 768px) {
  .quote-text {
    font-size: 1.6rem;
  }

  .quote-author {
    font-size: 1.3rem;
  }

  .quote-container {
    padding: 20px;
  }
}

/* ===================== */
/*     Offer Section     */
/* ===================== */

.offer-section {
  position: relative;
  background: url('images/AMPERSAND_PD22332-BK_LIFESTYLE.jpg') center/cover no-repeat;
  padding: 180px 20px;
  color: #1a1a1a;
  overflow: hidden;
}

.offer-overlay {
  position: absolute;
  inset: 0;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: 1;
}

.offer-container {
  position: relative;
  z-index: 2;
  max-width: 1400px;
  margin: 0 auto;
  text-align: center;
}

.offer-heading {
  font-size: 2.5rem;
  margin-bottom: 60px;
  font-weight: 700;
}

.accent-blue {
  color: var(--accent-blue);
}

.offer-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 40px;
}

.offer-card {
  background: white;
  padding: 40px 30px;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  text-align: center;
  transition: transform 0.3s ease;
}

.offer-card:hover {
  transform: translateY(-5px);
}

.offer-card h3 {
  font-size: 1.4rem;
  margin: 15px 0 10px;
  color: #0F6E92;
  font-weight: 600;
}

.offer-card p {
  font-size: 1rem;
  color: #444;
  line-height: 1.6;
}

.offer-icon {
  width: 50px;
  height: 50px;
  object-fit: contain;
  margin-bottom: 10px;
}

/* ===================== */
/*     CTA Section       */
/* ===================== */

.cta-section {
  background-color: #0F6E92;
  color: white;
  padding: 100px 20px;
  text-align: center;
}

.cta-container {
  max-width: 1000px;
  margin: 0 auto;
}

.cta-heading {
  font-size: 2.8rem;
  margin-bottom: 20px;
  font-weight: 700;
}

.cta-subtext {
  font-size: 1.2rem;
  margin-bottom: 30px;
}

.cta-button {
  background-color: white;
  color: #0F6E92;
  padding: 14px 28px;
  border: none;
  border-radius: 8px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
}

.cta-button:hover {
  background-color: #e6e6e6;
}

/* ===================== */
/*     Footer Styles     */
/* ===================== */

.site-footer {
  background-color: #0F6E92;
  color: white;
  text-align: center;
  padding: 40px 20px;
  font-size: 0.95rem;
}

  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

<section class="hero">
  <div class="hero-content">
    <img src="images/logo.png" alt="Boshka Lighting Logo" class="hero-logo">
    <p class="tagline">
      Where Design Meets Power.<br>
      Expert Lighting & Electrical Solutions Tailored to You.
    </p>
  </div>
  <div class="hero-fade"></div>
</section>

<section class="section" style="display: flex; align-items: center; flex-wrap: wrap; gap: 100px;">
  <div class="about-image-container">
    <img src="images/bing.jpg" alt="Team Member" class="portrait-image" />
  </div>
  <div class="about-content">
    <h2>About <span style="color: #0F6E92;">Boshka</span> Lighting & Electric</h2>
    <p>
      At Boshka Lighting, we believe lighting is more than function—it's an expression of space and emotion.
      With deep roots in design and electrical expertise, our team brings visions to life with style and precision.
    </p>
    <a href="/about">Meet Our Team</a>
  </div>
</section>

<!-- Product Section -->
<section id="products" style="width: 100%; padding: 80px 20px 100px; background-color: rgba(15, 110, 146, 0.08);">
  <div style="max-width: 1800px; margin: 0 auto;">
    <h2 style="font-size: 2.2rem; text-align: center; margin-bottom: 30px; color: #1a1a1a;">
      Explore Our <span style="color: #0F6E92;">Products</span>
    </h2>

    <div class="carousel-wrapper" style="position: relative; overflow: hidden; padding: 0 80px;">
      <!-- Desktop Arrows -->
      <button id="leftArrow" onclick="scrollCarousel(-1)"
        style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);
        background-color: var(--accent-blue); color: white; border: none; border-radius: 50%;
        width: 44px; height: 44px; font-size: 1.5rem; z-index: 2; display: none;">
        &#8249;
      </button>

      <div id="carousel"
        style="display: flex; overflow-x: auto; gap: 20px; scroll-behavior: smooth; padding: 20px 0;">
        <a href="https://dementlighting.com/landing/ceilinglights" class="product-tile">
          <img src="images/ceiling.jpg" alt="Ceiling Lights"><span>Ceiling Lights</span>
        </a>
        <a href="https://dementlighting.com/landing/walllights" class="product-tile">
          <img src="images/wall.jpg" alt="Wall Lights"><span>Wall Lights</span>
        </a>
        <a href="https://dementlighting.com/landing/fans" class="product-tile">
          <img src="images/fans.jpg" alt="Fans"><span>Fans</span>
        </a>
        <a href="https://dementlighting.com/landing/exteriorlighting" class="product-tile">
          <img src="images/exterior.jpg" alt="Exterior"><span>Exterior</span>
        </a>
        <a href="https://dementlighting.com/landing/landscape-lighting" class="product-tile">
          <img src="images/landscape.jpg" alt="Landscape"><span>Landscape</span>
        </a>
        <a href="https://dementlighting.com/landing/lamps" class="product-tile">
          <img src="images/lamps.jpg" alt="Lamps"><span>Lamps</span>
        </a>
        <a href="https://dementlighting.com/landing/led" class="product-tile">
          <img src="images/led.jpg" alt="LED Fixtures"><span>LED Fixtures</span>
        </a>
        <a href="https://dementlighting.com/landing/controls" class="product-tile">
          <img src="images/controls.jpg" alt="Controls"><span>Controls</span>
        </a>
        <a href="https://dementlighting.com/landing/furniture" class="product-tile">
          <img src="images/furniture.jpg" alt="Furniture"><span>Furniture</span>
        </a>
        <a href="https://dementlighting.com/landing/homedecor" class="product-tile">
          <img src="images/home.jpg" alt="Home Accents"><span>Home Accents</span>
        </a>
        <a href="https://dementlighting.com/landing/misc" class="product-tile"><span>More</span></a>
      </div>

      <!-- Desktop Arrow -->
      <button id="rightArrow" onclick="scrollCarousel(1)"
        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);
        background-color: var(--accent-blue); color: white; border: none; border-radius: 50%;
        width: 44px; height: 44px; font-size: 1.5rem; z-index: 2;">
        &#8250;
      </button>
    </div>

    <!-- Mobile Arrows -->
    <div class="mobile-arrows">
      <button onclick="scrollCarousel(-1)">&#8249;</button>
      <button onclick="scrollCarousel(1)">&#8250;</button>
    </div>
  </div>
</section>

<script>
  const carousel = document.getElementById('carousel');
  const leftArrow = document.getElementById('leftArrow');
  const rightArrow = document.getElementById('rightArrow');

  const mobileLeftArrow = document.querySelector('.mobile-arrows button:first-child');
  const mobileRightArrow = document.querySelector('.mobile-arrows button:last-child');

  function updateArrowVisibility() {
    const scrollLeft = carousel.scrollLeft;
    const scrollMax = carousel.scrollWidth - carousel.clientWidth;

    // Desktop arrows
    if (leftArrow) leftArrow.style.display = scrollLeft > 20 ? 'block' : 'none';
    if (rightArrow) rightArrow.style.display = scrollLeft < scrollMax - 20 ? 'block' : 'none';

    // Mobile arrows
    if (mobileLeftArrow) mobileLeftArrow.style.display = scrollLeft > 20 ? 'inline-block' : 'none';
    if (mobileRightArrow) mobileRightArrow.style.display = scrollLeft < scrollMax - 20 ? 'inline-block' : 'none';
  }

  function scrollCarousel(direction) {
    const scrollAmount = carousel.querySelector('.product-tile').offsetWidth * 2;
    carousel.scrollBy({ left: scrollAmount * direction, behavior: 'smooth' });

    setTimeout(updateArrowVisibility, 300);
  }

  window.addEventListener('load', updateArrowVisibility);
  carousel.addEventListener('scroll', updateArrowVisibility);
</script>

<!-- Quote Section -->
<section class="quote-section">
  <div class="quote-container">
    <p id="quoteText" class="quote-text">“Lighting is the jewelry of architecture.”</p>
    <p id="quoteAuthor" class="quote-author">– Sarah M., Interior Designer</p>
  </div>
</section>

<script>
  const quotes = [
    {
      text: "“Lighting is the jewelry of architecture.”",
      author: "– Sarah M., Interior Designer"
    },
    {
      text: "“Boshka made our home feel like art.”",
      author: "– Daniel R., Homeowner"
    },
    {
      text: "“I’ve never felt more confident in a lighting team.”",
      author: "– Emily T., Builder"
    },
    {
      text: "“They brought my vision to life with precision.”",
      author: "– Nicole P., Architect"
    },
    {
      text: "“Design meets power — and it shows.”",
      author: "– James K., Contractor"
    }
  ];

  let quoteIndex = 0;
  const quoteText = document.getElementById('quoteText');
  const quoteAuthor = document.getElementById('quoteAuthor');

  setInterval(() => {
    quoteText.style.opacity = 0;
    quoteAuthor.style.opacity = 0;

    setTimeout(() => {
      quoteIndex = (quoteIndex + 1) % quotes.length;
      quoteText.textContent = quotes[quoteIndex].text;
      quoteAuthor.textContent = quotes[quoteIndex].author;
      quoteText.style.opacity = 1;
      quoteAuthor.style.opacity = 1;
    }, 500);
  }, 5000);
</script>

<section class="offer-section">
  <div class="offer-overlay"></div>
  <div class="offer-container">
    <h2 class="offer-heading">What We <span class="accent-blue">Offer</span></h2>
    <div class="offer-grid">
      <div class="offer-card">
        <img src="images/icons/home.svg" alt="Residential" class="offer-icon">
        <h3>Residential Lighting</h3>
        <p>Custom lighting design for indoor and outdoor spaces that enhance your home’s style and function.</p>
      </div>
      <div class="offer-card">
        <img src="images/icons/building.svg" alt="Commercial" class="offer-icon">
        <h3>Commercial Projects</h3>
        <p>From offices to retail spaces, we offer end-to-end electrical design and installation.</p>
      </div>
      <div class="offer-card">
        <img src="images/icons/tree.svg" alt="Landscape" class="offer-icon">
        <h3>Landscape Lighting</h3>
        <p>Beautiful outdoor lighting to illuminate patios, gardens, trees, and walkways with elegance.</p>
      </div>
      <div class="offer-card">
        <img src="images/icons/solar-panel.svg" alt="Panel Upgrade" class="offer-icon">
        <h3>Panel & Wiring Upgrades</h3>
        <p>Modernize and secure your property with upgraded panels and infrastructure-ready wiring.</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section">
  <div class="cta-container">
    <h2 class="cta-heading">Ready to Illuminate Your Space?</h2>
    <p class="cta-subtext">Browse our hand-picked lighting categories and discover what fits your style and space.</p>
    <button onclick="scrollToProducts()" class="cta-button">Get Started</button>
  </div>
</section>

<script>
  function scrollToProducts() {
    const productSection = document.querySelector('#products');
    if (productSection) {
      const sectionTop = productSection.getBoundingClientRect().top + window.scrollY;
      const offset = window.innerHeight / 4; // Adjust this value to scroll a bit lower

      window.scrollTo({
        top: sectionTop - offset,
        behavior: 'smooth'
      });
    } else {
      window.location.href = "https://dementlighting.com/landing";
    }
  }
</script>

<footer class="site-footer">
  &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
</footer>

</body>
</html>
