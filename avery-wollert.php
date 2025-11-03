<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meet Avery Wollert | Residential Electrician | Boshka Lighting</title>
  <meta name="description" content="Meet Avery Wollert, Residential Electrician at Boshka Lighting. Bringing fresh energy to home electrical projects with a focus on modern solutions and customer satisfaction." />
  <link rel="canonical" href="https://boshkalighting.com/avery-wollert" />

  <!-- Open Graph -->
  <meta property="og:title" content="Meet Avery Wollert | Residential Electrician | Boshka Lighting" />
  <meta property="og:description" content="Meet Avery Wollert, residential electrician specializing in modern home electrical solutions and smart home integration." />
  <meta property="og:image" content="https://boshkalighting.com/images/bing.jpg" />
  <meta property="og:url" content="https://boshkalighting.com/avery-wollert" />
  <meta property="og:type" content="profile" />

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">

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
      font-family: 'Montserrat', sans-sans-serif;
      background-color: #f7f7f7;
      color: #1a1a1a;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .back-link {
      position: absolute;
      top: 200px;
      left: 250px;
      font-size: 1.1rem;
      font-weight: 600;
      color: #999;
      text-decoration: none;
      z-index: 5;
      padding: 12px 20px;
      border-radius: 25px;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .back-link:hover {
      color: white;
      background-color: var(--accent-blue);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 768px) {
      .back-link {
        top: 180px;
        left: 20px;
        font-size: 1rem;
        padding: 10px 16px;
      }
    }

    .profile-header {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(15, 110, 146, 0.08);
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
      color: var(--accent-blue);
      margin-bottom: 30px;
      font-weight: 600;
    }

    .bio-section {
      max-width: 900px;
      margin: 60px auto;
      padding: 0 40px;
      font-size: 1.05rem;
      line-height: 1.7;
    }

    .bio-section p {
      margin-bottom: 24px;
      color: #444;
    }

    .highlight {
      color: var(--accent-blue);
      font-weight: 600;
    }

    footer {
      text-align: center;
      padding: 40px 20px;
      font-size: 0.85rem;
      color: #777;
      background-color: #f7f7f7;
      margin-top: auto;
    }

    @media (max-width: 768px) {
      .profile-header {
        flex-direction: column;
        text-align: center;
        padding: 80px 20px 60px;
      }

      .profile-info h1 {
        font-size: 2.2rem;
      }

      .bio-section {
        padding: 0 20px;
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <a href="/about.php" class="back-link">&#8592; Back to Team</a>

  <section class="profile-header">
    <div class="profile-info">
      <h1>Avery Wollert</h1>
      <h3>Residential Electrician</h3>
    </div>
    <div class="profile-image">
      <img src="images/avery-wollert.jpeg" alt="Portrait of Avery Wollert">
    </div>
  </section>

  <section class="bio-section">
    <p>
      Avery brings <span class="highlight">fresh energy and modern perspectives</span> to our residential electrical team. As one of our talented electricians, he specializes in home electrical installations, upgrades, and smart home integration.
    </p>
    <p>
      With a keen eye for detail and a passion for <span class="highlight">cutting-edge electrical technology</span>, Avery excels at helping homeowners modernize their electrical systems. He's particularly skilled at integrating smart home features, LED lighting systems, and energy-efficient electrical solutions.
    </p>
    <p>
      Avery takes pride in his <span class="highlight">customer-focused approach</span>, ensuring that every residential project is completed safely, efficiently, and to the highest standards. He enjoys educating homeowners about their electrical systems and helping them make informed decisions about upgrades and improvements.
    </p>
    <p>
      Whether it's a simple outlet installation, a complete home rewiring, or a complex smart home setup, Avery approaches each project with professionalism and expertise. His commitment to quality work and customer satisfaction makes him a valuable member of our residential team.
    </p>
  </section>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting & Electric. All rights reserved.
  </footer>
</body>
</html>