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
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f9f9f9;
      color: #1a1a1a;
    }

    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Hero Section */
    .about-hero {
      background: linear-gradient(135deg, rgba(42, 170, 200, 0.1), rgba(42, 170, 200, 0.05));
      padding: 150px 20px 80px;
      margin-top: 120px;
      text-align: center;
    }

    .hero-content {
      max-width: 900px;
      margin: 0 auto;
    }

    .page-title {
      text-align: center;
      font-size: 2.6rem;
      font-family: 'Playfair Display', serif;
      margin-bottom: 0;
      color: #1a1a1a;
    }

    .hero-subtitle {
      font-size: 1.3rem;
      color: #666;
      margin-top: 30px;
      font-weight: 400;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Legacy Section */
    .legacy-section {
      background: white;
      padding: 80px 0;
      margin-bottom: 60px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .legacy-content {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 60px;
      align-items: center;
    }

    .legacy-stats {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .stat-item {
      text-align: center;
      padding: 20px;
      border-radius: 12px;
      background: rgba(42, 170, 200, 0.05);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 600;
      color: var(--accent-blue);
      font-family: 'Playfair Display', serif;
    }

    .stat-label {
      font-size: 0.9rem;
      color: #666;
      margin-top: 5px;
      font-weight: 500;
    }

    .legacy-text h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.2rem;
      margin-bottom: 25px;
      color: #1a1a1a;
    }

    .legacy-text p {
      font-size: 1.1rem;
      line-height: 1.7;
      color: #444;
      margin-bottom: 20px;
    }

    .hero-image {
      width: 100%;
      max-width: 800px;
      max-height: 400px;
      object-fit: cover;
      display: block;
      margin: 40px auto;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
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
      margin: 0 auto 80px;
    }

    .team-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
    }
    
    .team-card {
      flex: 0 0 220px;
      max-width: 220px;
    }

    .team-card {
      text-align: center;
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

    .team-link {
      display: inline-block;
      margin-top: 10px;
      color: var(--accent-blue);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      padding: 6px 12px;
      border: 1px solid var(--accent-blue);
      border-radius: 20px;
      transition: all 0.3s ease;
    }

    .team-link:hover {
      background-color: var(--accent-blue);
      color: white;
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

    /* Partnership Section */
    .partnership-section {
      background: linear-gradient(135deg, rgba(42, 170, 200, 0.08), rgba(42, 170, 200, 0.04));
      margin-top: 120px;
      padding: 100px 0;
      border-top: 1px solid rgba(42, 170, 200, 0.1);
      border-bottom: 1px solid rgba(42, 170, 200, 0.1);
    }

    .partnership-content {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .partnership-section .section-title {
      margin: 0 0 50px;
    }



    footer.site-footer {
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

      .about-hero {
        padding: 120px 20px 60px;
        margin-top: 100px;
      }

      .page-title {
        font-size: 2.2rem;
      }

      .hero-image {
        max-height: 300px;
        margin: 30px auto;
      }

      .hero-subtitle {
        font-size: 1.1rem;
        margin-top: 25px;
      }

      .legacy-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
      }

      .legacy-stats {
        flex-direction: row;
        justify-content: space-around;
        gap: 15px;
      }

      .stat-item {
        flex: 1;
        padding: 15px 10px;
      }

      .stat-number {
        font-size: 2rem;
      }

      .stat-label {
        font-size: 0.8rem;
      }

      .legacy-text h2 {
        font-size: 1.8rem;
      }

      .legacy-text p {
        font-size: 1rem;
      }

      .team-grid {
        gap: 30px;
      }

      .team-card {
        flex: 0 0 200px;
        max-width: 200px;
      }
    }
  </style>
</head>
<body class="about">
  <?php include 'includes/header.php'; ?>

  <!-- Hero Section -->
  <section class="about-hero">
    <div class="hero-content">
      <h1 class="page-title">About Boshka Lighting</h1>
      <img src="images/bing.jpg" alt="Studio Exterior" class="hero-image" />
    </div>
  </section>

  <!-- Legacy Section -->
  <section class="legacy-section">
    <div class="container">
      <div class="legacy-content">
        <div class="legacy-stats">
          <div class="stat-item">
            <div class="stat-number">60+</div>
            <div class="stat-label">Years of Excellence</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">3rd</div>
            <div class="stat-label">Generation Family Business</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">1000s</div>
            <div class="stat-label">Homes Illuminated</div>
          </div>
        </div>
        <div class="legacy-text">
          <h2>Our Legacy</h2>
          <p>Lighting is truly in our DNA. As a third-generation lighting business, we proudly carry on a family legacy that began more than 60 years ago.</p>
          <p>At Boshka Lighting & Electric, we believe that lighting is more than function—it's an art form that transforms spaces, sets moods, and creates the foundation for beautiful living.</p>
        </div>
      </div>
    </div>
  </section>

  <main class="main-section">

    <h2 class="section-title">Meet Our <span>Team</span></h2>

    <div class="team-grid">
      <div class="team-card">
        <img src="images/kerie-boshka.jpg" alt="Portrait of Kerie Boshka">
        <h3>Kerie Boshka</h3>
        <p>Owner & Lighting Designer</p>
        <a href="/kerie-boshka.php" class="team-link">Read Full Bio</a>
      </div>
      <div class="team-card">
        <img src="images/rick-boshka.jpg" alt="Portrait of Rick Boshka">
        <h3>Rick Boshka</h3>
        <p>Owner & Master Electrician</p>
        <a href="/rick-boshka.php" class="team-link">Read Full Bio</a>
      </div>
      <div class="team-card">
        <img src="images/taylor-drew.jpeg" alt="Portrait of Taylor Drew">
        <h3>Taylor Drew</h3>
        <p>Lighting & Design Consultant</p>
        <a href="/taylor-drew.php" class="team-link">Read Full Bio</a>
      </div>
      <div class="team-card">
        <img src="images/ashtyn-boshka.jpeg" alt="Portrait of Ashtyn Boshka">
        <h3>Ashtyn Boshka</h3>
        <p>Administrative Assistant</p>
        <a href="/ashtyn-boshka.php" class="team-link">Read Full Bio</a>
      </div>
      <div class="team-card">
        <img src="images/noah-center.jpeg" alt="Portrait of Noah Center">
        <h3>Noah Center</h3>
        <p>Industrial Electrician</p>
        <a href="/noah-center.php" class="team-link">Read Full Bio</a>
      </div>
      <div class="team-card">
        <img src="images/avery-wollert.jpeg" alt="Portrait of Avery Wollert">
        <h3>Avery Wollert</h3>
        <p>Residential Electrician</p>
        <a href="/avery-wollert.php" class="team-link">Read Full Bio</a>
      </div>
      <div class="team-card">
        <img src="images/shahara-fowler.jpg" alt="Portrait of Shahara Fowler">
        <h3>Shahara Fowler</h3>
        <p>Service Electrician</p>
        <a href="/shahara-fowler.php" class="team-link">Read Full Bio</a>
      </div>
    </div>

    <!-- Partnership Section -->
    <section class="partnership-section">
      <div class="partnership-content">
        <h2 class="section-title">Our <span>Partnership</span></h2>
        <div style="max-width: 800px; margin: 0 auto; text-align: center; padding: 0 20px;">
          <p style="font-size: 1.15rem; line-height: 1.8; color: #444; margin-bottom: 30px;">
            We're proud to partner with MG Brick & Stone, bringing together quality lighting and premium masonry services under one roof. This collaboration allows us to offer comprehensive construction solutions for builders and homeowners throughout the Dallas-Fort Worth area.
          </p>
          <a href="/mg-brick-stone.php" style="display: inline-block; background-color: var(--accent-blue); color: white; padding: 12px 24px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; margin-right: 15px;">Learn About Our Partnership</a>
          <a href="https://mgbrickandstone.com/" target="_blank" rel="noopener" style="display: inline-block; background-color: transparent; color: var(--accent-blue); padding: 12px 24px; border: 2px solid var(--accent-blue); border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">Visit MG Brick & Stone</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
  </footer>
</body>
</html>

