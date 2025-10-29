<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Owner | Boshka Lighting</title>
  <meta name="description" content="Meet the founder and creative director of Boshka Lighting—blending design and electrical expertise to illuminate your space with purpose and beauty." />
  <link rel="canonical" href="https://boshkalighting.com/employee-owner" />

  <!-- Open Graph -->
  <meta property="og:title" content="Owner | Boshka Lighting" />
  <meta property="og:description" content="Get to know the founder of Boshka Lighting. Explore her creative vision and design philosophy that shapes every lighting project." />
  <meta property="og:image" content="https://boshkalighting.com/images/bing.jpg" />
  <meta property="og:url" content="https://boshkalighting.com/employee-owner" />
  <meta property="og:type" content="profile" />

  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Boshka Owner",
    "image": "https://boshkalighting.com/images/bing.jpg",
    "jobTitle": "Founder & Creative Director",
    "worksFor": {
      "@type": "Organization",
      "name": "Boshka Lighting",
      "url": "https://boshkalighting.com"
    },
    "description": "Founder of Boshka Lighting, leading the way in custom lighting solutions with a fusion of design and electrical innovation.",
    "sameAs": []
  }
  </script>

  <!-- Fonts & Favicon -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">

  <style>
    :root {
      --accent-blue: #0F6E92;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f7f7f7;
      color: #1a1a1a;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .highlight {
      color: var(--accent-blue);
      font-weight: 600;
    }

    .back-link {
      position: absolute;
      top: 150px;
      left: 250px;
      font-size: 0.95rem;
      font-weight: 500;
      color: #999;
      text-decoration: none;
      z-index: 5;
    }

    .back-link:hover {
      color: var(--accent-blue);
    }

    @media (max-width: 768px) {
      .back-link {
        left: 20px;
      }
    }

    .profile-header {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(42, 170, 200, 0.08);
      margin-top: 120px;
      padding: 120px 40px 100px;
      flex-wrap: wrap;
      gap: 40px;
    }

    .profile-image {
      max-width: 380px;
      border-radius: 16px;
      overflow: hidden;
      flex-shrink: 0;
    }

    .profile-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .profile-info {
      max-width: 600px;
      text-align: left;
    }

    .profile-info h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      margin-bottom: 12px;
    }

    .profile-info h3 {
      font-size: 1.2rem;
      color: #444;
      margin-bottom: 30px;
    }

    .bio-section {
      max-width: 900px;
      margin: 60px auto;
      padding: 0 40px;
      font-size: 1.05rem;
      line-height: 1.7;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 0.85rem;
      color: #777;
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <a href="/about" class="back-link">&#8592; Back</a>

  <section class="profile-header">
    <div class="profile-info">
      <h1>[Owner Name]</h1>
      <h3>Founder & Creative Director</h3>
    </div>
    <div class="profile-image">
      <img src="images/bing.jpg" alt="Portrait of Boshka Lighting Owner">
    </div>
  </section>

  <section class="bio-section">
    <p>
      [Owner Name] is the heart and soul of Boshka Lighting. With a background in both interior design and electrical innovation, she founded the studio to merge aesthetics with function. Her vision is rooted in making lighting an experience—one that’s deeply personal, beautifully executed, and transformative for every space.
    </p>
    <p>
      With over a decade in the field, she brings a unique perspective to each project, combining artistic flair with technical expertise. Whether working on a high-end residential project or a commercial overhaul, she leads with creativity, care, and a genuine passion for excellence.
    </p>
    <p>
      When she’s not designing lighting layouts or consulting with clients, she enjoys restoring vintage light fixtures, supporting local artisans, and finding inspiration in architecture, nature, and fashion.
    </p>
  </section>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting. All rights reserved.
  </footer>
</body>
</html>

