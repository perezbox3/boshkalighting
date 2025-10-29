<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Boshka Lighting</title>
  <meta name="description" content="Learn about Boshka Lighting’s mission, team, and design philosophy. We blend elegance with function to illuminate your space with purpose." />

  <!-- Canonical -->
  <link rel="canonical" href="https://boshkalighting.com/about" />

  <!-- Open Graph -->
  <meta property="og:title" content="About Us | Boshka Lighting" />
  <meta property="og:description" content="Discover the creative minds behind Boshka Lighting. Meet the team and explore how we deliver lighting solutions with design excellence." />
  <meta property="og:image" content="https://boshkalighting.com/images/logo.png" />
  <meta property="og:url" content="https://boshkalighting.com/about" />
  <meta property="og:type" content="website" />

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Boshka Lighting",
    "image": "https://boshkalighting.com/images/logo.png",
    "url": "https://boshkalighting.com",
    "telephone": "+1-817-550-7130",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "3825 Quanah Hill Rd Unit 11",
      "addressLocality": "Weatherford",
      "addressRegion": "TX",
      "postalCode": "76087",
      "addressCountry": "US"
    },
    "description": "Boshka Lighting blends artistic design with technical expertise to deliver exceptional lighting and electrical solutions.",
    "priceRange": "$$"
  }
  </script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">

  <style>
    :root {
      --accent-blue: #2aaac8;
      --soft-white: #f9f9f9;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: var(--soft-white);
      color: #1a1a1a;
    }

    .hero-image {
      width: 100%;
      max-width: 1100px;
      max-height: 450px;
      object-fit: cover;
      display: block;
      margin: 120px auto 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .main-section {
      max-width: 1100px;
      margin: 0 auto 80px;
      padding: 0 20px;
    }

    .store-bio {
      font-size: 1.15rem;
      color: #444;
      line-height: 1.8;
      text-align: center;
      max-width: 800px;
      margin: 0 auto 80px auto;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 40px;
      justify-content: center;
    }

    .team-card {
      text-align: center;
      cursor: pointer;
    }

    .team-card img {
      width: 100%;
      border-radius: 12px;
      aspect-ratio: 1/1;
      object-fit: cover;
    }

    .team-card h3 {
      margin-top: 15px;
      font-size: 1.1rem;
      font-weight: 600;
    }

    .team-card p {
      color: #666;
      font-size: 0.95rem;
      margin-top: 4px;
    }

    .section-title {
      text-align: center;
      font-size: 2.3rem;
      font-family: 'Playfair Display', serif;
      margin: 80px 0 40px;
    }

    .section-title span {
      color: var(--accent-blue);
    }

    h1.page-title {
      text-align: center;
      font-size: 2.6rem;
      font-family: 'Playfair Display', serif;
      margin-bottom: 40px;
    }

    footer {
      text-align: center;
      padding: 40px;
      font-size: 0.85rem;
      color: #777;
    }

    @media (max-width: 768px) {
      .hero-image {
        max-height: 300px;
        border-radius: 12px;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <img src="images/bing.jpg" alt="Studio Exterior" class="hero-image" />

  <main class="main-section">
    <h1 class="page-title">About Boshka Lighting</h1>

    <p class="store-bio">
      At Boshka Lighting, we believe lighting is more than a utility — it's an experience. With roots in interior design and electrical craftsmanship, our studio creates lighting solutions that transform spaces, set moods, and deliver functionality with elegance. Every project is approached with care, precision, and an artistic touch.
    </p>

    <h2 class="section-title">Meet Our <span>Family</span></h2>

    <div class="team-grid">
      <div class="team-card" onclick="location.href='employee-owner.php'">
        <img src="images/bing.jpg" alt="Owner Photo">
        <h3>[Owner Name]</h3>
        <p>Founder & Creative Director</p>
      </div>
      <div class="team-card" onclick="location.href='employee-jordan.php'">
        <img src="images/bing.jpg" alt="Jordan">
        <h3>Jordan M.</h3>
        <p>Install Lead</p>
      </div>
      <div class="team-card" onclick="location.href='employee-taylor.php'">
        <img src="images/bing.jpg" alt="Taylor">
        <h3>Taylor R.</h3>
        <p>Lighting Consultant</p>
      </div>
      <div class="team-card" onclick="location.href='employee-alex.php'">
        <img src="images/bing.jpg" alt="Alex">
        <h3>Alex K.</h3>
        <p>Project Coordinator</p>
      </div>
    </div>
  </main>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
  </footer>
</body>
</html>

