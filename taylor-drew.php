<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meet Taylor Drew | Lighting & Design Consultant | Boshka Lighting</title>
  <meta name="description" content="Meet Taylor Drew, Lighting & Design Consultant at Boshka Lighting. Baylor University graduate with expertise in photojournalism and design." />
  <link rel="canonical" href="https://boshkalighting.com/taylor-drew" />

  <!-- Open Graph -->
  <meta property="og:title" content="Meet Taylor Drew | Lighting & Design Consultant | Boshka Lighting" />
  <meta property="og:description" content="Meet Taylor Drew, creative lighting consultant bringing organization and passion to every project at Boshka Lighting." />
  <meta property="og:image" content="https://boshkalighting.com/images/bing.jpg" />
  <meta property="og:url" content="https://boshkalighting.com/taylor-drew" />
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
      <h1>Taylor Drew</h1>
      <h3>Lighting & Design Consultant</h3>
    </div>
    <div class="profile-image">
      <img src="images/taylor-drew.jpeg" alt="Portrait of Taylor Drew">
    </div>
  </section>

  <section class="bio-section">
    <p>
      Taylor brings <span class="highlight">creativity, organization, and a genuine passion for helping others</span> to every project she takes on. A proud Baylor University graduate and Dean's List honoree, she earned her degree in Photojournalism, where she developed an eye for detail and an appreciation for how light shapes mood and atmosphere.
    </p>
    <p>
      Though new to the lighting industry, Taylor isn't new to design and construction. <span class="highlight">Growing up in a family deeply rooted in the building business</span>, she has a natural understanding of how spaces come together—and she loves combining that knowledge with her growing expertise in lighting to make each project shine.
    </p>
    <p>
      <span class="highlight">Driven, dependable, and always eager to go the extra mile</span>, Taylor takes pride in creating a smooth, enjoyable experience for every client she works with. Her thoughtful approach, friendly demeanor, and passion for making spaces feel just right make her an invaluable member of the Boshka Lighting & Electric team.
    </p>
    <p>
      When you work with Taylor, you're getting someone who truly cares about bringing your vision to life with both technical expertise and creative flair.
    </p>
  </section>

  <footer>
    &copy; <?= date("Y") ?> Boshka Lighting & Electric. All rights reserved.
  </footer>
</body>
</html>