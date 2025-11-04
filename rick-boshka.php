<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meet Rick Boshka | Master Electrician | Boshka Lighting</title>
  <meta name="description" content="Meet Rick Boshka, Owner & Master Electrician at Boshka Lighting. Over 30 years of electrical experience serving Weatherford, TX." />
  <link rel="canonical" href="https://boshkalighting.com/rick-boshka" />

  <!-- Open Graph -->
  <meta property="og:title" content="Meet Rick Boshka | Master Electrician | Boshka Lighting" />
  <meta property="og:description" content="Meet Rick Boshka, Owner & Master Electrician with over 30 years of experience at Boshka Lighting." />
  <meta property="og:image" content="https://boshkalighting.com/images/bing.jpg" />
  <meta property="og:url" content="https://boshkalighting.com/rick-boshka" />
  <meta property="og:type" content="profile" />

  <!-- Favicon -->
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
  <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
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
      font-family: 'Montserrat', sans-serif;
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
      <h1>Rick Boshka</h1>
      <h3>Owner & Master Electrician</h3>
    </div>
    <div class="profile-image">
      <img src="images/rick-boshka.jpg" alt="Portrait of Rick Boshka">
    </div>
  </section>

  <section class="bio-section">
    <p>
      With over <span class="highlight">30 years of electrical experience</span>, Rick is the power behind Boshka Lighting & Electric. Originally from Connecticut, Rick built and ran his own successful electrical company, leading crews and wiring everything from new builds to complex commercial projects — often with his eyes closed (or so we think).
    </p>
    <p>
      Known for his precision and problem-solving skills, Rick is a <span class="highlight">"do it right the first time"</span> kind of guy. He currently oversees our Service Department, troubleshooting and repairing anything that needs attention — whether it's in the showroom or out in the field.
    </p>
    <p>
      Outside of work, Rick's energy doesn't stop. He was an <span class="highlight">avid hockey player and coach</span> in his younger years, and he's always loved baseball. A devoted husband, dad, and mentor, Rick raised his children in Connecticut, where every neighborhood kid knew him simply as <span class="highlight">"Royal Rick"</span> — the guy who would do anything for anyone. His mix of expertise, creativity, and big-hearted spirit keeps our team (and our lights) shining bright.
    </p>
  </section>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting & Electric. All rights reserved.
  </footer>
</body>
</html>