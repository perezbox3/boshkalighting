<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meet Shahara Fowler | Service Electrician | Boshka Lighting</title>
  <meta name="description" content="Meet Shahara Fowler, Service Electrician at Boshka Lighting. Expert in electrical troubleshooting, repair services, and customer service excellence." />
  <link rel="canonical" href="https://boshkalighting.com/shahara-fowler" />

  <!-- Open Graph -->
  <meta property="og:title" content="Meet Shahara Fowler | Service Electrician | Boshka Lighting" />
  <meta property="og:description" content="Meet Shahara Fowler, service electrician specializing in electrical troubleshooting and repair services with exceptional customer care." />
  <meta property="og:image" content="https://boshkalighting.com/images/bing.jpg" />
  <meta property="og:url" content="https://boshkalighting.com/shahara-fowler" />
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
      <h1>Shahara Fowler</h1>
      <h3>Service Electrician</h3>
    </div>
    <div class="profile-image">
      <img src="images/shahara-fowler.jpg" alt="Portrait of Shahara Fowler">
    </div>
  </section>

  <section class="bio-section">
    <p>
      Shahara is our dedicated service electrician with a <span class="highlight">proven track record in electrical troubleshooting and repair</span>. Her expertise in diagnosing and resolving electrical issues makes her an essential part of our service team.
    </p>
    <p>
      With extensive experience in both residential and commercial electrical service calls, Shahara has developed <span class="highlight">exceptional problem-solving skills</span> that allow her to quickly identify and fix electrical problems. She specializes in emergency repairs, preventive maintenance, and electrical system upgrades.
    </p>
    <p>
      Shahara is known for her <span class="highlight">outstanding customer service</span> and ability to explain complex electrical issues in terms that clients can understand. She takes the time to educate customers about their electrical systems and provides recommendations for improving safety and efficiency.
    </p>
    <p>
      Whether responding to an emergency service call or performing routine electrical maintenance, Shahara approaches every job with professionalism and attention to detail. Her commitment to quality work and customer satisfaction has earned her the trust and respect of both colleagues and clients.
    </p>
  </section>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting & Electric. All rights reserved.
  </footer>
</body>
</html>